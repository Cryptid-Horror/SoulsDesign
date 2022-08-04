<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Character\BreedingPermission;
use App\Models\Notification;
use App\Models\Theme;
use App\Models\User\User;
use App\Models\User\UserAlias;
use App\Models\WorldExpansion\Faction;
use App\Models\WorldExpansion\Location;
use App\Services\LinkService;
use App\Services\UserService;
use Auth;
use Illuminate\Http\Request;
use Settings;

class AccountController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Account Controller
    |--------------------------------------------------------------------------
    |
    | Handles the user's account management.
    |
    */

    /**
     * Shows the banned page, or redirects the user to the home page if they aren't banned.
     *
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Http\RedirectResponse
     */
    public function getBanned()
    {
        if (Auth::user()->is_banned) {
            return view('account.banned');
        } else {
            return redirect()->to('/');
        }
    }

    /**
     * Shows the deactivation page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getDeactivated()
    {
        if (!Auth::user()->is_deactivated) {
            return redirect()->to('/');
        } else {
            return view('account.deactivated');
        }
    }

    /**
     * Shows the user settings page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getSettings()
    {
        $interval = [
            0 => 'whenever',
            1 => 'yearly',
            2 => 'quarterly',
            3 => 'monthly',
            4 => 'weekly',
            5 => 'daily',
        ];

        return view('account.settings', [
            'locations'            => Location::all()->where('is_user_home')->pluck('style', 'id')->toArray(),
            'factions'             => Faction::all()->where('is_user_faction')->pluck('style', 'id')->toArray(),
            'user_enabled'         => Settings::get('WE_user_locations'),
            'user_faction_enabled' => Settings::get('WE_user_factions'),
            'char_enabled'         => Settings::get('WE_character_locations'),
            'char_faction_enabled' => Settings::get('WE_character_factions'),
            'themeOptions'         => Theme::where('is_active', 1)->get()->pluck('displayName', 'id')->toArray(),
            'location_interval'    => $interval[Settings::get('WE_change_timelimit')],

        ]);
    }

    /**
     * Edits the user's profile.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postProfile(Request $request)
    {
        Auth::user()->profile->update([
            'text'        => $request->get('text'),
            'parsed_text' => parse($request->get('text')),
        ]);
        flash('Profile updated successfully.')->success();

        return redirect()->back();
    }

    /**
     * Edits the user's avatar.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAvatar(Request $request, UserService $service)
    {
        if ($service->updateAvatar($request->file('avatar'), Auth::user())) {
            flash('Avatar updated successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Edits the user's location from a list of locations that users can make their home.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLocation(Request $request, UserService $service)
    {
        if ($service->updateLocation($request->input('location'), Auth::user())) {
            flash('Location updated successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Edits the user's theme.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postTheme(Request $request, UserService $service)
    {
        if ($service->updateTheme($request->only('theme'), Auth::user())) {
            flash('Theme updated successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Edits the user's faction from a list of factions that users can make their home.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postFaction(Request $request, UserService $service)
    {
        if ($service->updateFaction($request->input('faction'), Auth::user())) {
            flash('Faction updated successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Changes the user's password.
     *
     * @param App\Services\UserService $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postPassword(Request $request, UserService $service)
    {
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);
        if ($service->updatePassword($request->only(['old_password', 'new_password', 'new_password_confirmation']), Auth::user())) {
            flash('Password updated successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Changes the user's email address and sends a verification email.
     *
     * @param App\Services\UserService $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEmail(Request $request, UserService $service)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        if ($service->updateEmail($request->only(['email']), Auth::user())) {
            flash('Email updated successfully. A verification email has been sent to your new email address.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Changes user birthday setting.
     *
     * @param App\Services\UserService $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postBirthday(Request $request, UserService $service)
    {
        if ($service->updateDOB($request->input('birthday_setting'), Auth::user())) {
            flash('Setting updated successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Shows the notifications page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getNotifications()
    {
        $notifications = Auth::user()->notifications()->orderBy('id', 'DESC')->paginate(30);
        Auth::user()->notifications()->update(['is_unread' => 0]);
        Auth::user()->notifications_unread = 0;
        Auth::user()->save();

        return view('account.notifications', [
            'notifications' => $notifications,
        ]);
    }

    /**
     * Deletes a notification and returns a response.
     *
     * @param mixed $id
     *
     * @return \Illuminate\Http\Response
     */
    public function getDeleteNotification($id)
    {
        $notification = Notification::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if ($notification) {
            $notification->delete();
        }

        return response(200);
    }

    /**
     * Deletes all of the user's notifications.
     *
     * @param mixed|null $type
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postClearNotifications($type = null)
    {
        if (isset($type)) {
            Auth::user()->notifications()->where('notification_type_id', $type)->delete();
        } else {
            Auth::user()->notifications()->delete();
        }
        flash('Notifications cleared successfully.')->success();

        return redirect()->back();
    }

    /**
     * Shows the account links page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getAliases()
    {
        return view('account.aliases');
    }

    /**
     * Shows the make primary alias modal.
     *
     * @param mixed $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getMakePrimary($id)
    {
        return view('account._make_primary_modal', ['alias' => UserAlias::where('id', $id)->where('user_id', Auth::user()->id)->first()]);
    }

    /**
     * Makes an alias the user's primary alias.
     *
     * @param mixed $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postMakePrimary(LinkService $service, $id)
    {
        if ($service->makePrimary($id, Auth::user())) {
            flash('Your primary alias has been changed successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Shows the hide alias modal.
     *
     * @param mixed $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getHideAlias($id)
    {
        return view('account._hide_alias_modal', ['alias' => UserAlias::where('id', $id)->where('user_id', Auth::user()->id)->first()]);
    }

    /**
     * Hides or unhides the selected alias from public view.
     *
     * @param mixed $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postHideAlias(LinkService $service, $id)
    {
        if ($service->hideAlias($id, Auth::user())) {
            flash('Your alias\'s visibility setting has been changed successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Shows the remove alias modal.
     *
     * @param mixed $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getRemoveAlias($id)
    {
        return view('account._remove_alias_modal', ['alias' => UserAlias::where('id', $id)->where('user_id', Auth::user()->id)->first()]);
    }

    /**
     * Removes the selected alias from the user's account.
     *
     * @param mixed $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRemoveAlias(LinkService $service, $id)
    {
        if ($service->removeAlias($id, Auth::user())) {
            flash('Your alias has been removed successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Shows the user's owned breeding permissions.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getBreedingPermissions(Request $request)
    {
        $permissions = BreedingPermission::where('recipient_id', Auth::user()->id);
        $used = $request->get('used');
        if (!$used) {
            $used = 0;
        }

        $permissions = $permissions->where('is_used', $used);

        return view('home.breeding_permissions', [
            'permissions' => $permissions->orderBy('id', 'DESC')->paginate(20)->appends($request->query()),
        ]);
    }

    /**
     * Show a user's deactivate confirmation page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getDeactivate()
    {
        return view('account.deactivate');
    }

    /**
     * Show a user's deactivate confirmation page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getDeactivateConfirmation()
    {
        return view('account._deactivate_confirmation');
    }

    public function postDeactivate(Request $request, UserService $service)
    {
        $wasDeactivated = Auth::user()->is_deactivated;
        if ($service->deactivate(['deactivate_reason' => $request->get('deactivate_reason')], Auth::user(), null)) {
            flash($wasDeactivated ? 'Deactivation reason edited successfully.' : 'Your account has successfully been deactivated. We hope to see you again and wish you the best!')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Show a user's reactivate confirmation page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getReactivateConfirmation()
    {
        return view('account._reactivate_confirmation');
    }

    public function postReactivate(Request $request, UserService $service)
    {
        if ($service->reactivate(Auth::user(), null)) {
            flash('You have reactivated successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }
}
