<?php

namespace App\Models\User;

use App\Models\Award\AwardLog;
use App\Models\Character\Character;
use App\Models\Character\CharacterBookmark;
use App\Models\Character\CharacterDesignUpdate;
use App\Models\Character\CharacterImageCreator;
use App\Models\Character\CharacterTransfer;
use App\Models\Claymore\GearLog;
use App\Models\Claymore\WeaponLog;
use App\Models\Comment;
use App\Models\Currency\Currency;
use App\Models\Currency\CurrencyLog;
use App\Models\Forum;
use App\Models\Gallery\GalleryCollaborator;
use App\Models\Item\ItemLog;
use App\Models\Pet\PetLog;
use App\Models\Rank\RankPower;
use App\Models\Recipe\Recipe;
use App\Models\Shop\ShopLog;
use App\Models\Stats\ExpLog;
use App\Models\Stats\LevelLog;
use App\Models\Stats\StatTransferLog;
use App\Models\Submission\Submission;
use App\Models\Trade;
use App\Models\WorldExpansion\FactionRankMember;
use App\Traits\Commenter;
use Auth;
use Cache;
use Carbon\Carbon;
use Config;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Settings;

class User extends Authenticatable implements MustVerifyEmail
{
    use Commenter, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'alias', 'rank_id', 'email', 'password', 'is_news_unread', 'is_banned', 'has_alias', 'avatar', 'is_sales_unread', 'birthday',
        'home_id', 'home_changed', 'faction_id', 'faction_changed',
        'is_deactivated', 'deactivater_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Dates on the model to convert to Carbon instances.
     *
     * @var array
     */
    protected $dates = ['birthday', 'home_changed', 'faction_changed'];

    /**
     * Accessors to append to the model.
     *
     * @var array
     */
    protected $appends = [
        'verified_name',
    ];

    /**
     * Whether the model contains timestamps to be saved and updated.
     *
     * @var string
     */
    public $timestamps = true;

    /**********************************************************************************************

        RELATIONS

    **********************************************************************************************/

    /**
     * Get user settings.
     */
    public function settings()
    {
        return $this->hasOne('App\Models\User\UserSettings');
    }

    /**
     * Get user theme.
     */
    public function theme()
    {
        return $this->belongsTo('App\Models\Theme');
    }

    /**
     * Get user-editable profile data.
     */
    public function profile()
    {
        return $this->hasOne('App\Models\User\UserProfile');
    }

    /**
     * Get user settings.
     */
    public function level()
    {
        return $this->hasOne('App\Models\Stats\User\UserLevel');
    }

    /*
     * Gets the account that deactivated this account.
     */
    public function deactivater()
    {
        return $this->belongsTo('App\Models\User\User', 'deactivater_id');
    }

    /**
     * Get the user's aliases.
     */
    public function aliases()
    {
        return $this->hasMany('App\Models\User\UserAlias');
    }

    /**
     * Get the user's primary alias.
     */
    public function primaryAlias()
    {
        return $this->hasOne('App\Models\User\UserAlias')->where('is_primary_alias', 1);
    }

    /**
     * Get the user's notifications.
     */
    public function notifications()
    {
        return $this->hasMany('App\Models\Notification');
    }

    /**
     * Get all the user's characters, regardless of whether they are full characters of myo slots.
     */
    public function allCharacters()
    {
        return $this->hasMany('App\Models\Character\Character')->orderBy('sort', 'DESC');
    }

    /**
     * Get the user's characters.
     */
    public function characters()
    {
        return $this->hasMany('App\Models\Character\Character')->where('is_myo_slot', 0)->orderBy('sort', 'DESC');
    }

    /**
     * Get the user's Registered Dragon slots.
     */
    public function myoSlots()
    {
        return $this->hasMany('App\Models\Character\Character')->where('is_myo_slot', 1)->orderBy('sort', 'DESC')->orderBy('id', 'DESC');
    }

