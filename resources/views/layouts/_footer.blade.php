<nav class="navbar navbar-expand-md navbar-light">
    <ul class="navbar-nav ml-auto mr-auto">
        <li class="nav-item"><a href="{{ url('info/about') }}" class="nav-link">About</a></li>
        <li class="nav-item"><a href="{{ url('info/Player_Guide') }}" class="nav-link">Player Guide</a></li>
        <li class="nav-item"><a href="{{ url('info/terms') }}" class="nav-link">Terms</a></li>
        <li class="nav-item"><a href="{{ url('info/privacy') }}" class="nav-link">Privacy</a></li>
        <li class="nav-item"><a href="mailto:soulsbetweenstaff@gmail.com" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="https://discord.gg/ZqtG7jf" class="nav-link">Discord</a></li>
        <li class="nav-item"><a href="http://deviantart.com/souls-between" class="nav-link">deviantART</a></li>
        <li class="nav-item"><a href="https://github.com/corowne/lorekeeper" class="nav-link">Lorekeeper</a></li>
        <li class="nav-item"><a href="{{ url('credits') }}" class="nav-link">Credits</a></li>
    </ul>
</nav>
<div class="copyright">&copy; {{ config('lorekeeper.settings.site_name', 'Lorekeeper') }} v{{ config('lorekeeper.settings.version') }} {{ Carbon\Carbon::now()->year }}</div>