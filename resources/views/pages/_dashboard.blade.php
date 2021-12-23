
<h1>Welcome, {!! Auth::user()->displayName !!}!</h1>
<div class="card mb-4 timestamp">
    <div class="card-body">
        <i class="far fa-clock"></i> {!! format_date(Carbon\Carbon::now()) !!}
    </div>
</div>


<h2>Current Event</h2>
<a href="{{ url('https://soulsbetween.com/prompts/prompt-categories?name=Arena') }}"><img src="{{ asset('images/arenaseason.png') }}"></a>
<br>
<br>





<br>
<br>
            @include('widgets._recent_forum_posts')
<br>
    <div class="row">
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/xdd.png'),
                'header' => 'Account',
                'links' => [
                    'Profile' => Auth::user()->url,
                    'User Settings' => url('account/settings'),
                    'Notifications' => url('notifications'),
                    'Player Occupations' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Occupations'),
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/characters2.png'),
                'header' => 'Dragons',
                'links' => [
                    'My Dragons' => url('characters'),
                    'My Genotypes' => url('characters/myos'),
                    'Dragon Transfers' => url('characters/transfers/incoming'),
                    'Adoption Center' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Adoption%20Center'),
                    'Dragon Occupations' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Occupations')
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/honeyedit.png'),
                'header' => 'Hoard',
                'links' => [
                    'Awards' => url('awardcase'),
                    'Bank' => url('bank'),
                    'Hoard' => url('inventory'),
                    'Crafting' => url('https://www.soulsbetween.com/crafting'),
                    'Shops' => url('https://www.soulsbetween.com/shops'),
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/design.png'),
                'header' => 'Design',
                'links' => [
                    'Import Downloads' => url('https://www.soulsbetween.com/world/subtypes'),
                    'Genetics Portal' => url('https://www.soulsbetween.com/design'),
                    'Dragon Registration' => url('info/dragon_Registration'),
                    'Registration Portal' => url('https://www.soulsbetween.com/designs')
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/activities.png'),
                'header' => 'Activities',
                'links' => [
                    'Dailies' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Daily%20Activities'),
                    'Quests' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Basic%20Quests'),
                    'Taming' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Taming%20Rites'),
                    'Aether Restoration' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Aether%20Restoration'),
                    'Free Rolls' => ('https://www.soulsbetween.com/info/MFA')
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/special.png'),
                'header' => 'Combat and Events',
                'links' => [
                    'Arena' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Arena'),
                    'Grand Hunt' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=The%20Grand%20Hunt'),
                    'Vortex' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=The%20Vortex'),
                    'Healing Shrine' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Healing%20Shrine'),
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/nest.png'),
                'header' => 'Nesting',
                'links' => [
                    'Permissions' => url('https://www.soulsbetween.com/prompts/prompts?prompt_category_id=25'),
                    'Submissions' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Nesting%20and%20Hatchery'),
                    'Hatchery' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Nesting%20and%20Hatchery'),
                    'Nesting Rites' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Nesting%20Rites'),
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/levels2.png'),
                'header' => 'Levels',
                'links' => [
                    'Dragon Levels' => url('https://www.soulsbetween.com/world/levels/character'),
                    'Player Levels' => url('https://www.soulsbetween.com/level'),
                    'MP/PP' => url('https://www.soulsbetween.com/info/point_counting'),
                    'Non Activity PP' => url('https://www.soulsbetween.com/prompts/prompt-categories?name=Rank%20Updates'),
                ]
            ])
        </div>
    </div>

    @include('widgets._questboard', [
        'questImage1' => asset('images/testpage.png'),
        'questUrl1' => url('crafting'),

        'questImage2' => asset('images/testpage.png'),
        'questUrl2' => url('level'),

        'questImage3' => asset('images/testpage.png'),
        'questUrl3' => url('world'),

        'questImage4' => asset('images/testpage.png'),
        'questUrl4' => url('prompts'),

        'questImage5' => asset('images/testpage.png'),
        'questUrl5' => url('shops'),

        'questImage6' => asset('images/testpage.png'),
        'questUrl6' => url('level'),

        'questImage7' => asset('images/testpage.png'),
        'questUrl7' => url('level'),

        'questImage8' => asset('images/testpage.png'),
        'questUrl8' => url('level')
    ])
 {{-- <div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/account.png') }}" alt="Account" />
                <h5 class="card-title">Account</h5>
                {{--
                @include('widgets._hovereffect_image', [
                    'imageUrl' => asset('images/account.png'),
                    'header' => 'Account',
                    'links' => [
                        'Profile' => Auth::user()->url,
                        'User Settings' => url('account/settings'),
                        'Notifications' => url('notifications')
                    ]
                ])
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ Auth::user()->url }}">Profile</a></li>
                <li class="list-group-item"><a href="{{ url('account/settings') }}">User Settings</a></li>
                <li class="list-group-item"><a href="{{ url('notifications') }}">Notifications</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/characters.png') }}" />
                <h5 class="card-title">Dragons</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('characters') }}">My Dragons</a></li>
                <li class="list-group-item"><a href="{{ url('characters/myos') }}">My Genotypes</a></li>
                <li class="list-group-item"><a href="{{ url('characters/transfers/incoming') }}">Dragon Transfers</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/inventory.png') }}" />
                <h5 class="card-title">Hoard and Bank</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('inventory') }}">My Hoard</a></li>
                <li class="list-group-item"><a href="{{ url('bank') }}">Bank of Empyrean</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
            <img src="{{ asset('images/awards.png') }}" />
                <h5 class="card-title">Awards</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('awardcase') }}">My Awards</a></li>
                <li class="list-group-item"><a href="{{ Auth::user()->url . '/award-logs' }}">Award Logs</a></li>
            </ul>
        </div>
    </div>
</div>
--}}

