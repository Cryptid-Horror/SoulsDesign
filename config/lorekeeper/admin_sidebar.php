<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Sidebar Links
    |--------------------------------------------------------------------------
    |
    | Admin panel sidebar links.
    | Add links here to have them show up in the admin panel.
    | Users that do not have the listed power will not be able to
    | view the links in that section.
    |
    */

    'Admin' => [
        'power' => 'admin',
        'links' => [
            [
                'name' => 'User Ranks',
                'url'  => 'admin/users/ranks',
            ],
            [
                'name' => 'Admin Logs',
                'url'  => 'admin/logs',
            ],
            [
                'name' => 'Staff Reward Settings',
                'url'  => 'admin/staff-reward-settings',
            ],
        ],
    ],
    'Reports' => [
        'power' => 'manage_reports',
        'links' => [
            [
                'name' => 'Report Queue',
                'url'  => 'admin/reports/pending',
            ],
        ],
    ],
    'Site' => [
        'power' => 'edit_pages',
        'links' => [
            [
                'name' => 'News',
                'url'  => 'admin/news',
            ],
            [
                'name' => 'Sales',
                'url'  => 'admin/sales',
            ],
            [
                'name' => 'Pages',
                'url'  => 'admin/pages',
            ],
        ],
    ],
    'Users' => [
        'power' => 'edit_user_info',
        'links' => [
            [
                'name' => 'User Index',
                'url'  => 'admin/users',
            ],
            [
                'name' => 'Invitation Keys',
                'url'  => 'admin/invitations',
            ],
        ],
    ],
    'Queues' => [
        'power' => 'manage_submissions',
        'links' => [
            [
                'name' => 'Gallery Submissions',
                'url'  => 'admin/gallery/submissions',
            ],
            [
                'name' => 'Gallery Currency Awards',
                'url'  => 'admin/gallery/currency',
            ],
            [
                'name' => 'Prompt Submissions',
                'url'  => 'admin/submissions',
            ],
            [
                'name' => 'Claim Submissions',
                'url'  => 'admin/claims',
            ],
            [
                'name' => 'Challenge Logs',
                'url'  => 'admin/challenges',
            ],
        ],
    ],
    'Grants' => [
        'power' => 'edit_inventories',
        'links' => [
            [
                'name' => 'Currency Grants',
                'url'  => 'admin/grants/user-currency',
            ],
            [
                'name' => 'Item Grants',
                'url'  => 'admin/grants/items',
            ],
            [

                'name' => 'Award Grants',
                'url'  => 'admin/grants/awards',
            ],
            [
                'name' => 'Recipe Grants',
                'url'  => 'admin/grants/recipes',
            ],
            [
                'name' => 'EXP Grants',
                'url'  => 'admin/grants/exp',
            ],
            [
                'name' => 'Pet Grants',
                'url'  => 'admin/grants/pets',
            ],
            [
                'name' => 'Gear Grants',
                'url'  => 'admin/grants/gear',
            ],
            [
                'name' => 'Weapon Grants',
                'url'  => 'admin/grants/weapons',

            ],
        ],
    ],
    'Masterlist' => [
        'power' => 'manage_characters',
        'links' => [
            [
                'name' => 'Create Dragon',
                'url'  => 'admin/masterlist/create-character',
            ],
            [
                'name' => 'Create Genotype',
                'url'  => 'admin/masterlist/create-myo',
            ],
            [
                'name' => 'Dragon Transfers',
                'url'  => 'admin/masterlist/transfers/incoming',
            ],
            [
                'name' => 'Dragon Trades',
                'url'  => 'admin/masterlist/trades/incoming',
            ],
            [
                'name' => 'Design Updates',
                'url'  => 'admin/design-approvals/pending',
            ],
            [
                'name' => 'Design Approvals',
                'url'  => 'admin/myo-approvals/pending',
            ],
        ],
    ],
    'Stats' => [
        'power' => 'edit_stats',
        'links' => [
            [
                'name' => 'Stats',
                'url'  => 'admin/stats',
            ],
        ],
    ],
    'Levels' => [
        'power' => 'edit_levels',
        'links' => [
            [
                'name' => 'User Levels',
                'url'  => 'admin/levels/user',
            ],
            [
                'name' => 'Character Levels',
                'url'  => 'admin/levels/character',
            ],
        ],
    ],
    'Data' => [
        'power' => 'edit_data',
        'links' => [
            [
                'name' => 'Galleries',
                'url'  => 'admin/data/galleries',
            ],
            [
                'name' => 'Award Categories',
                'url'  => 'admin/data/award-categories',
            ],
            [
                'name' => 'Awards',
                'url'  => 'admin/data/awards',
            ],
            [
                'name' => 'Character Categories',
                'url'  => 'admin/data/character-categories',
            ],
            [
                'name' => 'Sub Masterlists',
                'url'  => 'admin/data/sublists',
            ],
            [
                'name' => 'Rarities',
                'url'  => 'admin/data/rarities',
            ],
            [
                'name' => 'Species',
                'url'  => 'admin/data/species',
            ],
            [
                'name' => 'Subtypes',
                'url'  => 'admin/data/subtypes',
            ],
            [
                'name' => 'Traits',
                'url'  => 'admin/data/traits',
            ],
            [
                'name' => 'Character Titles',
                'url'  => 'admin/data/character-titles',
            ],
            [
                'name' => 'Status Effects',
                'url'  => 'admin/data/status-effects',
            ],
            [
                'name' => 'Shops',
                'url'  => 'admin/data/shops',
            ],
            [
                'name' => 'Currencies',
                'url'  => 'admin/data/currencies',
            ],
            [
                'name' => 'Prompt Categories',
                'url'  => 'admin/data/prompt-categories',
            ],
            [
                'name' => 'Prompts',
                'url'  => 'admin/data/prompts',
            ],
            [
                'name' => 'Challenges',
                'url'  => 'admin/data/challenges',
            ],
            [
                'name' => 'Loot Tables',
                'url'  => 'admin/data/loot-tables',
            ],
            [
                'name' => 'Items',
                'url'  => 'admin/data/items',
            ],
            [
                'name' => 'Recipes',
                'url'  => 'admin/data/recipes',
            ],
            [
                'name' => 'Forums',
                'url'  => 'admin/forums',
            ],
            [
            'name' => 'Advent Calendars',
            'url'  => 'admin/data/advent-calendars',
            ],
        ],
    ],
    'World.Expanded' => [
        'power' => 'manage_world',
        'links' => [
            [
                'name' => 'Locations',
                'url'  => 'admin/world/locations',
            ],
            [
                'name' => 'Fauna',
                'url'  => 'admin/world/faunas',
            ],
            [
                'name' => 'Flora',
                'url'  => 'admin/world/floras',
            ],
            [
                'name' => ' Events',
                'url'  => 'admin/world/events',
            ],
            [
                'name' => ' Figures',
                'url'  => 'admin/world/figures',
            ],
            [
                'name' => 'Factions',
                'url'  => 'admin/world/factions',
            ],
            [
                'name' => 'Concepts',
                'url'  => 'admin/world/concepts',
            ],
            [
                'name' => 'Pets',
                'url'  => 'admin/data/pets',
            ],
        ],
    ],
    'Claymores' => [
        'power' => 'edit_claymores',
        'links' => [
            [
                'name' => 'Gear',
                'url'  => 'admin/gear',
            ],
            [
                'name' => 'Weapons',
                'url'  => 'admin/weapon',
            ],
            [
                'name' => 'Character Classes',
                'url'  => 'admin/character-classes',
            ],
            [
                'name' => 'Character Skills',
                'url'  => 'admin/data/skills',
            ],
        ],
    ],
    'Raffles' => [
        'power' => 'manage_raffles',
        'links' => [
            [
                'name' => 'Raffles',
                'url'  => 'admin/raffles',
            ],
        ],
    ],
    'Settings' => [
        'power' => 'edit_site_settings',
        'links' => [
            [
                'name' => 'Site Settings',
                'url'  => 'admin/settings',
            ],
            [
                'name' => 'Site Images',
                'url'  => 'admin/images',
            ],
            [
                'name' => 'File Manager',
                'url'  => 'admin/files',
            ],
            [
                'name' => 'Theme Manager',
                'url'  => 'admin/themes',
            ],
        ],
    ],
];