    /**
     * Get the user's rank data.
     */
    public function rank()
    {
        return $this->belongsTo('App\Models\Rank\Rank');
    }

    /**
     * Get the user's rank data.
     */
    public function home()
    {
        return $this->belongsTo('App\Models\WorldExpansion\Location', 'home_id');
    }

    /**
     * Get the user's rank data.
     */
    public function faction()
    {
        return $this->belongsTo('App\Models\WorldExpansion\Faction', 'faction_id');
    }

    /**
     * Get the user's items.
     */
    public function items()
    {
        return $this->belongsToMany('App\Models\Item\Item', 'user_items')->withPivot('count', 'data', 'updated_at', 'id')->whereNull('user_items.deleted_at');
    }

    /**
     * Get the user's awards.
     */
    public function awards()
    {
        return $this->belongsToMany('App\Models\Award\Award', 'user_awards')->withPivot('count', 'data', 'updated_at', 'id')->whereNull('user_awards.deleted_at');
    }

    /**
     * Get the user's items.
     */
    public function recipes()
    {
        return $this->belongsToMany('App\Models\Recipe\Recipe', 'user_recipes')->withPivot('id');
    }

    /**
     * Get all of the user's gallery submissions.
     */
    public function gallerySubmissions()
    {
        return $this->hasMany('App\Models\Gallery\GallerySubmission')->where('user_id', $this->id)->orWhereIn('id', GalleryCollaborator::where('user_id', $this->id)->where('type', 'Collab')->pluck('gallery_submission_id')->toArray())->visible($this)->accepted()->orderBy('created_at', 'DESC');
    }

    /**
     * Get all of the user's favorited gallery submissions.
     */
    public function galleryFavorites()
    {
        return $this->hasMany('App\Models\Gallery\GalleryFavorite')->where('user_id', $this->id);
    }

    /**
     * Get the user's pets.
     */
    public function pets()
    {
        return $this->belongsToMany('App\Models\Pet\Pet', 'user_pets')->withPivot('data', 'updated_at', 'id', 'variant_id', 'chara_id', 'pet_name')->whereNull('user_pets.deleted_at');
    }

    /**
     * Get the user's weapons.
     */
    public function weapons()
    {
        return $this->belongsToMany('App\Models\Claymore\Weapon', 'user_weapons')->withPivot('data', 'updated_at', 'id', 'character_id', 'has_image')->whereNull('user_weapons.deleted_at');
    }

    /**
     * Get all of the users character bookmarks.
     */
    public function bookmarks()
    {
        return $this->hasMany('App\Models\Character\CharacterBookmark')->where('user_id', $this->id);
    }

    /**
     * Get the user's gears.
     */
    public function gears()
    {
        return $this->belongsToMany('App\Models\Claymore\Gear', 'user_gears')->withPivot('data', 'updated_at', 'id', 'character_id', 'has_image')->whereNull('user_gears.deleted_at');
    }

    /**
     * Get all of the user's wishlists.
     */
    public function wishlists()
    {
        return $this->hasMany('App\Models\User\Wishlist')->where('user_id', $this->id);
    }

    /**
     * Get all of the user's challenge logs.
     */
    public function challengeLogs()
    {
        return $this->hasMany('App\Models\Challenge\UserChallenge');
    }

    /**
     * gets all the user's character folders.
     */
    public function folders()
    {
        return $this->hasMany('App\Models\Character\CharacterFolder');
    }

    /**
     * Gets all of a user's liked / disliked comments.
     */
    public function commentLikes()
    {
        return $this->hasMany('App\Models\CommentLike');
    }

    /**
     * Gets all of the user's friends.
     */
    public function getFriendsAttribute()
    {
        // return this has many where initiator_id matches this id or where recipient_id matches this id
        return UserFriend::where('recipient_approved', 1)->where('initiator_id', $this->id)->orWhere('recipient_id', $this->id)->get();
    }

