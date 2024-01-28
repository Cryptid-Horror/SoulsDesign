<!-- USER SECTION -->
<ul class="text-center position-relative">
    <div class="sidebar-one"></div>
    <li class="sidebar-section sidebar-user">
        @if (Auth::check())
            <div class="sidebar-icon w-100">
                <img src="/images/avatars/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="img-fluid">
            </div>

            <div class="px-3">
                <div class="btn-group d-block dropright pb-1">
                    <button class="btn btn-sm pl-5 pl-lg-2 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ Auth::user()->url }}">
                            Profile
                        </a>
                        <a class="dropdown-item" href="{{ url('notifications') }}">
                            Notifications
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('characters') }}">
                            Dragon Manager
                        </a>
                        <a class="dropdown-item" href="{{ url('characters/myos') }}">
                            Geno Manager
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('comments/liked') }}">
                            Liked Comments
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

                <div class="btn-group d-block dropright">
                    <button class="btn btn-sm pl-5 pl-lg-2 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Submit
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('submissions/new') }}">
                            Submit Prompt
                        </a>
                        <a class="dropdown-item" href="{{ url('claims/new') }}">
                            Submit Claim
                        </a>
                        <a class="dropdown-item" href="{{ url('designs') }}">
                            Design Review
                        </a>
                        <a class="dropdown-item" href="{{ url('trades/open') }}">
                            Trades
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('reports/new') }}">
                            Submit Report
                        </a>
                        <a class="dropdown-item" href="{{ url('info/_StaffApps') }}">
                            <i class="fas fa-lock-open"></i>Staff Apps
                        </a>
                        <a class="dropdown-item" href="{{ url('info/GAP') }}">
                            <i class="fas fa-lock-open"></i>Guest Artist Apps
                        </a>
                        <a class="dropdown-item" href="{{ url('forum/16') }}">
                            Suggestions/Feedback
                        </a>
                    </div>
                </div>
            </div>
        @else
            <div class="sidebar-login p-1">
                <a href="{{ route('login') }}" class="btn-login">
                    <img src="https://placehold.co/200x75" alt="Login" class="img-fluid">
                </a>
                <a href="{{ route('register') }}" class="btn-register">
                    <img src="https://placehold.co/200x75" alt="Register" class="img-fluid">
                </a>
            </div>
        @endif
    </li>
</ul>

<!-- SIDEBAR LINKS SECTION -->
@hasSection('sidebar')
    <div class="sidebar-links mb-2">
        <div class="sidebar-two"></div>
        <div class="sidebar-middle-top"></div>
        <div class="sidebar-links-container">
            @yield('sidebar')
        </div>
    </div>
@endif

<!-- ARENA SEASON/GRAND HUNT SECTION -->
<ul class="text-center position-relative">
    <div class="sidebar-three"></div>
    <li class="sidebar-section grand-hunt">
        <img src="https://cdn.discordapp.com/attachments/1081345918202294304/1081345923701030974/arenas.png">
    </li>
    <div class="sidebar-four"></div>
</ul>

<!-- WORLD EVENT SECTION -->
<ul class="text-center position-relative">
    <li class="sidebar-section world-event">
        <img src="https://cdn.discordapp.com/attachments/1081345918202294304/1081345923701030974/arenas.png">
    </li>
    <div class="sidebar-five"></div>
</ul>

<div class="sidebar-tail-container">
</div>

