<?php

namespace App\Http\Controllers\Characters;

use App\Http\Controllers\Controller;
use App\Models\Character\Character;
use App\Models\Character\CharacterProfile;
use App\Models\Character\CharacterTransfer;
use App\Models\Feature\Feature;
use App\Models\Rarity;
use App\Models\Species\Species;
use App\Models\Species\Subtype;
use App\Models\User\User;
use App\Models\WorldExpansion\Location;
use App\Services\CharacterManager;
use App\Services\DesignUpdateManager;
use Auth;
use Illuminate\Http\Request;
use Route;
use Settings;

class MyoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | MYO Slot Controller
    |--------------------------------------------------------------------------
    |
    | Handles displaying and acting on an MYO slot.
    |
    */

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware(function ($request, $next) {
            $id = Route::current()->parameter('id');
            $check = Character::where('id', $id)->first();
            if (!$check) {
                abort(404);
            }

            if ($check->is_myo_slot) {
                $query = Character::myo(1)->where('id', $id);
                if (!(Auth::check() && Auth::user()->hasPower('manage_characters'))) {
                    $query->where('is_visible', 1);
                }
                $this->character = $query->first();
                if (!$this->character) {
                    abort(404);
                }
                $this->character->updateOwner();

                return $next($request);
            } else {
                return redirect('/character/'.$check->slug);
            }
        });
    }

    /**
     * Shows an MYO slot's masterlist entry.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacter($id)
    {
        return view('character.myo.character', [
            'character' => $this->character,
        ]);
    }

    /**
     * Shows an MYO slot's profile.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterProfile($id)
    {
        return view('character.profile', [
            'character' => $this->character,
        ]);
    }

    /**
     * Shows an MYO slot's edit profile page.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getEditCharacterProfile($id)
    {
        if (!Auth::check()) {
            abort(404);
        }

        $isMod = Auth::user()->hasPower('manage_characters');
        $isOwner = ($this->character->user_id == Auth::user()->id);
        if (!$isMod && !$isOwner) {
            abort(404);
        }

        return view('character.edit_profile', array_merge([
            'character'    => $this->character,
            'locations'    => Location::all()->where('is_character_home')->pluck('style', 'id')->toArray(),
            'user_enabled' => Settings::get('WE_user_locations'),
            'char_enabled' => Settings::get('WE_character_locations'),
        ], ($isMod ? [
            'isMyo'     => $this->character->is_myo,
            'specieses' => ['0' => 'Select Species'] + Species::orderBy('sort', 'DESC')->pluck('name', 'id')->toArray(),
            'subtypes'  => ['0' => 'Select Subtype'] + Subtype::orderBy('sort', 'DESC')->pluck('name', 'id')->toArray(),
            'rarities'  => ['0' => 'Select Rarity'] + Rarity::orderBy('sort', 'DESC')->pluck('name', 'id')->toArray(),
            'features'  => Feature::getDropdownItems(),
        ] : [])));
    }

    /**
     * Edits an MYO slot's profile.
     *
     * @param App\Services\CharacterManager $service
     * @param int                           $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditCharacterProfile(Request $request, CharacterManager $service, $id)
    {
        if (!Auth::check()) {
            abort(404);
        }

        $isMod = Auth::user()->hasPower('manage_characters');
        $isOwner = ($this->character->user_id == Auth::user()->id);
        if (!$isMod && !$isOwner) {
            abort(404);
        }

        $request->validate(CharacterProfile::$rules);
        if ($service->updateCharacterProfile(
            $request->only(
                array_merge(
                    [
                        'name', 'link', 'title_name', 'nicknames', 'gender_pronouns',
                        'custom_values_group', 'custom_values_name', 'custom_values_data',
                        'text', 'is_gift_art_allowed', 'is_gift_writing_allowed',
                        'is_trading', 'alert_user', 'location', 'faction',
                    ],
                    ($isMod ?
                    [
                        'genotype', 'phenotype', 'species_id', 'subtype_id', 'rarity_id', 'feature_id', 'feature_data', 'sex',
                        'slots_used', 'adornments', 'free_markings', 'health_status',
                        'ouroboros', 'taming', 'basic_aether', 'low_aether', 'high_aether',
                        'arena_ranking', 'soul_link_type', 'soul_link_target', 'soul_link_target_link',
                        'is_adopted', 'temperament', 'diet', /*'rank',*/ 'skills',
                        // 'sire_slug', 'dam_slug', 'ss_slug', 'sd_slug', 'ds_slug', 'dd_slug',
                        // 'sss_slug', 'ssd_slug', 'sds_slug', 'sdd_slug',
                        // 'dss_slug', 'dsd_slug', 'dds_slug', 'ddd_slug', 'use_custom_lineage',
                        'has_grand_title',
                    ]
                    : [])
                )
            ),
            $this->character,
            Auth::user(),
            $isMod
        )) {
            flash('Profile edited successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Shows an MYO slot's ownership logs.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterOwnershipLogs($id)
    {
        return view('character.ownership_logs', [
            'character' => $this->character,
            'logs'      => $this->character->getOwnershipLogs(0),
        ]);
    }

    /**
     * Shows an MYO slot's ownership logs.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterLogs($id)
    {
        return view('character.character_logs', [
            'character' => $this->character,
            'logs'      => $this->character->getCharacterLogs(),
        ]);
    }

    /**
     * Shows an MYO slot's submissions.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterSubmissions($id)
    {
        return view('character.submission_logs', [
            'character' => $this->character,
            'logs'      => $this->character->getSubmissions(),
        ]);
    }

    /**
     * Shows an MYO slot's transfer page.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getTransfer($id)
    {
        if (!Auth::check()) {
            abort(404);
        }

        $isMod = Auth::user()->hasPower('manage_characters');
        $isOwner = ($this->character->user_id == Auth::user()->id);
        if (!$isMod && !$isOwner) {
            abort(404);
        }

        return view('character.transfer', [
            'character'      => $this->character,
            'transfer'       => CharacterTransfer::active()->where('character_id', $this->character->id)->first(),
            'cooldown'       => Settings::get('transfer_cooldown'),
            'transfersQueue' => Settings::get('open_transfers_queue'),
            'userOptions'    => User::visible()->orderBy('name')->pluck('name', 'id')->toArray(),
        ]);
    }

    /**
     * Opens a transfer request for an MYO slot.
     *
     * @param App\Services\CharacterManager $service
     * @param int                           $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postTransfer(Request $request, CharacterManager $service, $id)
    {
        if (!Auth::check()) {
            abort(404);
        }

        if ($service->createTransfer($request->only(['recipient_id', 'user_reason']), $this->character, Auth::user())) {
            flash('Transfer created successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Cancels a transfer request for an MYO slot.
     *
     * @param App\Services\CharacterManager $service
     * @param int                           $id
     * @param int                           $id2
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCancelTransfer(Request $request, CharacterManager $service, $id, $id2)
    {
        if (!Auth::check()) {
            abort(404);
        }

        if ($service->cancelTransfer(['transfer_id' => $id2], Auth::user())) {
            flash('Transfer cancelled.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Shows an MYO slot's approval page.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterApproval($id)
    {
        if (!Auth::check() || $this->character->user_id != Auth::user()->id) {
            abort(404);
        }

        return view('character.update_form', [
            'character' => $this->character,
            'queueOpen' => Settings::get('is_myos_open'),
            'request'   => $this->character->designUpdate()->active()->first(),
        ]);
    }

    /**
     * Opens a new design approval request for an MYO slot.
     *
     * @param App\Services\DesignUpdateManager $service
     * @param int                              $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCharacterApproval(DesignUpdateManager $service, $id)
    {
        if (!Auth::check() || $this->character->user_id != Auth::user()->id) {
            abort(404);
        }

        if ($request = $service->createDesignUpdateRequest($this->character, Auth::user())) {
            flash('Successfully created new Registered Dragon slot approval draft.')->success();

            return redirect()->to($request->url);
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }
}
