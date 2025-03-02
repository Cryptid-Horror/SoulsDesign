<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Award\Award;
use App\Models\Award\AwardCategory;
use App\Models\Character\Character;
use App\Models\Claymore\Gear;
use App\Models\Claymore\Weapon;
use App\Models\Currency\Currency;
use App\Models\Item\Item;
use App\Models\Item\ItemCategory;
use App\Models\Pet\Pet;
use App\Models\Prompt\Prompt;
use App\Models\Raffle\Raffle;
use App\Models\Recipe\Recipe;
use App\Models\Status\StatusEffect;
use App\Models\Submission\Submission;
use App\Models\User\User;
use App\Models\User\UserAward;
use App\Models\User\UserItem;
use App\Services\SubmissionManager;
use Auth;
use Config;
use Illuminate\Http\Request;
use Settings;

class SubmissionController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Submission Controller
    |--------------------------------------------------------------------------
    |
    | Handles prompt submissions and claims for the user.
    |
    */

    /**********************************************************************************************

        PROMPT SUBMISSIONS

    **********************************************************************************************/

    /**
     * Shows the user's submission log.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex(Request $request)
    {
        $submissions = Submission::with('prompt')->where('user_id', Auth::user()->id)->whereNotNull('prompt_id');
        $type = $request->get('type');
        if (!$type) {
            $type = 'Pending';
        }

        $submissions = $submissions->where('status', ucfirst($type));

        return view('home.submissions', [
            'submissions' => $submissions->orderBy('id', 'DESC')->paginate(20)->appends($request->query()),
            'isClaims'    => false,
        ]);
    }

    /**
     * Shows the submission page.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getSubmission($id)
    {
        $submission = Submission::viewable(Auth::user())->where('id', $id)->whereNotNull('prompt_id')->first();
        $inventory = isset($submission->data['user']) ? parseAssetData($submission->data['user']) : null;
        if (!$submission) {
            abort(404);
        }

        return view('home.submission', [
            'submission'      => $submission,
            'user'            => $submission->user,
            'awardsrow'       => Award::all()->keyBy('id'),
            'categories'      => ItemCategory::orderBy('sort', 'DESC')->get(),
            'awardcategories' => AwardCategory::orderBy('sort', 'DESC')->get(),
            'inventory'       => $inventory,
            'itemsrow'        => Item::all()->keyBy('id'),
            'awardsrow'       => Award::all()->keyBy('id'),
        ]);
    }

    /**
     * Shows the submit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getNewSubmission(Request $request)
    {
        $closed = !Settings::get('is_prompts_open');
        $awardcase = UserAward::with('award')->whereNull('deleted_at')->where('count', '>', '0')->where('user_id', Auth::user()->id)->get();
        $inventory = UserItem::with('item')->whereNull('deleted_at')->where('count', '>', '0')->where('user_id', Auth::user()->id)->get();
        $awardcase = UserAward::with('award')->whereNull('deleted_at')->where('count', '>', '0')->where('user_id', Auth::user()->id)->get();

        return view('home.create_submission', [
            'closed'  => $closed,
            'isClaim' => false,
        ] + ($closed ? [] : [
            'submission'          => new Submission,
            'prompts'             => Prompt::active()->sortAlphabetical()->pluck('name', 'id')->toArray(),
            'characterCurrencies' => Currency::where('is_character_owned', 1)->orderBy('sort_character', 'DESC')->pluck('name', 'id'),
            'categories'          => ItemCategory::orderBy('sort', 'DESC')->get(),
            'item_filter'         => Item::orderBy('name')->released()->get()->keyBy('id'),
            'items'               => Item::orderBy('name')->released()->pluck('name', 'id'),
            'character_items'     => Item::whereIn('item_category_id', ItemCategory::where('is_character_owned', 1)->pluck('id')->toArray())->orderBy('name')->released()->pluck('name', 'id'),
            'currencies'          => Currency::where('is_user_owned', 1)->orderBy('name')->pluck('name', 'id'),
            'pets'                => Pet::orderBy('name')->pluck('name', 'id'),
            'gears'               => Gear::orderBy('name')->pluck('name', 'id'),
            'weapons'             => Weapon::orderBy('name')->pluck('name', 'id'),
            'statuses'            => StatusEffect::orderBy('name')->pluck('name', 'id'),
            'awards'              => Award::orderBy('name')->released()->where('is_user_owned', 1)->pluck('name', 'id'),
            'characterAwards'     => Award::orderBy('name')->released()->where('is_character_owned', 1)->pluck('name', 'id'),
            'inventory'           => $inventory,
            'page'                => 'submission',
            'expanded_rewards'    => Config::get('lorekeeper.extensions.character_reward_expansion.expanded'),
        ]));
    }

    /**
     * Shows character information.
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterInfo($slug)
    {
        $character = Character::visible()->where('slug', $slug)->first();

        return view('home._character', [
            'character' => $character,
        ]);
    }

    /**
     * Shows prompt information.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getPromptInfo($id)
    {
        $prompt = Prompt::active()->where('id', $id)->first();
        if (!$prompt) {
            return response(404);
        }

        $count['all'] = Submission::submitted($id, Auth::user()->id)->count();
        $count['Hour'] = Submission::submitted($id, Auth::user()->id)->where('created_at', '>=', now()->startOfHour())->count();
        $count['Day'] = Submission::submitted($id, Auth::user()->id)->where('created_at', '>=', now()->startOfDay())->count();
        $count['Week'] = Submission::submitted($id, Auth::user()->id)->where('created_at', '>=', now()->startOfWeek())->count();
        $count['Month'] = Submission::submitted($id, Auth::user()->id)->where('created_at', '>=', now()->startOfMonth())->count();
        $count['Year'] = Submission::submitted($id, Auth::user()->id)->where('created_at', '>=', now()->startOfYear())->count();

        if ($prompt->limit_character) {
            $limit = $prompt->limit * Character::visible()->where('is_myo_slot', 0)->where('user_id', Auth::user()->id)->count();
        } else {
            $limit = $prompt->limit;
        }

        return view('home._prompt', [
            'prompt' => $prompt,
            'count'  => $count,
            'limit'  => $limit,
        ]);
    }

    /**
     * Creates a new submission.
     *
     * @param App\Services\SubmissionManager $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postNewSubmission(Request $request, SubmissionManager $service)
    {
        $request->validate(Submission::$createRules);
        if ($service->createSubmission($request->only(['url', 'prompt_id', 'comments', 'slug', 'character_rewardable_type', 'character_rewardable_id', 'character_rewardable_quantity', 'rewardable_type', 'rewardable_id', 'quantity', 'stack_id', 'stack_quantity', 'currency_id', 'currency_quantity', 'is_focus']), Auth::user())) {
            flash('Prompt submitted successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }

            return redirect()->back();
        }

        return redirect()->to('submissions');
    }

    /**********************************************************************************************

        CLAIMS

    **********************************************************************************************/

    /**
     * Shows the user's claim log.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getClaimsIndex(Request $request)
    {
        $submissions = Submission::where('user_id', Auth::user()->id)->whereNull('prompt_id');
        $type = $request->get('type');
        if (!$type) {
            $type = 'Pending';
        }

        $submissions = $submissions->where('status', ucfirst($type));

        return view('home.submissions', [
            'submissions' => $submissions->orderBy('id', 'DESC')->paginate(20)->appends($request->query()),
            'isClaims'    => true,
        ]);
    }

    /**
     * Shows the claim page.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getClaim($id)
    {
        $submission = Submission::viewable(Auth::user())->where('id', $id)->whereNull('prompt_id')->first();
        $inventory = isset($submission->data['user']) ? parseAssetData($submission->data['user']) : null;
        if (!$submission) {
            abort(404);
        }

        return view('home.submission', [
            'submission' => $submission,
            'user'       => $submission->user,
            'awardsrow'  => Award::all()->keyBy('id'),
            'categories' => ItemCategory::orderBy('sort', 'DESC')->get(),
            'itemsrow'   => Item::all()->keyBy('id'),
            'awardsrow'  => Award::all()->keyBy('id'),
            'inventory'  => $inventory,
        ]);
    }

    /**
     * Shows the submit claim page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getNewClaim(Request $request)
    {
        $closed = !Settings::get('is_claims_open');
        $inventory = UserItem::with('item')->whereNull('deleted_at')->where('count', '>', '0')->where('user_id', Auth::user()->id)->get();

        return view('home.create_submission', [
            'closed'  => $closed,
            'isClaim' => true,
        ] + ($closed ? [] : [
            'submission'          => new Submission,
            'characterCurrencies' => Currency::where('is_character_owned', 1)->orderBy('sort_character', 'DESC')->pluck('name', 'id'),
            'categories'          => ItemCategory::orderBy('sort', 'DESC')->get(),
            'inventory'           => $inventory,
            'item_filter'         => Item::orderBy('name')->released()->get()->keyBy('id'),
            'items'               => Item::orderBy('name')->released()->pluck('name', 'id'),
            'currencies'          => Currency::where('is_user_owned', 1)->orderBy('name')->pluck('name', 'id'),
            'pets'                => Pet::orderBy('name')->pluck('name', 'id'),
            'gears'               => Gear::orderBy('name')->pluck('name', 'id'),
            'weapons'             => Weapon::orderBy('name')->pluck('name', 'id'),
            'statuses'            => StatusEffect::orderBy('name')->pluck('name', 'id'),
            'awards'              => Award::orderBy('name')->released()->where('is_user_owned', 1)->pluck('name', 'id'),
            'characterAwards'     => Award::orderBy('name')->released()->where('is_character_owned', 1)->pluck('name', 'id'),
            'raffles'             => Raffle::where('rolled_at', null)->where('is_active', 1)->orderBy('name')->pluck('name', 'id'),
            'recipes'             => Recipe::orderBy('name')->pluck('name', 'id'),
            'page'                => 'submission',
            'expanded_rewards'    => Config::get('lorekeeper.extensions.character_reward_expansion.expanded'),
        ]));
    }

    /**
     * Creates a new claim.
     *
     * @param App\Services\SubmissionManager $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postNewClaim(Request $request, SubmissionManager $service)
    {
        $request->validate(Submission::$claimRules);
        if ($service->createSubmission($request->only(['url', 'comments', 'stack_id', 'stack_quantity', 'slug', 'character_rewardable_type', 'character_rewardable_id', 'character_rewardable_quantity', 'rewardable_type', 'rewardable_id', 'quantity', 'currency_id', 'currency_quantity', 'is_focus']), Auth::user(), true)) {
            flash('Claim submitted successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }

            return redirect()->back();
        }

        return redirect()->to('claims');
    }
}
