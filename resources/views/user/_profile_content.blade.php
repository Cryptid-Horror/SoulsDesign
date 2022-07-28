@if($deactivated)<div style="filter:grayscale(1); opacity:0.75">@endif

@if(isset($user->profile->parsed_text))
    <div class="card mb-3" style="clear:both;">
        <div class="card-body">
            {!! $user->profile->parsed_text !!}
        </div>
    </div>
@endif

@if(Auth::check() && Auth::user()->id != $user->id && !$user->isBlocked(Auth::user()))
    <h4>
        @if($user->isPendingFriendsWith(Auth::user()))
            <small><i data-toggle="tooltip" title="You have a pending request to be friends with {{ $user->name }}." class="fas fa-user text-info float-right"></i></small>
        @elseif($user->isFriendsWith(Auth::user()))
            <small><i data-toggle="tooltip" title="You are friends with {{ $user->name }}." class="fas fa-user text-success float-right"></i></small>
        @else
            {!! Form::open(['url' => 'friends/requests/'.$user->id]) !!}
                {!! Form::button('<i class="fas fa-plus"></i>', ['class' => 'btn badge badge-success mr-2 float-right', 'data-toggle' => 'tooltip', 'title' => 'Add this user as friend.', 'type' => 'submit']) !!}
            {!! Form::close() !!}
        @endif
        {!! Form::open(['url' => 'friends/block/'.$user->id]) !!}
            {!! Form::button('Block', ['class' => 'btn badge badge-danger mr-2 float-right', 'data-toggle' => 'tooltip', 'title' => 'Blocking this user will prevent them from viewing your profile.', 'type' => 'submit']) !!}
        {!! Form::close() !!}
    </h4>
@endif

<br>
<hr>

<h2>
    @if(isset($sublists) && $sublists->count() > 0)
        @foreach($sublists as $sublist)
        / <a href="{{ $user->url.'/sublist/'.$sublist->key }}">{{ $sublist->name }}</a>
        @endforeach
    @endif
</h2>

@foreach($characters->take(4)->get()->chunk(4) as $chunk)
    <div class="row mb-4">
        @foreach($chunk as $character)
            <div class="col-md-3 col-6 text-center">
                <div>
                    <a href="{{ $character->url }}"><img src="{{ $character->image->thumbnailUrl }}" class="img-thumbnail" alt="{{ $character->fullName }}" /></a>
                </div>
                <div class="mt-1">
                    <a href="{{ $character->url }}" class="h5 mb-0"> @if(!$character->is_visible) <i class="fas fa-eye-slash"></i> @endif {{ Illuminate\Support\Str::limit($character->fullName, 20, $end='...') }}</a>
                </div>
            </div>
        @endforeach
    </div>
@endforeach

<div class="text-right"><a href="{{ $user->url.'/characters' }}">View all...</a></div>
<hr>



<div class="card-deck mb-4 profile-assets" style="clear:both;">
    <div class="card profile-currencies profile-assets-card">
        <div class="card-body text-center">
            <h5 class="card-title">Bank</h5>
            <div class="profile-assets-content">
                @foreach($user->getCurrencies(false) as $currency)
                    <div>{!! $currency->display($currency->quantity) !!}</div>
                @endforeach
            </div>
            <div class="text-right"><a href="{{ $user->url.'/bank' }}">View all...</a></div>
        </div>
    </div>
    <div class="card profile-inventory profile-assets-card">
        <div class="card-body text-center">
            <h5 class="card-title">Hoard</h5>
            <div class="profile-assets-content">
                @if(count($items))
                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-md-3 col-6 profile-inventory-item">
                                @if($item->imageUrl)
                                    <img src="{{ $item->imageUrl }}" data-toggle="tooltip" title="{{ $item->name }}" alt="{{ $item->name }}"/>
                                @else
                                    <p>{{ $item->name }}</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div>No items owned.</div>
                @endif
            </div>
            <div class="text-right"><a href="{{ $user->url.'/inventory' }}">View all...</a></div>
        </div>
    </div>
    <div class="card profile-inventory profile-assets-card">
        <div class="card-body text-center">
            <h5 class="card-title">Awards</h5>
            <div class="profile-assets-content">
                @if(count($awards))
                    <div class="row">
                        @foreach($awards as $award)
                            <div class="col-md-3 col-6 profile-inventory-item">
                                @if($award->imageUrl)
                                    <img src="{{ $award->imageUrl }}" data-toggle="tooltip" title="{{ $award->name }}" />
                                @else
                                    <p>{{ $award->name }}</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div>No awards earned.</div>
                @endif
            </div>
            <div class="text-right"><a href="{{ $user->url.'/awardcase' }}">View all...</a></div>
        </div>
    </div>
</div>
<div class="card-deck mb-4 profile-assets">
    <div class="card profile-currencies profile-assets-card">
        <div class="card-body text-center">
            <h5 class="card-title">Pets</h5>
            <div class="card-body">
                @if(count($pets))
                    <div class="row">
                        @foreach($pets as $pet)
                            <div class="col-md-4 col-4 profile-inventory-item">
                                <a href="" class="inventory-stack"><img src="{{ $pet->variantimage($pet->pivot->variant_id) }}" class="img-fluid" style="width:100%;" data-toggle="tooltip" title="{{ $pet->name }}" alt="{{ $pet->name }}" />
                            </div>
                        @endforeach
                    </div>
                @else
                    <div>No pets owned.</div>
                @endif
            </div>
            <div class="text-right"><a href="{{ $user->url.'/pets' }}">View all...</a></div>
        </div>
    </div>
    <div class="card profile-inventory profile-assets-card">
        <div class="card-body text-center">
            <h5 class="card-title">Armoury</h5>
            <div class="card-body">
                @if(count($armours))
                    <div class="row">
                        @foreach($armours as $armour)
                            <div class="col-md-4 col-4 profile-inventory-item">
                                @if($armour->imageUrl)
                                <img src="{{ $armour->imageUrl }}" data-toggle="tooltip" title="{{ $armour->name }}" alt="{{ $armour->name }}"/>
                                @else
                                    <p>{{ $armour->name }}</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div>No weapons or gear owned.</div>
                @endif
            </div>
            <div class="text-right"><a href="{{ $user->url.'/armoury' }}">View all...</a></div>
        </div>
    </div>
</div>
   


<hr>
<br>

@comments(['model' => $user->profile,
        'perPage' => 5
    ])

@if($deactivated)</div>@endif