    /**********************************************************************************************

        SCOPES

    **********************************************************************************************/

    /**
     * Scope a query to only include visible (non-banned) users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible($query)
    {
        return $query->where('is_banned', 0)->where('is_deactivated', 0);
    }

    /**
     * Scope a query to only show deactivated accounts.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDisabled($query)
    {
        return $query->where('is_deactivated', 1);
    }

    /**********************************************************************************************

        ACCESSORS

    **********************************************************************************************/

    /**
     * Get the user's alias.
     *
     * @return string
     */
    public function getVerifiedNameAttribute()
    {
        return $this->name.($this->hasAlias ? '' : ' (Unverified)');
    }

    /**
     * Checks if the user has an alias (has an associated dA account).
     *
     * @return bool
     */
    public function getHasAliasAttribute()
    {
        return $this->attributes['has_alias'];
    }

    /**
     * Checks if the user has an admin rank.
     *
     * @return bool
     */
    public function getIsAdminAttribute()
    {
        return $this->rank->isAdmin;
    }

    /**
     * Checks if the user is a staff member with powers.
     *
     * @return bool
     */
    public function getIsStaffAttribute()
    {
        return RankPower::where('rank_id', $this->rank_id)->exists() || $this->isAdmin;
    }

    /**
     * Checks if the user has the given power.
     *
     * @param mixed $power
     *
     * @return bool
     */
    public function hasPower($power)
    {
        return $this->rank->hasPower($power);
    }

    /**
     * Gets the powers associated with the user's rank.
     *
     * @return array
     */
    public function getPowers()
    {
        return $this->rank->getPowers();
    }

    /**
     * Gets the user's profile URL.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return url('user/'.$this->name);
    }

    /**
     * Gets the URL for editing the user in the admin panel.
     *
     * @return string
     */
    public function getAdminUrlAttribute()
    {
        return url('admin/users/'.$this->name.'/edit');
    }

    /**
     * Displays the user's name, linked to their profile page.
     *
     * @return string
     */
    public function getDisplayNameAttribute()
    {
        return ($this->is_banned ? '<strike>' : '').'<a href="'.$this->url.'" class="display-user" style="'.($this->rank->color ? 'color: #'.$this->rank->color.';' : '').($this->is_deactivated ? 'opacity: 0.5;' : '').'">'.$this->name.'</a>'.($this->is_banned ? '</strike>' : '');
    }

    /**
     * Displays the user's name, linked to their profile page.
     *
     * @return string
     */
    public function getCommentDisplayNameAttribute()
    {
        return '<small><a href="'.$this->url.'" class="btn btn-primary btn-sm"'.($this->rank->color ? 'style="background-color: #'.$this->rank->color.'!important;color:#000!important;"' : '').'><i class="'.($this->rank->icon ? $this->rank->icon : 'fas fa-user').' mr-1" style="opacity: 50%;"></i>'.$this->name.'</a></small>';
    }

    /**
     * Displays the user's primary alias.
     *
     * @return string
     */
    public function getDisplayAliasAttribute()
    {
        if (!$this->hasAlias) {
            return '(Unverified)';
        }

        return $this->primaryAlias->displayAlias;
    }

    /**
     * Displays the user's avatar.
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Gets the user's log type for log creation.
     *
     * @return string
     */
    public function getLogTypeAttribute()
    {
        return 'User';
    }

    // Check if user is online and display When they were online
    public function isOnline()
    {
        $onlineStatus = Cache::has('user-is-online-'.$this->id);
        $online = Carbon::createFromTimeStamp(strtotime(Cache::get('user-is-online-time-'.$this->id)));
        $onlineTime = $online->diffForHumans(['parts' => 2, 'join' => true, 'short' => true]);
        $onlineYear = $online->year;

        if ($onlineYear < Carbon::now()->year - 10) {
            $onlineTime = 'a long time ago';
        }

        if ($onlineStatus) {
            $result = '<i class="fas fa-circle text-success mr-2" data-toggle="tooltip" title="This user is online."></i>';
        } else {
            $result = '<i class="far fa-circle text-secondary mr-2" data-toggle="tooltip" title="This user was last online '.$onlineTime.'."></i>';
        }

        return $result;
    }

