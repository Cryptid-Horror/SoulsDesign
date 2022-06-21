

<h1>Welcome, {!! Auth::user()->displayName !!}!</h1>
{{--<div class="card mb-4 timestamp">
    <div class="card-body">
        <i class="far fa-clock"></i> {!! format_date(Carbon\Carbon::now()) !!}
    </div>
</div>--}}

 

<div class="row">
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/xdd.png'),
                'header' => 'Account',
                'links' => [
                    'Profile' => Auth::user()->url,
                    'User Settings' => url('account/settings'),
                    'Notifications' => url('notifications'),
                    'Player Guide Hub' => url(''),
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
                    'Transfers' => url('characters/transfers/incoming'),
                    'Design Guide' => url('https://www.soulsbetween.com/design'),
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
                'header' => 'Prompts',
                'links' => [
                    'Trials of Passage' => url(''),
                    'Activities' => url(''),
                    'Miscellanious' => url(''),
                    'Nesting and Hatchery' => url(''),
                    'Events' => url(''),
                ]
            ])
        </div>
    </div>



<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Current Events and Notices</h5>
        {{--<div class="alert alert-success alert-dismissible fade show" role="alert">
Arena Season has been extended until the 15th of June!<br>
Midsummer Event will be released Shortly!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br>
<a href="{{ url('https://www.soulsbetween.com/prompts/prompt-categories?name=Arena') }}"><img src="{{ asset('images/arenas.png') }}"></a>
--}}
There are no current events - Staff are working to catch up queues and we are working on finishing up on prompt overhaul! </p>
      </div>
    </div>
  </div>
  <div class="col-md-6 text-center">
    <div class="card mb-4">
         <div class="card-body">
            <h5>Recent Characters</h5>
                @if($characters->count() > 0)
                    <div class="row no-gutters">
                         @foreach($characters as $character)
                             <div class="col-md-3">
                                <a href="{{ $character->url }}"><img class="mb-2" style="width:90%; max-width:200px; background-color:#fefcf6; border-radius:.5em; border: 2px solid #fefcf6;" src="{{ $character->image->thumbnailUrl }}" /></a>
                            </div>
                         @endforeach
                    </div>
                 @else
             <p>None!</p>
            @endif
           {{-- @include('widgets._questboard', [
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
    ]) --}}
        </div>
     </div>
 </div>

</div>
 
 @include('widgets._recent_forum_posts')
<br>
 
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

