<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Extensions
    |--------------------------------------------------------------------------
    |
    | This enables/disables a selection of extensions which provide QoL and are
    | broadly applicable, but perhaps not universally, and which are contained
    | in scope enough to be readily opt-in.
    |
    | Extensions with a single value for their setting are enabled/disabled via it
    | and have no additional configuration necessary here. 0 = disabled, 1 = enabled.
    | All of the extensions here are disabled by default.
    |
    | Please refer to the readme for more information on each of these extensions.
    |
    */

    // Navbar News Notif - Juni
    'navbar_news_notif' => 1,

    // Species Trait Index - Mercury
    'species_trait_index' => 0,

    // Character Status Badges - Juni
    'character_status_badges' => 1,

    // Character TH Profile Link - Juni
    'character_TH_profile_link' => 0,

    // Design Update Voting - Mercury
    'design_update_voting' => 0,

    // Item Entry Expansion - Mercury
    'item_entry_expansion' => [
        'extra_fields'    => 1,
        'resale_function' => 1,
        'loot_tables'     => [
            // Adds the ability to use either rarity criteria for items or item categories with rarity criteria in loot tables. Note that disabling this does not apply retroactively.
            'enable'              => 0,
            'alternate_filtering' => 0, // By default this uses more broadly compatible methods to filter by rarity. If you are on Dreamhost/know your DB software can handle searching in JSON, it's recommended to set this to 1 instead.
        ],
    ],

    // Group Traits By Category - Uri
    'traits_by_category'            => 0,

    // Scroll To Top - Uri
    'scroll_to_top' => 1, // 1 - On, 0 - off

    // Character Reward Expansion - Uri
    'character_reward_expansion'    => [
        'expanded'                  => 1,
        'default_recipient'         => 0, // 0 to default to the character's owner (if a user), 1 to default to the submission user.
    ],

    // Awards - Uri
    'awards' => [
        'user_featured'             => 1,   // Number of awards displayed prominently on the user profile
        'character_featured'        => 1,   // Number of awards displayed prominently on the character page
    ],

    //Forum Posts Editable by Author - Wych
    'forum_author_edit' => 1,

    // Character Backgrounds - Uri
    'character_backgrounds' => [
        'enabled'          => 1, // 0 for disabled
        'profiles_enabled' => 1, // 0 to disable this effect on Character Profiles (versus their masterlist page)
    ],

    // MYO Image Hide/Remove - Mercury
    // Adds an option when approving MYO submissions to hide or delete the MYO placeholder image
    'remove_myo_image' => 0,

    // Auto-populate New Image Traits - Mercury
    // Automatically adds the traits present on a character's active image to the list when uploading a new image for an extant character.
    'autopopulate_image_features' => 0,

    // Staff Rewards - Mercury
    'staff_rewards' => [
        'enabled'     => 1,
        'currency_id' => 7,
    ],

    // Organised Traits Dropdown - Draginraptor
    'organised_traits_dropdown' => 1,
];