    /**
     * Checks if the user can change location.
     *
     * @return string
     */
    public function getCanChangeLocationAttribute()
    {
        if (!isset($this->home_changed)) {
            return true;
        }
        $limit = Settings::get('WE_change_timelimit');
        switch ($limit) {
            case 0:
                return true;
            case 1:
                // Yearly
                if (now()->year == $this->home_changed->year) {
                    return false;
                } else {
                    return true;
                }

            case 2:
                // Quarterly
                if (now()->year != $this->home_changed->year) {
                    return true;
                }
                if (now()->quarter != $this->home_changed->quarter) {
                    return true;
                } else {
                    return false;
                }

            case 3:
                // Monthly
                if (now()->year != $this->home_changed->year) {
                    return true;
                }
                if (now()->month != $this->home_changed->month) {
                    return true;
                } else {
                    return false;
                }

            case 4:
                // Weekly
                if (now()->year != $this->home_changed->year) {
                    return true;
                }
                if (now()->week != $this->home_changed->week) {
                    return true;
                } else {
                    return false;
                }

            case 5:
                // Daily
                if (now()->year != $this->home_changed->year) {
                    return true;
                }
                if (now()->month != $this->home_changed->month) {
                    return true;
                }
                if (now()->day != $this->home_changed->day) {
                    return true;
                } else {
                    return false;
                }

            default:
                return true;
        }
    }

    /**
     * Get's user birthday setting.
     */
    public function getBirthdayDisplayAttribute()
    {
        //
        $icon = null;
        $bday = $this->birthday;
        if (!isset($bday)) {
            return 'N/A';
        }

        if ($bday->format('d M') == Carbon::now()->format('d M')) {
            $icon = '<i class="fas fa-birthday-cake ml-1"></i>';
        }
        //
        switch ($this->settings->birthday_setting) {
            case 0:
                return null;
                break;
            case 1:
                if (Auth::check()) {
                    return $bday->format('d M').$icon;
                }
                break;
            case 2:
                return $bday->format('d M').$icon;
                break;
            case 3:
                return $bday->format('d M Y').$icon;
                break;
        }
    }

