<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Config;
use Carbon\Carbon;
use Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\SitePage;
use App\Models\Comment;
use App\Models\Forum;
use App\Models\Character\Character;
use App\Models\Character\CharacterImage;
use App\Services\LinkService;
use App\Services\DeviantArtService;
use App\Services\UserService;
class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | Displays the homepage and handles redirection for linking a user's social media account.
    |
    */

    /**
     * Shows the homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        if(Settings::get('featured_character')) {
            $character = Character::find(Settings::get('featured_character'));
        }
        else $character = null;
        return view('welcome', [
            'about' => SitePage::where('key', 'about')->first(),
            'featured' => $character,
        ]);
    }
   
    public function getIndex()
    {
        $characters = Character::with('user.rank')->with('image.features')->with('rarity')->with('image.species')->myo(0);
        $imageQuery = CharacterImage::images()->with('features')->with('rarity')->with('species')->with('features')
        ->whereIn('character_id', $characters->pluck('id')->toArray());
        $imageQuery->orderBy('created_at', 'DESC')->take(10);
        $characters->visible()->whereIn('id', $imageQuery->pluck('character_id')->toArray())->orderBy('updated_at', 'DESC')->take(4);

        return view('welcome', [
            'characters' => $characters->get(),
            'news' => News::visible()->orderBy('updated_at', 'DESC')->first(),
            'sales' => Sales::visible()->orderBy('updated_at', 'DESC')->first(),
            'submissions' => $submissions->get(),
            'about' => SitePage::where('key', 'about')->first()
        ]);
    }

    
    /**
     * Shows the account linking page.
     *
     * @param  \Illuminate\Http\Request        $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getLink(Request $request)
    {
        // If the user already has a username associated with their account, redirect them
        if(Auth::check() && Auth::user()->hasAlias) redirect()->to('home');

        // Display the login link
        return view('auth.link');
    }

    /**
     * Redirects to the appropriate provider.
     *
     * @param  string $provider
     */
    public function getAuthRedirect(LinkService $service, $provider)
    {
        if(!$this->checkProvider($provider, Auth::user())) {
            flash($this->error)->error();
            return redirect()->to(Auth::user()->has_alias ? 'account/aliases' : 'link');
        }

        // Redirect to the provider's authentication page
        return $service->getAuthRedirect($provider);//Socialite::driver($provider)->redirect();
    }

    /**
     * Redirects to the appropriate provider.
     *
     * @param  string $provider
     */
    public function getAuthCallback(LinkService $service, $provider)
    {
        if(!$this->checkProvider($provider, Auth::user())) {
            flash($this->error)->error();
            return redirect()->to(Auth::user()->has_alias ? 'account/aliases' : 'link');
        }

        $result = Socialite::driver($provider)->user();
        if($service->saveProvider($provider, $result, Auth::user())) {
            flash('Account has been linked successfully.')->success();
            Auth::user()->updateCharacters();
            Auth::user()->updateArtDesignCredits();
            return redirect()->to('account/aliases');
        }
        else {
            foreach($service->errors()->getMessages()['error'] as $error) flash($error)->error();
            return redirect()->to(Auth::user()->has_alias ? 'account/aliases' : 'link');
        }
        return redirect()->to('/');

    }

    private function checkProvider($provider, $user) {
        // Check if the site can be used for authentication
        $isAllowed = false;
        foreach(Config::get('lorekeeper.sites') as $key => $site) {
            if($key == $provider && isset($site['auth'])) {
                // require a primary alias if the user does not already have one
                if(!Auth::user()->has_alias && (!isset($site['primary_alias']) || !$site['primary_alias'])) {
                    $this->error = 'The site you selected cannot be used as your primary alias (means of identification). Please choose a different site to link.';
                    return false;
                }

                $isAllowed = true;
                break;
            }
        }
        if(!$isAllowed) {
            $this->error = 'The site you selected cannot be linked with your account. Please contact an administrator if this is in error!';
            return false;
        }

        // I think there's no harm in linking multiple of the same site as people may want their activity separated into an ARPG account. 
        // Uncomment the following to restrict to one account per site, however.
        // Check if the user already has a username associated with their account
        //if(DB::table('user_aliases')->where('site', $provider)->where('user_id', $user->id)->exists()) {
        //    $this->error = 'You already have a username associated with this website linked to your account.';
        //    return false;
        //}

        return true;
    }

    /**
     * Shows the birthdaying page.
     *
     * @param  \Illuminate\Http\Request        $request
     * @param  App\Services\DeviantArtService  $deviantart
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getBirthday(Request $request)
    {
        // If the user already has a username associated with their account, redirect them
        if(Auth::check() && Auth::user()->birthday) return redirect()->to('/');

        // Step 1: display a login birthday
        return view('auth.birthday');
    }   

    /**
     * Posts the birthdaying page.
     *
     * @param  \Illuminate\Http\Request        $request
     * @param  App\Services\DeviantArtService  $deviantart
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postBirthday(Request $request)
    {
        $service = new UserService;
        // Make birthday into format we can store
        $data = $request->input('dob');
        $date = $data['day']."-".$data['month']."-".$data['year'];
        $formatDate = Carbon::parse($date);

        if($service->updateBirthday($formatDate, Auth::user())) {
            flash('Birthday added successfully!');
            return redirect()->to('/');
        }
        else {
            foreach($service->errors()->getMessages()['error'] as $error) flash($error)->error();
            return redirect()->back();
        }
    }   

    /**
     * Shows the birthdaying page.
     *
     * @param  \Illuminate\Http\Request        $request
     * @param  App\Services\DeviantArtService  $deviantart
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getBirthdayBlocked(Request $request)
    {
        // If the user already has a username associated with their account, redirect them
        if(Auth::check() && Auth::user()->checkBirthday) return redirect()->to('/');

        if(Auth::check() && !Auth::user()->birthday) return redirect()->to('birthday');

        // Step 1: display a login birthday
        return view('auth.blocked');
    }   
}
