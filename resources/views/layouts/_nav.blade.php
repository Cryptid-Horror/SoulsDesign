<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="headerNav">
    <div class="container-fluid">
                    <i class="fas fa-star-and-crescent"></i> 
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
                 <li class="nav-item dropdown">
                        <a id="queueDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Activities
                        </a>
                        <div class="dropdown-menu" aria-labelledby="queueDropdown">
                            <a class="dropdown-item" href="{{ url('info/Activity_Guide') }}">
                               <i class="fas fa-clipboard-list"></i> Activity Guide
                            </a>
                            <a class="dropdown-item" href="{{ url('prompts') }}">
                                <i class="fas fa-dungeon"></i> Activity Prompts
                            </a>
                            <a class="dropdown-item" href="{{ url('prompts/prompt-categories?name=Adoption%20Center') }}">
                               <i class="fas fa-egg"></i> Adoption Center
                            </a>
                            <a class="dropdown-item" href="{{ url('crafting') }}">
                               <i class="fas fa-mortar-pestle"></i> Crafting
                            </a>
                            <a class="dropdown-item" href="{{ url('info/dragon_registration') }}">
                               <i class="fas fa-paint-brush"></i>  Design Registration
                            </a>
                            <a class="dropdown-item" href="{{ url('info/point_counting') }}">
                                <i class="fas fa-clipboard-list"></i> Primal and Mastery Points
                            </a>
                            <a class="dropdown-item" href="{{ url('level') }}">
                                <i class="fas fa-level-up-alt"></i> Level Area
                            </a>
                            <a class="dropdown-item" href="{{ url('info/MFA') }}">
                                <i class="fas fa-dungeon"></i> Monthly Free Activities
                            </a>
                            <a class="dropdown-item" href="{{ url('shops') }}">
                               <i class="fas fa-store"></i> Shops
                            </a>
                            
                            <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="{{ url('forum/13') }}">
                               <i class="fas fa-sign"></i> Leasing Dragons
                            </a>
                            <a class="dropdown-item" href="{{ url('info/Flights') }}">
                               <i class="fas fa-dragon"></i> Flights
                            </a>
                             <a class="dropdown-item" href="{{ url('info/Nest_perms') }}">
                                 <i class="fas fa-egg"></i> Nesting Permissions
                            </a>
                            <a class="dropdown-item" href="{{ url('info/Sales') }}">
                            <i class="fas fa-store"></i>Seasonal Sales
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="queueDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Community
                        </a>
                        <div class="dropdown-menu" aria-labelledby="queueDropdown">
                            <a class="dropdown-item" href="{{ url('https://discord.gg/ZqtG7jf') }}">
                               <i class="fab fa-discord"></i> Discord
                            </a>
                            
                            <a class="dropdown-item" href="{{ url('forum') }}">
                                <i class="fas fa-sign"></i> Forums
                            </a>
                            <a class="dropdown-item" href="{{ url('gallery') }}">
                               <i class="fas fa-paint-brush"></i>Gallery
                            </a>
                           
                            <a class="dropdown-item" href="{{ url('info/R-A-F') }}">
                                <i class="fas fa-sign"></i> Refer a Friend
                            </a>
                            <a class="dropdown-item" href="{{ url('trades/listings') }}">
                               <i class="fas fa-sign"></i> Trade Listings
                            </a>   
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('reports/bug-reports') }}">
                                Bug Reports
                            </a>
                            <a class="dropdown-item" href="{{ url('https://docs.google.com/spreadsheets/d/1DAK3eKFtAaqfA51r2USy6vT9Lzv7Xsv8uypeohMtcOs/edit?usp=sharing') }}">
                                Offsite Tracker
                            </a>
                            <a class="dropdown-item" href="{{ url('raffles') }}">
                                Raffles
                            </a>
                        </div>
                    </li>
                <li class="nav-item">
                                <a class="nav-link" href="{{ url('design') }}">GENETICS PORTAL</a>
                 <li class="nav-item dropdown">
                    <a id="browseDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Lore and World
                    </a>
                    <div class="dropdown-menu" aria-labelledby="browseDropdown">
                        <a class="dropdown-item" href="{{ url('world/info') }}">
                            Lore and World Info
                        </a>
                         <a class="dropdown-item" href="{{ url('world') }}">
                            Encyclopedia
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ url('users') }}">
                            Users
                        </a>
                        <a class="dropdown-item" href="{{ url('masterlist') }}">
                            Dragon Masterlist
                        </a>
                        <a class="dropdown-item" href="{{ url('myos') }}">
                            Genotype Masterlist
                        </a>
    
                    </div>
                </li>
                    
                    <li class="nav-item dropdown">
                        <a id="queueDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Rollers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="queueDropdown">
                            <a class="dropdown-item" href="{{ url('roller/arenaloot') }}">Arena Loot</a>
                            <a class="dropdown-item" href="{{ url('roller/combat') }}">Combat</a>
                            <a class="dropdown-item" href="{{ url('roller/daily_activity') }}">Daily Activities</a>
                            <a class="dropdown-item" href="{{ url('roller/hatchery') }}">Hatchery</a>
                            <a class="dropdown-item" href="{{ url('roller/mp_counter') }}">Master Point Counter</a>
                            <a class="dropdown-item" href="{{ url('roller/nesting') }}">Nesting </a>
                            <a class="dropdown-item" href="{{ url('roller/pp_counter') }}">Primal Point Counter</a>
                            <a class="dropdown-item" href="{{ url('roller/questing') }}">Questing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('info/HatchOdds') }}">
                                Hatchery Odds
                            </a>
                            <a class="dropdown-item" href="{{ url('info/Nesting_Odds') }}">
                                Nesting Odds
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
                        <li class="nav-item d-flex">
                            <a class="nav-link position-relative display-inline-block" href="{{ url('admin') }}"><i class="fas fa-crown"></i>
                                @if (Auth::user()->hasAdminNotification(Auth::user()))
                                <span class="position-absolute rounded-circle bg-danger text-light" style="top: -2px; right: -5px; padding: 1px 6px 1px 6px; font-weight:bold; font-size: 0.8em; box-shadow: 1px 1px 1px rgba(0,0,0,.25);">
                                    {{ Auth::user()->hasAdminNotification(Auth::user()) }}
                                </span>
                                @endif
                            </a>
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
                            <a class="dropdown-item" href="{{ url('info/_StaffApps') }}">
                                Staff Applications
                            </a>
                            <a class="dropdown-item" href="{{ url('forum/16') }}">
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
