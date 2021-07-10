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
                    @if(Auth::check() && Auth::user()->is_news_unread && Config::get('lorekeeper.extensions.navbar_news_notif'))
                        <a class="nav-link d-flex text-warning" href="{{ url('news') }}"><strong>News</strong><i class="fas fa-bell"></i></a>
                    @else
                        <a class="nav-link" href="{{ url('news') }}">News</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if(Auth::check() && Auth::user()->is_sales_unread && Config::get('lorekeeper.extensions.navbar_news_notif'))
                        <a class="nav-link d-flex text-warning" href="{{ url('sales') }}"><strong>Sales</strong><i class="fas fa-bell"></i></a>
                    @else
                        <a class="nav-link" href="{{ url('sales') }}">Sales</a>
                    @endif
                </li>
                @if(Auth::check())
                <li class="nav-item">
                                <a class="nav-link" href="{{ url('https://www.soulsbetween.com/design') }}">GENETICS PORTAL</a>
                </li>
                    <li class="nav-item dropdown">
                        <a id="queueDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Activities
                        </a>
                        <div class="dropdown-menu" aria-labelledby="queueDropdown">
                            <a class="dropdown-item" href="{{ url('info/Activity_Guide') }}">
                            Activity Guide
                            </a>
                            <a class="dropdown-item" href="{{ url('/prompts') }}">
                                Activity List (Prompts)
                            </a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/_AC') }}">
                            Adoption Center
                            </a>
                            <a class="dropdown-item" href="{{ url('crafting') }}">
                                Crafting
                            </a>

                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/dragon_registration') }}">
                                Design Registration

                            <a class="dropdown-item" href="{{ url('level') }}">
                                Level Area
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
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/point_counting') }}">
                            Primal and Mastery Points
                            </a>
                            <a class="dropdown-item" href="{{ url('shops') }}">
                            Shops
                            </a>
                            <a class="dropdown-item" href="{{ url('trades/listings') }}">
                                Trade Listings
                            </a>
                            
                            <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/forum/13') }}">
                                Leasing Dragons
                            </a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/Flights') }}">
                                Flights
                            </a>
                             <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/Nest_perms') }}">
                                Nesting Permissions
                            </a>
                            <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/R-A-F') }}">
                                Refer a Friend
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
                        Masterlists
                    </a>
                    <div class="dropdown-menu" aria-labelledby="browseDropdown">
                        <a class="dropdown-item" href="{{ url('world') }}">
                            Encyclopedia
                        </a>
                        <a class="dropdown-item" href="{{ url('users') }}">
                            Users
                        </a>
                        <a class="dropdown-item" href="{{ url('masterlist') }}">
                            Dragon Masterlist
                        </a>
                        <a class="dropdown-item" href="{{ url('myos') }}">
                            Genotype Masterlist
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('raffles') }}">
                            Raffles
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('reports/bug-reports') }}">
                            Bug Reports
                        </a>
                    </div>
                </li>
                    <li class="nav-item">
                                <a class="nav-link" href="{{ url('world/info') }}">Lore and World</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('forum') }}">Forums</a>
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
                            <a class="dropdown-item" href="{{ url('characters/transfers/incoming') }}">
                                Dragon Transfers
                            </a>
                            <a class="dropdown-item" href="{{ url('trades/open') }}">
                                Trades
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('reports/new') }}">
                                Submit Report
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a id="loreDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Miscellaneous
                    </a>

                    <div class="dropdown-menu" aria-labelledby="loreDropdown">
 
                    <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/HatchOdds') }}">
                            Hatchery Odds
                         </a>
                    <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/Nesting_Odds') }}">
                           Nesting Odds
                        </a>
                       <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/Sales') }}">
                            Seasonal Sales
                        </a>
                         <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/info/_StaffApps') }}">
                           Staff Applications
                        </a>
                        <a class="dropdown-item" href="{{ url('https://www.soulsbetween.com/forum/16') }}">
                            Suggestions/Feedback
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
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{ url('characters') }}">
                                My Dragons
                            </a>
                            <a class="dropdown-item" href="{{ url('characters/myos') }}">
                                My Genotypes
                            </a>
                            <a class="dropdown-item" href="{{ url('inventory') }}">
                                Hoard
                            </a>
                            <a class="dropdown-item" href="{{ url('bank') }}">
                                Empyrean Bank
                            </a>
                            <div class="dropdown-divider"></div>

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
