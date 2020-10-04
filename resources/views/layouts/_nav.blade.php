<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="headerNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('lorekeeper.settings.site_name', 'Lorekeeper') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('news') }}">News</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a id="inventoryDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Home
                        </a>

                        <div class="dropdown-menu" aria-labelledby="inventoryDropdown">
                            <a class="dropdown-item" href="{{ url('characters') }}">
                                My Official Dragons
                            </a>
                            <a class="dropdown-item" href="{{ url('characters/myos') }}">
                                My Registered Dragons
                            </a>
                            <a class="dropdown-item" href="{{ url('inventory') }}">
                                Hoard
                            </a>
                            <a class="dropdown-item" href="{{ url('bank') }}">
                                Empyrean Bank
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="queueDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Activity
                        </a>
                        <div class="dropdown-menu" aria-labelledby="queueDropdown">
                            <a class="dropdown-item" href="{{ url('submissions') }}">
                                Prompt Submissions
                            </a>
                            <a class="dropdown-item" href="{{ url('claims') }}">
                                Claims
                            </a>
                            <a class="dropdown-item" href="{{ url('/prompts') }}">
                            Activity List (Prompts)
                            </a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/dragon_registration') }}">
                                Design Registration
                            </a>
                            <a class="dropdown-item" href="{{ url('designs') }}">
                                Design Review
                            </a>
                             <a class="dropdown-item" href="{{ url('characters/transfers/incoming') }}">
                                Dragon Transfers
                            </a>
                             <a class="dropdown-item" href="{{ url('https://www.deviantart.com/the-below/journal/Nesting-Permissions-855903767') }}">
                                Nesting Permissions (dA)
                            </a>
                            <a class="dropdown-item" href="{{ url('https://www.deviantart.com/the-below/journal/Leasing-Permissions-855903907') }}">
                                Leasing Permissions (dA)
                            </a>
                            <a class="dropdown-item" href="{{ url('https://www.deviantart.com/the-below/journal/Flight-Management-855903599') }}">
                                Flight Management (dA)
                            </a>
                            <div class="dropdown-divider"></div>
                           
                            
                            <a class="dropdown-item" href="{{ url('trades/open') }}">
                                Trades
                            </a>
                            <a class="dropdown-item" href="{{ url('trades/listings') }}">
                                Trade Listings
                            </a>
                        </div>
                    </li>
                                        <li class="nav-item dropdown">
                        <a id="queueDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Rollers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="queueDropdown">
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/roller/combat') }}">Combat</a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/roller/daily_activity') }}">Daily Activities</a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/roller/dragons_blood') }}">Dragon's Blood</a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/roller/hatchery') }}">Hatchery</a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/roller/mp_counter') }}">Master Point Counter</a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/roller/nesting') }}">Nesting </a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/roller/pp_counter') }}">Primal Point Counter</a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/roller/questing') }}"> Questing</a>

                        </div>
                    </li>
                @endif
                <li class="nav-item dropdown">
                    <a id="browseDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Masterlist
                    </a>
                    <div class="dropdown-menu" aria-labelledby="browseDropdown">
                        <a class="dropdown-item" href="{{ url('users') }}">
                            Users
                        </a>
                        <a class="dropdown-item" href="{{ url('masterlist') }}">
                            Official Dragon Masterlist
                        </a>
                        <a class="dropdown-item" href="{{ url('myos') }}">
                            Registered Slot Masterlist
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('raffles') }}">
                            Raffles
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="loreDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Game and Guides
                    </a>

                    <div class="dropdown-menu" aria-labelledby="loreDropdown">
                    
                        <a class="dropdown-item" href="{{ url('world') }}">
                            Encyclopedia
                        </a>
                         <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/design') }}">
                           Genetics Portal
                        </a>
                        <a class="dropdown-item" href="{{ url('/prompts') }}">
                            Prompts
                        </a>
                        <a class="dropdown-item" href="{{ url('shops') }}">
                            Shops
                        </a>
                        <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="{{ url('https://www.deviantart.com/the-below/journal/Staff-Applications-Open-846304182') }}">
                           Staff Applications (dA Link)
                        </a>
                        <a class="dropdown-item" href="{{ url('https://souls-between.deviantart.com/journal/Suggestions-717025816') }}">
                            Suggestions and Questions (dA Link)
                        </a>
                    </div>
                </li>

                 <li class="nav-item dropdown">
                    <a id="loreDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Lore
                    </a>

                    <div class="dropdown-menu" aria-labelledby="loreDropdown">
                         <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/Map') }}">
                            Empires of Empyrean
                        </a>
                    </div>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    @if(Auth::user()->isStaff)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin') }}"><i class="fas fa-crown"></i></a>
                        </li>
                    @endif
                    @if(Auth::user()->notifications_unread)
                        <li class="nav-item">
                            <a class="nav-link btn btn-secondary btn-sm" href="{{ url('notifications') }}"><span class="fas fa-envelope"></span> {{ Auth::user()->notifications_unread }}</a>
                        </li>
                    @endif
                    
                    <li class="nav-item dropdown">
                        <a id="browseDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Submit
                        </a>

                        <div class="dropdown-menu" aria-labelledby="browseDropdown">
                            <a class="dropdown-item" href="{{ url('submissions/new') }}">
                                Submit Prompt
                            </a>
                            <a class="dropdown-item" href="{{ url('claims/new') }}">
                                Submit Claim
                            </a>
                            <a class="dropdown-item" href="{{ url('designs') }}">
                                Design Review
                            </a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ Auth::user()->url }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ Auth::user()->url }}">
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{ url('notifications') }}">
                                Notifications
                            </a>
                            <a class="dropdown-item" href="{{ url('account/bookmarks') }}">
                                Bookmarks
                            </a>
                            <a class="dropdown-item" href="{{ url('account/settings') }}">
                                Settings
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>