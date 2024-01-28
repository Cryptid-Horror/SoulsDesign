<div class="d-lg-none my-3">
    <div class="row no-gutters align-items-center">
        <div class="col-3 text-center">
            <a href="#" class="border-0">
                <img src="{{ asset('files/advent.png') }}" class="advent img-fluid">
            </a>
        </div>

        <div class="col-3">
            @if (Auth::check() && Auth::user()->is_news_unread && Config::get('lorekeeper.extensions.navbar_news_notif'))
                <a class="pill d-flex text-warning align-items-center"
                    href="{{ url('news') }}"><strong>News</strong><i class="fas fa-bell ml-1"></i></a>
            @else
                <a class="pill" href="{{ url('news') }}">News</a>
            @endif
        </div>

        <div class="col-3">
            @if (Auth::check() && Auth::user()->is_sales_unread && Config::get('lorekeeper.extensions.navbar_news_notif'))
                <a class="pill d-flex text-warning align-items-center"
                    href="{{ url('sales') }}"><strong>Sales</strong><i class="fas fa-bell ml-1"></i></a>
            @else
                <a class="pill" href="{{ url('sales') }}">Sales</a>
            @endif
        </div>

        <div class="col-3">
            <a class="pill" href="{{ url('design') }}">Guides</a>
        </div>
    </div>
</div>

@if(Auth::check())
<div class="sticky-top">
    <div class="d-lg-none currencies">
        <div class="row no-gutters">
            @foreach (Auth::user()->getCurrencies(true) as $currency)
                <div class="col-4">
                    <div class="d-flex justify-content-between align-items-center px-sm-2 p-1 w-100">
                        <span class="mr-2">{{ $currency->quantity }}</span>
                        <span>
                            @if ($currency->has_icon)
                                {!! $currency->displayIcon !!}
                            @endif
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <ul class="text-center w-100 sidebar-right">
        <li class="sidebar-section border-0">
            <a href="{{ Auth::user()->url.'/characters' }}"">Dragons</a>
            <a href="{{ Auth::user()->url.'/myos' }}">Genos</a>
            <a href="{{ url('inventory') }}">Hoard</a>
            <a href="{{ url('bank') }}">Bank</a>
        </li>

        <li class="sidebar-section border-0">
            <a href="{{ url('characters/transfers/incoming') }}">Transfers</a>
            <a href="{{ url('characters') }}">Dragon Manager</a>
            <a href="{{ url('characters/myos') }}">Geno Manager</a>
            <a href="{{ Auth::user()->url.'/breeding-permissions' }}">Nesting Perms</a>
        </li>

        <li class="sidebar-section border-0">
            <a href="{{ url('level') }}">Ethereal Rank</a>
            <a href="{{ url('account/bookmarks') }}">Bookmarks</a>
            <a href="{{ url('wishlists') }}">Wishlists</a>
            <a href="{{ url('account/settings') }}">Settings</a>
        </li>
    </ul>
</div>
@endif