    /**
     * Check if user is of age.
     */
    public function getcheckBirthdayAttribute()
    {
        $bday = $this->birthday;
        if (!$bday || $bday->diffInYears(carbon::now()) < 13) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Checks if the user can change faction.
     *
     * @return string
     */
    public function getCanChangeFactionAttribute()
    {
        if (!isset($this->faction_changed)) {
            return true;
        }
        $limit = Settings::get('WE_change_timelimit');
        switch ($limit) {
            case 0:
                return true;
            case 1:
                // Yearly
                if (now()->year == $this->faction_changed->year) {
                    return false;
                } else {
                    return true;
                }

            case 2:
                // Quarterly
                if (now()->year != $this->faction_changed->year) {
                    return true;
                }
                if (now()->quarter != $this->faction_changed->quarter) {
                    return true;
                } else {
                    return false;
                }

            case 3:
                // Monthly
                if (now()->year != $this->faction_changed->year) {
                    return true;
                }
                if (now()->month != $this->faction_changed->month) {
                    return true;
                } else {
                    return false;
                }

            case 4:
                // Weekly
                if (now()->year != $this->faction_changed->year) {
                    return true;
                }
                if (now()->week != $this->faction_changed->week) {
                    return true;
                } else {
                    return false;
                }

            case 5:
                // Daily
                if (now()->year != $this->faction_changed->year) {
                    return true;
                }
                if (now()->month != $this->faction_changed->month) {
                    return true;
                }
                if (now()->day != $this->faction_changed->day) {
                    return true;
                } else {
                    return false;
                }

            default:
                return true;
        }
    }

    /**
     * Get user's faction rank.
     */
    public function getFactionRankAttribute()
    {
        if (!isset($this->faction_id) || !$this->faction->ranks()->count()) {
            return null;
        }
        if (FactionRankMember::where('member_type', 'user')->where('member_id', $this->id)->first()) {
            return FactionRankMember::where('member_type', 'user')->where('member_id', $this->id)->first()->rank;
        }
        if ($this->faction->ranks()->where('is_open', 1)->count()) {
            $standing = $this->getCurrencies(true)->where('id', Settings::get('WE_faction_currency'))->first();
            if (!$standing) {
                return $this->faction->ranks()->where('is_open', 1)->where('breakpoint', 0)->first();
            }

            return $this->faction->ranks()->where('is_open', 1)->where('breakpoint', '<=', $standing->quantity)->orderBy('breakpoint', 'DESC')->first();
        }
    }

    /**
     * Gets the user's forum post count.
     *
     * @return string
     */
    public function getForumCountAttribute()
    {
        return Comment::where('commentable_type', 'App\Models\Forum')->where('commenter_id', $this->id)->count();
    }

    /**
     * Check if the user can register for a new challenge.
     *
     * @return bool
     */
    public function getCanChallengeAttribute()
    {
        // Check that registrations are currently open
        if (Settings::get('challenges_concurrent') < 1) {
            return false;
        }
        // Check if user has fewer active challenges than the current cap
        if ($this->challengeLogs()->active()->count() < Settings::get('challenges_concurrent')) {
            return true;
        }

        return false;
    }

    /**********************************************************************************************

        OTHER FUNCTIONS

    **********************************************************************************************/

    /**
     * Checks if the user can edit the given rank.
     *
     * @param mixed $rank
     *
     * @return bool
     */
    public function canEditRank($rank)
    {
        return $this->rank->canEditRank($rank);
    }

    /**
     * Checks if the user can see and visit a certain forum.
     *
     * @param mixed $id
     *
     * @return bool
     */
    public function canVisitForum($id)
    {
        $forum = Forum::find($id);
        if ($this->isStaff) {
            return true;
        } elseif (isset($forum->role_limit) && $this->rank_id == $forum->role_limit) {
            return true;
        } elseif (!isset($forum->role_limit) && !$forum->staff_only) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the user's held currencies.
     *
     * @param bool $showAll
     *
     * @return \Illuminate\Support\Collection
     */
    public function getCurrencies($showAll = false)
    {
        // Get a list of currencies that need to be displayed
        // On profile: only ones marked is_displayed
        // In bank: ones marked is_displayed + the ones the user has

        $owned = UserCurrency::where('user_id', $this->id)->pluck('quantity', 'currency_id')->toArray();

        $currencies = Currency::where('is_user_owned', 1);
        if ($showAll) {
            $currencies->where(function ($query) use ($owned) {
                $query->where('is_displayed', 1)->orWhereIn('id', array_keys($owned));
            });
        } else {
            $currencies = $currencies->where('is_displayed', 1);
        }

        $currencies = $currencies->orderBy('sort_user', 'DESC')->get();

        foreach ($currencies as $currency) {
            $currency->quantity = $owned[$currency->id] ?? 0;
        }

        return $currencies;
    }

    /**
     * Get the user's held currencies as an array for select inputs.
     *
     * @param mixed $isTransferrable
     *
     * @return array
     */
    public function getCurrencySelect($isTransferrable = false)
    {
        $query = UserCurrency::query()->where('user_id', $this->id)->leftJoin('currencies', 'user_currencies.currency_id', '=', 'currencies.id')->orderBy('currencies.sort_user', 'DESC');
        if ($isTransferrable) {
            $query->where('currencies.allow_user_to_user', 1);
        }

        return $query->get()->pluck('name_with_quantity', 'currency_id')->toArray();
    }

    /**
     * Get the user's currency logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getCurrencyLogs($limit = 10)
    {
        $user = $this;
        $query = CurrencyLog::with('currency')->where(function ($query) use ($user) {
            $query->with('sender')->where('sender_type', 'User')->where('sender_id', $user->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Claim Rewards', 'Gallery Submission Reward']);
        })->orWhere(function ($query) use ($user) {
            $query->with('recipient')->where('recipient_type', 'User')->where('recipient_id', $user->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's exp logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getExpLogs($limit = 10)
    {
        $user = $this;
        $query = ExpLog::where(function ($query) use ($user) {
            $query->with('sender')->where('sender_type', 'User')->where('sender_id', $user->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Claim Rewards']);
        })->orWhere(function ($query) use ($user) {
            $query->with('recipient')->where('recipient_type', 'User')->where('recipient_id', $user->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's stat logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getStatLogs($limit = 10)
    {
        $user = $this;
        $query = StatTransferLog::where(function ($query) use ($user) {
            $query->with('sender')->where('sender_type', 'User')->where('sender_id', $user->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Claim Rewards']);
        })->orWhere(function ($query) use ($user) {
            $query->with('recipient')->where('recipient_type', 'User')->where('recipient_id', $user->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's level logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getLevelLogs($limit = 10)
    {
        $user = $this;
        $query = LevelLog::where(function ($query) use ($user) {
            $query->with('recipient')->where('leveller_type', 'User')->where('recipient_id', $user->id);
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's item logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getItemLogs($limit = 10)
    {
        $user = $this;
        $query = ItemLog::with('item')->where(function ($query) use ($user) {
            $query->with('sender')->where('sender_type', 'User')->where('sender_id', $user->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Claim Rewards']);
        })->orWhere(function ($query) use ($user) {
            $query->with('recipient')->where('recipient_type', 'User')->where('recipient_id', $user->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's award logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getAwardLogs($limit = 10)
    {
        $user = $this;
        $query = AwardLog::with('award')->where(function ($query) use ($user) {
            $query->with('sender')->where('sender_type', 'User')->where('sender_id', $user->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Claim Rewards']);
        })->orWhere(function ($query) use ($user) {
            $query->with('recipient')->where('recipient_type', 'User')->where('recipient_id', $user->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's recipe logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getRecipeLogs($limit = 10)
    {
        $user = $this;
        $query = UserRecipeLog::with('recipe')->where(function ($query) use ($user) {
            $query->with('sender')->where('sender_id', $user->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Claim Rewards']);
        })->orWhere(function ($query) use ($user) {
            $query->with('recipient')->where('recipient_id', $user->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's pet logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getPetLogs($limit = 10)
    {
        $user = $this;
        $query = PetLog::with('sender')->with('recipient')->with('pet')->where(function ($query) use ($user) {
            $query->where('sender_id', $user->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Staff Removal']);
        })->orWhere(function ($query) use ($user) {
            $query->where('recipient_id', $user->id);
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's weapon logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getWeaponLogs($limit = 10)
    {
        $user = $this;
        $query = WeaponLog::with('sender')->with('recipient')->with('weapon')->where(function ($query) use ($user) {
            $query->where('sender_id', $user->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Staff Removal']);
        })->orWhere(function ($query) use ($user) {
            $query->where('recipient_id', $user->id);
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's gear logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getGearLogs($limit = 10)
    {
        $user = $this;
        $query = GearLog::with('sender')->with('recipient')->with('gear')->where(function ($query) use ($user) {
            $query->where('sender_id', $user->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Staff Removal']);
        })->orWhere(function ($query) use ($user) {
            $query->where('recipient_id', $user->id);
        })->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's shop purchase logs.
     *
     * @param int $limit
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getShopLogs($limit = 10)
    {
        $user = $this;
        $query = ShopLog::where('user_id', $this->id)->with('character')->with('shop')->with('item')->with('currency')->orderBy('id', 'DESC');
        if ($limit) {
            return $query->take($limit)->get();
        } else {
            return $query->paginate(30);
        }
    }

    /**
     * Get the user's character ownership logs.
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getOwnershipLogs()
    {
        $user = $this;
        $query = UserCharacterLog::with('sender.rank')->with('recipient.rank')->with('character')->where(function ($query) use ($user) {
            $query->where('sender_id', $user->id)->whereNotIn('log_type', ['Character Created', 'Registered Dragon Slot Created', 'Character Design Updated', 'Registered Dragon Design Approved']);
        })->orWhere(function ($query) use ($user) {
            $query->where('recipient_id', $user->id);
        })->orderBy('id', 'DESC');

        return $query->paginate(30);
    }

    /**
     * Checks if there are characters credited to the user's alias and updates ownership to their account accordingly.
     */
    public function updateCharacters()
    {
        if (!$this->hasAlias) {
            return;
        }

        // Pluck alias from url and check for matches
        $urlCharacters = Character::whereNotNull('owner_url')->pluck('owner_url', 'id');
        $matches = [];
        $count = 0;
        foreach ($this->aliases as $alias) {
            // Find all urls from the same site as this alias
            foreach ($urlCharacters as $key=>$character) {
                preg_match_all(Config::get('lorekeeper.sites.'.$alias->site.'.regex'), $character, $matches[$key]);
            }
            // Find all alias matches within those, and update the character's owner
            foreach ($matches as $key=>$match) {
                if ($match[1] != [] && strtolower($match[1][0]) == strtolower($alias->alias)) {
                    Character::find($key)->update(['owner_url' => null, 'user_id' => $this->id]);
                    $count += 1;
                }
            }
        }

        //
        if ($count > 0) {
            $this->settings->is_fto = 0;
        }
        $this->settings->save();
    }

    /**
     * Checks if there are art or design credits credited to the user's alias and credits them to their account accordingly.
     */
    public function updateArtDesignCredits()
    {
        if (!$this->hasAlias) {
            return;
        }

        // Pluck alias from url and check for matches
        $urlCreators = CharacterImageCreator::whereNotNull('url')->pluck('url', 'id');
        $matches = [];
        foreach ($this->aliases as $alias) {
            // Find all urls from the same site as this alias
            foreach ($urlCreators as $key=>$creator) {
                preg_match_all(Config::get('lorekeeper.sites.'.$alias->site.'.regex'), $creator, $matches[$key]);
            }
            // Find all alias matches within those, and update the relevant CharacterImageCreator
            foreach ($matches as $key=>$match) {
                if ($match[1] != [] && strtolower($match[1][0]) == strtolower($alias->alias)) {
                    CharacterImageCreator::find($key)->update(['url' => null, 'user_id' => $this->id]);
                }
            }
        }
    }

    /**
     * Get the user's submissions.
     *
     * @param mixed|null $user
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getSubmissions($user = null)
    {
        return Submission::with('user')->with('prompt')->viewable($user ? $user : null)->where('user_id', $this->id)->orderBy('id', 'DESC')->paginate(30);
    }

    /**
     * Checks if the user has bookmarked a character.
     * Returns the bookmark if one exists.
     *
     * @param mixed $character
     *
     * @return \App\Models\Character\CharacterBookmark
     */
    public function hasBookmarked($character)
    {
        return CharacterBookmark::where('user_id', $this->id)->where('character_id', $character->id)->first();
    }

    /**
     * Check if there are any Admin Notifications.
     *
     * @param mixed $user
     *
     * @return int
     */
    public function hasAdminNotification($user)
    {
        $submissionCount = $user->hasPower('manage_submissions') ? Submission::where('status', 'Pending')->whereNotNull('prompt_id')->count() : 0;
        $claimCount = $user->hasPower('manage_submissions') ? Submission::where('status', 'Pending')->whereNull('prompt_id')->count() : 0;
        $designCount = $user->hasPower('manage_characters') ? CharacterDesignUpdate::characters()->where('status', 'Pending')->count() : 0;
        $myoCount = $user->hasPower('manage_characters') ? CharacterDesignUpdate::myos()->where('status', 'Pending')->count() : 0;
        $transferCount = $user->hasPower('manage_characters') ? CharacterTransfer::active()->where('is_approved', 0)->count() : 0;
        $tradeCount = $user->hasPower('manage_characters') ? Trade::where('status', 'Pending')->count() : 0;
        $total = $submissionCount + $claimCount + $designCount + $myoCount + $transferCount + $tradeCount;

        return $total;
    }

    /**
     * Checks if the user has the named recipe.
     *
     * @param mixed $recipe_id
     *
     * @return bool
     */
    public function hasRecipe($recipe_id)
    {
        $recipe = Recipe::find($recipe_id);
        $user_has = $this->recipes->contains($recipe);
        $default = !$recipe->needs_unlocking;

        return $default ? true : $user_has;
    }

    /**
     * Returned recipes listed that are owned
     * Reversal simply.
     *
     * @param mixed $ids
     * @param mixed $reverse
     *
     * @return object
     */
    public function ownedRecipes($ids, $reverse = false)
    {
        $recipes = Recipe::find($ids);
        $recipeCollection = [];
        foreach ($recipes as $recipe) {
            if ($reverse) {
                if (!$this->recipes->contains($recipe)) {
                    $recipeCollection[] = $recipe;
                }
            } else {
                if ($this->recipes->contains($recipe)) {
                    $recipeCollection[] = $recipe;
                }
            }
        }

        return $recipeCollection;
    }

    /**
     * Checks if a user is blocked by another user.
     *
     * @param mixed $user
     */
    public function isBlocked($user)
    {
        return UserBlock::where('user_id', $user->id)->where('blocked_id', $this->id)->exists();
    }

    /**
     * Checks if a user is friends with another user.
     *
     * @param mixed $user
     */
    public function isFriendsWith($user)
    {
        // check both initiator_id, recipient_id for this user and the other user
        return UserFriend::where('recipient_approved', 1)
            ->where('initiator_id', $this->id)->where('recipient_id', $user->id)
            ->orWhere('initiator_id', $user->id)->where('recipient_id', $this->id)->exists();
    }

    /**
     * Checks if a user has a pending request with another user.
     *
     * @param mixed $user
     */
    public function isPendingFriendsWith($user)
    {
        // check both initiator_id, recipient_id for this user and the other user
        if ($this->isFriendsWith($user)) {
            return false;
        }

        return UserFriend::where('recipient_approved', 0)
            ->where('initiator_id', $this->id)->where('recipient_id', $user->id)
            ->orWhere('initiator_id', $user->id)->where('recipient_id', $this->id)->exists();
    }

    /**
     * gets userOptions for the user divided by friends and all.
     */
    public function getUserOptionsAttribute()
    {
        $userOptions = [];
        $friends = [];
        foreach ($this->friends as $friend) {
            $friends[] = $friend->other($this->id)->id;
        }
        $blocked = [];
        if (!Settings::get('allow_blocked_transfers')) {
            $blocked = UserBlock::where('blocked_id', $this->id)->pluck('user_id')->toArray();
            $friends = array_diff($friends, $blocked);
        }
        $userOptions['Friends'] = self::visible()->where('id', '!=', $this->id)->whereIn('id', $friends)->orderBy('name')->pluck('name', 'id')->toArray();
        $userOptions['All Users'] = self::visible()->where('id', '!=', $this->id)->whereNotIn('id', $friends)
            ->whereNotIn('id', $blocked)
            ->orderBy('name')->pluck('name', 'id')->toArray();

        return $userOptions;
    }
}
