<div class="nav-bg"></div>
<nav class="navbar navbar-expand-md navbar-dark" id="headerNav">
    <div class="container-fluid">
        <a class="navbar-brand d-md-none" href="{{ url('/') }}">
            ✨ {{ config('lorekeeper.settings.site_name', 'Lorekeeper') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <!-- News/Sales/Guides link for mobile users -->
                <li class="nav-item d-none d-md-block d-lg-none">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                </li>

                <!-- Rest of nav -->
                <li class="nav-item dropdown">
                    <a id="queueDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Activities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="queueDropdown">
                        ✨Prompts
                        <a class="dropdown-item" href="{{ url('info/Activity_Guide') }}">
                            <i class="fas fa-clipboard-list"></i> Activity Guide
                        </a>
                        <a class="dropdown-item" href="{{ url('prompts/prompt-categories') }}">
                            <i class="fas fa-dungeon"></i> Activity List
                        </a>
                        <a class="dropdown-item" href="{{ url('info/MFA') }}">
                            <i class="fas fa-dungeon"></i> Monthly Free Activities
                        </a>
                        <!--<a class="dropdown-item" href="{{ url('challenges') }}">
                            <i class="fas fa-dungeon ml-3"></i> Challenges
                            </a>-->
                        <a class="dropdown-item"
                            href="{{ url('https://www.soulsbetween.com/prompts/prompts?prompt_category_id=31') }}">
                            <i class="fas fa-level-up-alt"></i> Celestial & Ethereal EXP
                        </a>
                        ✨Nesting & Hatchery
                        <a class="dropdown-item"
                            href="{{ url('https://www.soulsbetween.com/prompts/prompts?prompt_category_id=31') }}">
                            <i class="fas fa-egg"></i> Adoption Center
                        </a>
                        <a class="dropdown-item" href="{{ url('breeding-permissions') }}">
                            <i class="fas fa-egg"></i> Breeding Permissions
                        </a>
                        ✨Design<a class="dropdown-item" href="{{ url('info/dragon_registration') }}">
                            <i class="fas fa-paint-brush"></i> Design Registration
                        </a>
                        ✨ Other
                        <a class="dropdown-item" href="{{ url('crafting') }}">
                            <i class="fas fa-mortar-pestle"></i> Crafting
                        </a>
                        <a class="dropdown-item" href="{{ url('shops') }}">
                            <i class="fas fa-store"></i> Shops
                        </a>
                        <a class="dropdown-item" href="{{ url('info/Flights') }}">
                            <i class="fas fa-dragon"></i> Flights
                        </a>
                        <a class="dropdown-item" href="{{ url('raffles') }}">
                            <i class="fa-solid fa-ticket"></i>Raffles
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a id="queueDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Community
                    </a>
                    <div class="dropdown-menu" aria-labelledby="queueDropdown">
                        ✨Social
                        <a class="dropdown-item" href="{{ url('https://discord.gg/ZqtG7jf') }}">
                            <i class="fab fa-discord"></i> Discord
                        </a>

                        <a class="dropdown-item" href="{{ url('forum') }}">
                            <i class="fas fa-sign"></i> Forums
                        </a>
                        <a class="dropdown-item" href="{{ url('gallery') }}">
                            <i class="fas fa-paint-brush"></i>Gallery
                        </a>
                        <a class="dropdown-item" href="{{ url('trades/listings') }}">
                            <i class="fa-solid fa-right-left"></i> Trade Listings
                        </a>
                        ✨Resources
                        <a class="dropdown-item" href="{{ url('reports/bug-reports') }}">
                            <i class="fa-solid fa-bug"></i> Bug Reports
                        </a>
                        <a class="dropdown-item"
                            href="{{ url('https://docs.google.com/spreadsheets/d/1DAK3eKFtAaqfA51r2USy6vT9Lzv7Xsv8uypeohMtcOs/edit?usp=sharing') }}">
                            <i class="fa-solid fa-clipboard-list"></i> Offsite Tracker
                        </a>
                        <a class="dropdown-item" href="{{ url('users') }}">
                            <i class="fa-solid fa-users"></i> Users
                        </a>
                        <a class="dropdown-item" href="{{ url('forum/13') }}">
                            <i class="fa-brands fa-pagelines"></i> Leasing Dragons
                        </a>
                        <a class="dropdown-item" href="{{ url('info/Sales') }}">
                            <i class="fa-solid fa-store"></i>Seasonal Sales
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('design') }}">GENETICS PORTAL</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Codex </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        ✨Codex
                        <li><a class="dropdown-item" href="{{ url('world') }}"><i class="fas fa-book mr-1"></i>
                                Database</a></li>
                        <li><a class="dropdown-item" href="{{ url('world/info') }}"><i
                                    class="fas fa-book mr-1"></i>Lore & World
                            </a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                href="">Guides</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('') }}">Coming soon!</a></li>
                                <li><a class="dropdown-item" href="{{ url('') }}">Coming soon!</a></li>
                            </ul>
                        </li>
                        ✨General Info
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                href="">Masterlists</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('masterlist') }}">Characters</a></li>
                                <li><a class="dropdown-item" href="{{ url('myos') }}">Genotypes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="">Activity
                                Chances</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('info/HatchOdds') }}">Hatchery Odds</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('info/Nesting_Odds') }}">Nesting Odds</a>
                                </li>
                            </ul>
                        </li>
                        ✨Rollers
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                href="">Activities</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('roller/arenaloot') }}">Crucible Loot</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('roller/combat') }}">Combat</a></li>
                                <li><a class="dropdown-item" href="{{ url('roller/expedition') }}">Expeditions</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('roller/questing') }}">Questing</a></li>
                                <li><a class="dropdown-item" href="{{ url('roller/vortex') }}">Vortex / World
                                        Events</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="">Nesting
                                and Hatchery</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('roller/hatchery') }}">Hatchery</a></li>
                                <li><a class="dropdown-item" href="{{ url('roller/nesting') }}">Nesting </a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="">Misc</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('roller/counter_ce') }}">Celestial Exp
                                        Counter</a></li>
                                <li><a class="dropdown-item" href="{{ url('roller/counter_ee') }}">Ethereal Exp
                                        Counter</a></li>
                            </ul>
                        </li>
                    </ul>
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
                    @if (Auth::user()->isStaff)
                        <li class="nav-item d-flex">
                            <a class="nav-link position-relative display-inline-block" href="{{ url('admin') }}"><i
                                    class="fas fa-crown"></i>
                                @if (Auth::user()->hasAdminNotification(Auth::user()))
                                    <span class="position-absolute rounded-circle bg-danger text-light"
                                        style="top: -2px; right: -5px; padding: 1px 6px 1px 6px; font-weight:bold; font-size: 0.8em; box-shadow: 1px 1px 1px rgba(0,0,0,.25);">
                                        {{ Auth::user()->hasAdminNotification(Auth::user()) }}
                                    </span>
                                @endif
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->notifications_unread)
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-dark btn-sm" href="{{ url('notifications') }}"><span
                                    class="fas fa-envelope text-dark"></span> {{ Auth::user()->notifications_unread }}</a>
                        </li>
                    @endif

                    <!-- Circle Icons -->
                    <li class="nav-item nav-circles mx-1 mb-1 mb-lg-0">
                        <a class="nav-link mx-2 mx-lg-1" href="#" data-toggle="tooltip" title="Circle Icon One">
                            <img src="https://cdn.discordapp.com/attachments/1081345918202294304/1081345923365474386/small_fish_icon.png">
                        </a>
                        <a class="nav-link mx-2 mx-lg-1" href="#" data-toggle="tooltip" title="Circle Icon Two">
                            <img src="https://cdn.discordapp.com/attachments/1081345918202294304/1081345924107882668/small_eye.png">
                        </a>
                        <a class="nav-link mx-2 mx-lg-1" href="#" data-toggle="tooltip" title="Circle Icon Three">
                            <img src="https://cdn.discordapp.com/attachments/1081345918202294304/1081345923365474386/small_fish_icon.png">
                        </a>
                        <a class="nav-link mx-2 mx-lg-1" href="#" data-toggle="tooltip" title="Circle Icon Four">
                            <img src="https://cdn.discordapp.com/attachments/1081345918202294304/1081345924107882668/small_eye.png">
                        </a>
                        <a class="nav-link mx-2 mx-lg-1" href="#" data-toggle="tooltip" title="Circle Icon Five">
                            <img src="https://cdn.discordapp.com/attachments/1081345918202294304/1081345923365474386/small_fish_icon.png">
                        </a>
                    </li>

                    <!-- Clock -->
                    <li class="nav-item d-flex align-items-center">
                        <i class="far fa-clock mr-1 d-none d-lg-block"></i> <span id="clock" class="text-right"
                            style="font-size:12px"></span>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
