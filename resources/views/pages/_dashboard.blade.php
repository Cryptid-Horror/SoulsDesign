<h1>Welcome, {!! Auth::user()->displayName !!}!</h1>
<div class="card mb-4 timestamp">
    <div class="card-body">
        <i class="far fa-clock"></i> {!! format_date(Carbon\Carbon::now()) !!}
    </div>
</div>
<br>
            @include('widgets._recent_forum_posts')
<br>
<center>
                @include('widgets._hovereffect_image', [
                    'imageUrl' => asset('images/account.png'),
                    'header' => 'Account',
                    'links' => [
                        'Profile' => Auth::user()->url,
                        'User Settings' => url('account/settings'),
                        'Notifications' => url('notifications')
                    ]
                ])

                @include('widgets._hovereffect_image', [
                    'imageUrl' => asset('images/Primordial.png'),
                    'header' => 'Dragons',
                    'links' => [
                        'My Dragons' => url('characters'),
                        'My Genotypes' => url('characters/myos'),
                        'Dragon Transfers' => url('characters/transfers/incoming')
                    ]
                ])  
                @include('widgets._hovereffect_image', [
                    'imageUrl' => asset('images/awards.png'),
                    'header' => 'Hoard',
                    'links' => [
                        'My Dragons' => url('inventory'),
                        'My Genotypes' => url('bank'),
                        'Dragon Transfers' => url('awardcase')
                    ]
                ])    
                    </center>           
 {{-- <div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/account.png') }}" />
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

