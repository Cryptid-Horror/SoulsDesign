<?php

namespace App\Models\Character;

use Config;
use DB;
use Settings;
use Carbon\Carbon;
use Notifications;
use App\Models\Model;

use App\Models\User\User;
use App\Models\User\UserCharacterLog;

use App\Models\Character\Character;
use App\Models\Character\CharacterCategory;
use App\Models\Character\CharacterTransfer;
use App\Models\Character\CharacterBookmark;
use App\Models\Character\CharacterLineage;
use App\Models\Character\CharacterLineageBlacklist;

use App\Models\Character\CharacterCurrency;
use App\Models\Currency\Currency;
use App\Models\Currency\CurrencyLog;

use App\Models\Character\CharacterItem;
use App\Models\Item\Item;
use App\Models\Item\ItemLog;

use App\Models\Stats\ExpLog;
use App\Models\Stats\StatTransferLog;
use App\Models\Stats\LevelLog;
use App\Models\Stats\CountLog;

use App\Models\Submission\Submission;
use App\Models\Submission\SubmissionCharacter;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\WorldExpansion\FactionRank;
use App\Models\WorldExpansion\FactionRankMember;

class Character extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'character_image_id', 'character_category_id', 'rarity_id', 'user_id',
        'owner_alias', 'number', 'slug', 'description', 'parsed_description',
        'is_sellable', 'is_tradeable', 'is_giftable',
        'sale_value', 'transferrable_at', 'is_visible',
        'is_gift_art_allowed', 'is_gift_writing_allowed', 'is_trading', 'sort',
        'is_myo_slot', 'name', 'trade_id', 'owner_url', 'class_id', 'home_id', 'home_changed', 'faction_id', 'faction_changed',
        'title_name', 'nicknames', 'is_adopted', 'health_status', 'total_health', 'current_health', 'sex', 'gender_pronouns',
        'temperament', 'diet', 'skills', 'rank', 'slots_used',
        'ouroboros', 'taming', 'basic_aether', 'low_aether', 'high_aether',
        'soul_link_type', 'soul_link_target', 'soul_link_target_link', 'arena_ranking',
        // 'sire_slug', 'dam_slug', 'use_custom_lineage',
        // 'ss_slug', 'sd_slug', 'ds_slug', 'dd_slug',
        // 'sss_slug', 'ssd_slug', 'sds_slug', 'sdd_slug',
        // 'dss_slug', 'dsd_slug', 'dds_slug', 'ddd_slug',
        'deceased', 'deceased_at', 'has_grand_title'

    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'characters';

    /**
     * Whether the model contains timestamps to be saved and updated.
     *
     * @var string
     */
    public $timestamps = true;

    /**
     * Dates on the model to convert to Carbon instances.
     *
     * @var array
     */
    protected $dates = ['transferrable_at', 'deceased_at', 'home_changed', 'faction_changed'];

    /**
     * Accessors to append to the model.
     *
     * @var array
     */
    public $appends = ['is_available'];

    /**
     * Validation rules for character creation.
     *
     * @var array
     */
    public static $createRules = [
        'character_category_id' => 'required',
        'rarity_id' => 'required',
        'user_id' => 'nullable',
        'number' => 'required',
        'slug' => 'required|alpha_dash',
        'description' => 'nullable',
        'sale_value' => 'nullable',
        'image' => 'required_without:ext_url|nullable|mimes:jpeg,gif,png|max:20000',
        'thumbnail' => 'nullable|mimes:jpeg,gif,png|max:20000',
        'ext_url' => 'required_without:image|nullable|url|max:20000',
        'sex' => 'required',
        'soul_link_target' => 'required_with:soul_link_type',
        'soul_link_target_link' => 'nullable|url',
        'genotype' => 'required',
        'phenotype' => 'required',
        'owner_url' => 'url|nullable'
    ];

    /**
     * Validation rules for character updating.
     *
     * @var array
     */
    public static $updateRules = [
        'character_category_id' => 'required',
        'number' => 'required',
        'slug' => 'required',
        'description' => 'nullable',
        'sale_value' => 'nullable',
    ];

    /**
     * Validation rules for MYO slots.
     *
     * @var array
     */
    public static $myoRules = [
        'rarity_id' => 'nullable',
        'user_id' => 'nullable',
        'number' => 'nullable',
        'slug' => 'nullable',
        'description' => 'nullable',
        'sale_value' => 'nullable',
        'name' => 'required',
        'image' => 'nullable|mimes:jpeg,gif,png|max:20000',
        'thumbnail' => 'nullable|mimes:jpeg,gif,png|max:20000',
    ];

    /**********************************************************************************************

        RELATIONS

    **********************************************************************************************/

    /**
     * Get the user who owns the character.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User\User', 'user_id');
    }

    /**
     * Get the category the character belongs to.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Character\CharacterCategory', 'character_category_id');
    }

    /**
     * Get the masterlist image of the character.
     */
    public function image()
    {
        return $this->belongsTo('App\Models\Character\CharacterImage', 'character_image_id');
    }

    /**
     * Get all images associated with the character.
     */
    public function images($user = null)
    {
        return $this->hasMany('App\Models\Character\CharacterImage', 'character_id')->images($user);
    }

    /**
     * Get the user-editable profile data of the character.
     */
    public function profile()
    {
        return $this->hasOne('App\Models\Character\CharacterProfile', 'character_id');
    }

    /**
     * Get character level.
     */
    public function level() 
    {
        return $this->hasOne('App\Models\Stats\Character\CharaLevels');
    }

    /**
     * Get characters stats.
     */
    public function stats() 
    {
        return $this->hasMany('App\Models\Stats\Character\CharacterStat');
    }

    /**
     * Get the character's active design update.
     */
    public function designUpdate()
    {
        return $this->hasMany('App\Models\Character\CharacterDesignUpdate', 'character_id');
    }

    /**
     * Get the trade this character is attached to.
     */
    public function trade()
    {
        return $this->belongsTo('App\Models\Trade', 'trade_id');
    }

    /**
     * Get the trade this character is attached to.
     */
    public function home()
    {
        return $this->belongsTo('App\Models\WorldExpansion\Location', 'home_id');
    }

    /**
     * Get the faction this character is attached to.
     */
    public function faction()
    {
        return $this->belongsTo('App\Models\WorldExpansion\Faction', 'faction_id');
    }

    /**
     * Get the rarity of this character.
     */
    public function rarity()
    {
        return $this->belongsTo('App\Models\Rarity', 'rarity_id');
    }

    public function pets()
    {
        return $this->hasMany('App\Models\User\UserPet', 'chara_id');
    }
    
    public function gear()
    {
        return $this->hasMany('App\Models\User\UserGear', 'character_id');
    }

    public function weapons()
    {
        return $this->hasMany('App\Models\User\UserWeapon', 'character_id');
    }

    /**
     * Get the character's associated gallery submissions.
     */
    public function gallerySubmissions()
    {
        return $this->hasMany('App\Models\Gallery\GalleryCharacter', 'character_id');
    }

    /**
     * Get the character's items.
     */
    public function items()
    {
        return $this->belongsToMany('App\Models\Item\Item', 'character_items')->withPivot('count', 'data', 'updated_at', 'id')->whereNull('character_items.deleted_at');
    }

    /**

     * Get the lineage of the character.
     */
    public function lineage()
    {
        return $this->hasOne('App\Models\Character\CharacterLineage', 'character_id');

     * Get the character's class
     */
    public function class()
    {
        return $this->belongsTo('App\Models\Character\CharacterClass', 'class_id');

    }

    /**********************************************************************************************

        SCOPES

    **********************************************************************************************/

    /**
     * Scope a query to only include either characters of MYO slots.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  bool                                   $isMyo
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMyo($query, $isMyo = false)
    {
        return $query->where('is_myo_slot', $isMyo);
    }

    /**
     * Scope a query to only include visible characters.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVisible($query)
    {
        return $query->where('is_visible', 1);
    }

    /**
     * Scope a query to only include characters that the owners are interested in trading.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTrading($query)
    {
        return $query->where('is_trading', 1);
    }

    /**
     * Scope a query to only include characters that can be traded.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTradable($query)
    {
        return $query->where(function($query) {
            $query->whereNull('transferrable_at')->orWhere('transferrable_at', '<', Carbon::now());
        })->where(function($query) {
          $query->where('is_sellable', 1)->orWhere('is_tradeable', 1)->orWhere('is_giftable', 1);
        });
    }

    /**********************************************************************************************

        ACCESSORS

    **********************************************************************************************/

    /**
     * Get the character's availability for activities/transfer.
     *
     * @return bool
     */
    public function getIsAvailableAttribute()
    {
        if($this->designUpdate()->active()->exists()) return false;
        if($this->trade_id) return false;
        if(CharacterTransfer::active()->where('character_id', $this->id)->exists()) return false;
        return true;
    }

    /**
     * Display the owner's name.
     * If the owner is not a registered user on the site, this displays the owner's dA name.
     *
     * @return string
     */
    public function getDisplayOwnerAttribute()
    {
        if($this->user_id) return $this->user->displayName;
        else return prettyProfileLink($this->owner_url);
    }

    /**
     * Gets the character's code.
     * If this is a MYO slot, it will return the MYO slot's name.
     *
     * @return string
     */
    public function getSlugAttribute()
    {
        if($this->is_myo_slot) return $this->name;
        else return $this->attributes['slug'];
    }

    /**
     * Displays the character's name, linked to their character page.
     *
     * @return string
     */
    public function getDisplayNameAttribute()
    {
        return '<a href="'.$this->url.'" class="display-character">'.$this->fullName.'</a>';
    }

    /**
     * Gets the character's name, including their code and user-assigned name.
     * If this is a MYO slot, simply returns the slot's name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        if($this->is_myo_slot) return $this->name;
        else return ($this->deceased ? '[DECEASED] ' : '').$this->slug.($this->title_name ? ': '.$this->title_name : ($this->name ? ': '.$this->name : ''));
    }

    /**
     * Gets the character's page's URL.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        if($this->is_myo_slot) return url('myo/'.$this->id);
        else return url('character/'.$this->slug);
    }

    /**
     * Gets the character's asset type for asset management.
     *
     * @return string
     */
    public function getAssetTypeAttribute()
    {
        return 'characters';
    }

    /**
     * Gets the character's log type for log creation.
     *
     * @return string
     */
    public function getLogTypeAttribute()
    {
        return 'Character';
    }

    /**
     * Gets the rank image URL for this character's rank.
     *
     * @return string
     */
    public function getRankImageUrlAttribute()
    {
        return asset('images/' . $this->rank . '.png');
    }

    /**
     * Gets the soul link display for this character's rank.
     *
     * @return string
     */
    public function getSoulLinkAttribute()
    {
        if($this->soul_link_type) {
            $result = 'Completed; Linked to '.$this->soul_link_type.' (';
            if($this->soul_link_type == 'Dragon') $result = $result.Character::where('slug', $this->soul_link_target)->first()->displayName;
            else {
                if($this->soul_link_target_link) $result = $result.'<a href="'.$this->soul_link_target_link.'">'.$this->soul_link_target.'</a>';
                else $result = $result.$this->soul_link_target;
            }
            $result = $result.')';
            return $result;
        }
        else {
            return 'Incomplete';
        }
    }
    
    public function getHomeSettingAttribute()
    {
        return intval(Settings::get('WE_character_locations'));
    }

    public function getLocationAttribute()
    {
        $setting = $this->homeSetting;


        switch($setting) {
            case 1:
                if(!$this->user) return null;
                elseif(!$this->user->home) return null;
                else return $this->user->home->fullDisplayName;

            case 2:
                if(!$this->home) return null;
                else return $this->home->fullDisplayName;

            case 3:
                if(!$this->home) return null;
                else return $this->home->fullDisplayName;

            default:
                return null;
        }
    }

    public function getFactionSettingAttribute()
    {
        return intval(Settings::get('WE_character_factions'));
    }

    public function getCurrentFactionAttribute()
    {
        $setting = $this->factionSetting;

        switch($setting) {
            case 1:
                if(!$this->user) return null;
                elseif(!$this->user->faction) return null;
                else return $this->user->faction->fullDisplayName;

            case 2:
                if(!$this->faction) return null;
                else return $this->faction->fullDisplayName;

            case 3:
                if(!$this->faction) return null;
                else return $this->faction->fullDisplayName;

            default:
                return null;
        }
    }

    /**
     * Get character's faction rank.
     */
    public function getFactionRankAttribute()
    {
        if(!isset($this->faction_id) || !$this->faction->ranks()->count()) return null;
        if(FactionRankMember::where('member_type', 'character')->where('member_id', $this->id)->first()) return FactionRankMember::where('member_type', 'character')->where('member_id', $this->id)->first()->rank;
        if($this->faction->ranks()->where('is_open', 1)->count()) {
            $standing = $this->getCurrencies(true)->where('id', Settings::get('WE_faction_currency'))->first();
            if(!$standing) return $this->faction->ranks()->where('is_open', 1)->where('breakpoint', 0)->first();
            return $this->faction->ranks()->where('is_open', 1)->where('breakpoint', '<=', $standing->quantity)->orderBy('breakpoint', 'DESC')->first();
        }
    }

    /**********************************************************************************************

        OTHER FUNCTIONS

    **********************************************************************************************/

    /**
     * Checks if the character's owner has registered on the site and updates ownership accordingly.
     */
    public function updateOwner()
    {
        // Return if the character has an owner on the site already.
        if($this->user_id) return;

        // Check if the owner has an account and update the character's user ID for them.
        $owner = checkAlias($this->owner_url);
        if(is_object($owner)) {
            $this->user_id = $owner->id;
            $this->owner_url = null;
            $this->save();

            $owner->settings->is_fto = 0;
            $owner->settings->save();
        }
    }

    /**
     * Get the character's held currencies.
     *
     * @param  bool  $displayedOnly
     * @return \Illuminate\Support\Collection
     */
    public function getCurrencies($displayedOnly = false)
    {
        // Get a list of currencies that need to be displayed
        // On profile: only ones marked is_displayed
        // In bank: ones marked is_displayed + the ones the user has

        $owned = CharacterCurrency::where('character_id', $this->id)->pluck('quantity', 'currency_id')->toArray();

        $currencies = Currency::where('is_character_owned', 1);
        if($displayedOnly) $currencies->where(function($query) use($owned) {
            $query->where('is_displayed', 1)->orWhereIn('id', array_keys($owned));
        });
        else $currencies = $currencies->where('is_displayed', 1);

        $currencies = $currencies->orderBy('sort_character', 'DESC')->get();

        foreach($currencies as $currency) {
            $currency->quantity = isset($owned[$currency->id]) ? $owned[$currency->id] : 0;
        }

        return $currencies;
    }

    /**
     * Get the character's exp logs.
     *
     * @param  int  $limit
     * @return \Illuminate\Support\Collection|\Illuminate\Pagination\LengthAwarePaginator
     */
    public function getExpLogs($limit = 10)
    {
        $character = $this;
        $query = ExpLog::where(function($query) use ($character) {
            $query->with('sender')->where('sender_type', 'Character')->where('sender_id', $character->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Claim Rewards']);
        })->orWhere(function($query) use ($character) {
            $query->with('recipient')->where('recipient_type', 'Character')->where('recipient_id', $character->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if($limit) return $query->take($limit)->get();
        else return $query->paginate(30);
    }

    /**
     * Get the character's stat logs.
     *
     * @param  int  $limit
     * @return \Illuminate\Support\Collection|\Illuminate\Pagination\LengthAwarePaginator
     */
    public function getStatLogs($limit = 10)
    {
        $character = $this;
        $query = StatTransferLog::where(function($query) use ($character) {
            $query->with('sender')->where('sender_type', 'Character')->where('sender_id', $character->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Claim Rewards']);
        })->orWhere(function($query) use ($character) {
            $query->with('recipient')->where('recipient_type', 'Character')->where('recipient_id', $character->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if($limit) return $query->take($limit)->get();
        else return $query->paginate(30);
    }

    /**
     * Get the character's level logs.
     *
     * @param  int  $limit
     * @return \Illuminate\Support\Collection|\Illuminate\Pagination\LengthAwarePaginator
     */
    public function getLevelLogs($limit = 10)
    {
        $character = $this;
        $query = LevelLog::where(function($query) use ($character) {
            $query->with('recipient')->where('leveller_type', 'Character')->where('recipient_id', $character->id);
        })->orderBy('id', 'DESC');
        if($limit) return $query->take($limit)->get();
        else return $query->paginate(30);
    }

    /**
     * Get the character's stat count logs
     *
     * @param  int  $limit
     * @return \Illuminate\Support\Collection|\Illuminate\Pagination\LengthAwarePaginator
     */
    public function getCountLogs($limit = 10)
    {
        $character = $this;
        $query = CountLog::where(function($query) use ($character) {
            $query->with('sender')->where('sender_type', 'Character')->where('sender_id', $character->id)->whereNotIn('log_type', ['Staff Grant', 'Prompt Rewards', 'Claim Rewards']);
        })->orWhere(function($query) use ($character) {
            $query->where('character_id', $character->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if($limit) return $query->take($limit)->get();
        else return $query->paginate(30);
    }

    /**
     * Get the character's held currencies as an array for select inputs.
     *
     * @return array
     */
    public function getCurrencySelect()
    {
        return CharacterCurrency::where('character_id', $this->id)->leftJoin('currencies', 'character_currencies.currency_id', '=', 'currencies.id')->orderBy('currencies.sort_character', 'DESC')->get()->pluck('name_with_quantity', 'currency_id')->toArray();
    }

    /**
     * Get the character's currency logs.
     *
     * @param  int  $limit
     * @return \Illuminate\Support\Collection|\Illuminate\Pagination\LengthAwarePaginator
     */
    public function getCurrencyLogs($limit = 10)
    {
        $character = $this;
        $query = CurrencyLog::with('currency')->where(function($query) use ($character) {
            $query->with('sender.rank')->where('sender_type', 'Character')->where('sender_id', $character->id)->where('log_type', '!=', 'Staff Grant');
        })->orWhere(function($query) use ($character) {
            $query->with('recipient.rank')->where('recipient_type', 'Character')->where('recipient_id', $character->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');
        if($limit) return $query->take($limit)->get();
        else return $query->paginate(30);
    }

    /**
     * Get the character's item logs.
     *
     * @param  int  $limit
     * @return \Illuminate\Support\Collection|\Illuminate\Pagination\LengthAwarePaginator
     */
    public function getItemLogs($limit = 10)
    {
        $character = $this;

        $query = ItemLog::with('item')->where(function($query) use ($character) {
            $query->with('sender.rank')->where('sender_type', 'Character')->where('sender_id', $character->id)->where('log_type', '!=', 'Staff Grant');
        })->orWhere(function($query) use ($character) {
            $query->with('recipient.rank')->where('recipient_type', 'Character')->where('recipient_id', $character->id)->where('log_type', '!=', 'Staff Removal');
        })->orderBy('id', 'DESC');

        if($limit) return $query->take($limit)->get();
        else return $query->paginate(30);
    }

    /**
     * Get the character's ownership logs.
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getOwnershipLogs()
    {
        $query = UserCharacterLog::with('sender.rank')->with('recipient.rank')->where('character_id', $this->id)->orderBy('id', 'DESC');
        return $query->paginate(30);
    }

    /**
     * Get the character's update logs.
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getCharacterLogs()
    {
        $query = CharacterLog::with('sender.rank')->where('character_id', $this->id)->orderBy('id', 'DESC');
        return $query->paginate(30);
    }

    /**
     * Get submissions that the character has been included in.
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getSubmissions()
    {
        $first = Submission::with('user.rank')->with('prompt')->where('status', 'Approved')->where('focus_chara_id', $this->id)->pluck('id');
        return Submission::with('user.rank')->with('prompt')->where('status', 'Approved')->whereIn('id', SubmissionCharacter::where('character_id', $this->id)->pluck('submission_id')->union($first)->toArray())->paginate(30);

        // Untested
        //$character = $this;
        //return Submission::where('status', 'Approved')->with(['characters' => function($query) use ($character) {
        //    $query->where('submission_characters.character_id', 1);
        //}])
        //->whereHas('characters', function($query) use ($character) {
        //    $query->where('submission_characters.character_id', 1);
        //});
        //return Submission::where('status', 'Approved')->where('user_id', $this->id)->orderBy('id', 'DESC')->paginate(30);
    }

    /**
     * Notifies character's bookmarkers in case of a change.
     */
    public function notifyBookmarkers($type)
    {
        // Bookmarkers will not be notified if the character is set to not visible
        if($this->is_visible) {
            $column = null;
            switch($type) {
                case 'BOOKMARK_TRADING':
                    $column = 'notify_on_trade_status';
                    break;
                case 'BOOKMARK_GIFTS':
                    $column = 'notify_on_gift_art_status';
                    break;
                case 'BOOKMARK_GIFT_WRITING':
                    $column = 'notify_on_gift_writing_status';
                    break;
                case 'BOOKMARK_OWNER':
                    $column = 'notify_on_transfer';
                    break;
                case 'BOOKMARK_IMAGE':
                    $column = 'notify_on_image';
                    break;
            }

            // The owner of the character themselves will not be notified, in the case that
            // they still have a bookmark on the character after it was transferred to them
            $bookmarkers = CharacterBookmark::where('character_id', $this->id)->where('user_id', '!=', $this->user_id);
            if($column) $bookmarkers = $bookmarkers->where($column, 1);

            $bookmarkers = User::whereIn('id', $bookmarkers->pluck('user_id')->toArray())->get();

            // This may have to be redone more efficiently in the case of large numbers of bookmarkers,
            // but since we're not expecting many users on the site to begin with it should be fine
            foreach($bookmarkers as $bookmarker)
                Notifications::create($type, $bookmarker, [
                    'character_url' => $this->url,
                    'character_name' => $this->fullName
                ]);
        }
    }

    /**
     * Returns the character's lineage as an associative array of characters.
     *
     * @param int       $depth      The recursion limit of the function, i.e. how far down the lineage it should search. Used mostly to track the number of recursions.
     * 
     * @return array
     */
    public function lineage_old($depth=3)
    {
        $sire_side = [
            'sire',
            'ss', 'sd',
            'sss', 'ssd', 'sds', 'sdd'
        ];
        $dam_side =[
            'dam',
            'ds', 'dd',
            'dss', 'dsd', 'dds', 'ddd'
        ];
        $ancestor_titles = array_merge($sire_side, $dam_side);
        $lineage = array_combine($ancestor_titles, array_fill(0, 14, null));
        if($depth <= 0) return $lineage;

        // if($this->use_custom_lineage) {
        //     foreach($ancestor_titles as $title) {
        //         $lineage[$title] = isset($this[$title.'_slug']) ? (Character::myo(0)->where('slug', $this[$title.'_slug'])->first() ?? $this[$title.'_slug'].add_help('This is a legacy character.')) : null ;
        //     }
        // }
        //else {
            $sire = isset($this['sire_slug']) ? Character::myo(0)->where('slug', $this['sire_slug'])->first() : null;
            if($sire) {
                $sire_lineage = $sire->lineage_old($depth-1);
                $lineage['sire'] = $sire;
                $lineage['ss'] = $sire_lineage['sire'];
                $lineage['sd'] = $sire_lineage['dam'];
                $lineage['sss'] = $sire_lineage['ss'];
                $lineage['ssd'] = $sire_lineage['sd'];
                $lineage['sds'] = $sire_lineage['ds'];
                $lineage['sdd'] = $sire_lineage['dd'];
            }
            else {
                foreach($sire_side as $title) {
                    if(isset($this[$title.'_slug'])) $lineage[$title] = Character::myo(0)->where('slug', $this[$title.'_slug'])->first() ?? $this[$title.'_slug'];
                    else $lineage[$title] = null;
                }
            }
            $dam = isset($this['dam_slug']) ? Character::myo(0)->where('slug', $this['dam_slug'])->first() : null;
            if($dam) {
                $dam_lineage = $dam->lineage_old($depth-1);
                $lineage['dam'] = $dam;
                $lineage['ds'] = $dam_lineage['sire'];
                $lineage['dd'] = $dam_lineage['dam'];
                $lineage['dss'] = $dam_lineage['ss'];
                $lineage['dsd'] = $dam_lineage['sd'];
                $lineage['dds'] = $dam_lineage['ds'];
                $lineage['ddd'] = $dam_lineage['dd'];
            }
            else {
                foreach($dam_side as $title) {
                    if(isset($this[$title.'_slug'])) $lineage[$title] = Character::myo(0)->where('slug', $this[$title.'_slug'])->first() ?? $this[$title.'_slug'];
                    else $lineage[$title] = null;   
                }
            }
        //}
        return $lineage;
    }
    
    /**
     * Finds the lineage blacklist level of this character.
     * 0 is no restriction at all
     * 1 is no ancestors but no children
     * 2 is no lineage at all
     *
     * @return int
     */
    public function getLineageBlacklistLevel($maxLevel = 2)
    {
        return CharacterLineageBlacklist::getBlacklistLevel($this, $maxLevel);
    }
}
