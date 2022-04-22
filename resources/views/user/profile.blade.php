@extends('user.layout', ['user' => isset($user) ? $user : null])

@section('profile-title') {{ $user->name }}'s Profile @endsection

@section('meta-img') {{ asset('/images/avatars/'.$user->avatar) }} @endsection

@section('profile-content')
{!! breadcrumbs(['Users' => 'users', $user->name => $user->url]) !!}

@include('widgets._awardcase_feature', ['target' => $user, 'count' => Config::get('lorekeeper.extensions.awards.user_featured'), 'float' => false])

@if($user->is_banned)
    <div class="alert alert-danger">This user has been banned.</div>
@endif
<h1>
    <img src="/images/avatars/{{ $user->avatar }}" style="width:125px; height:125px; float:left; border-radius:50%; margin-right:25px;" alt="{{ $user->name }}" >
    {!! $user->displayName !!}
    {!! $user->isOnline() !!}
    <a href="{{ url('reports/new?url=') . $user->url }}"><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" title="Click here to report this user." style="opacity: 50%; font-size:0.5em;"></i></a>
    @if($user->settings->is_fto)
        <span class="badge badge-success float-right" data-toggle="tooltip" title="This user has not owned any characters from this world before.">FTO</span>
    @endif
    <span class="badge badge-info float-right text-white mx-1" data-toggle="tooltip" title="Current user level. Checkout the level area for more info.">Lvl: {{ $user->level->current_level }}</span>
</h1>
<div class="mb-1">
    <div class="row">
        <div class="row col-md-6">
            <div class="col-md-4 col-4"><h5>Alias</h5></div>
            <div class="col-md-8 col-8">{!! $user->displayAlias !!}</div>
        </div>
        <div class="row col-md-6">
            <div class="col-md-4 col-4"><h5>Joined</h5></div>
            <div class="col-md-8 col-8">{!! format_date($user->created_at, false) !!} ({{ $user->created_at->diffForHumans() }})</div>
        </div>
        <div class="row col-md-6">
            <div class="col-md-4 col-4"><h5>Status</h5></div>
            <div class="col-md-8 col-8">{!! $user->rank->displayName !!} {!! add_help($user->rank->parsed_description) !!}</div>
        </div>
        @if($user->birthdayDisplay && isset($user->birthday))
            <div class="row col-md-6">
                <div class="col-md-4 col-4"><h5>Birthday</h5></div>
                <div class="col-md-8 col-8">{!! $user->birthdayDisplay !!}</div>
            </div>
        @endif
        @if($user_enabled && isset($user->home_id))
            <div class="row col-md-6">
                <div class="col-md-4 col-4"><h5>Home</h5></div>
                <div class="col-md-8 col-8">{!! $user->home ? $user->home->fullDisplayName : '-Deleted Location-' !!}</div>
            </div>
        @endif
        @if($user_factions_enabled && isset($user->faction_id))
            <div class="row col-md-6">
                <div class="col-md-4 col-4"><h5>Faction</h5></div>
                <div class="col-md-8 col-8">{!! $user->faction ? $user->faction->fullDisplayName : '-Deleted Faction-' !!}{!! $user->factionRank ? ' ('.$user->factionRank->name.')' : null !!}</div>
            </div>
        @endif
    </div>
</div>

@if($user->is_deactivated)
    <div class="alert alert-info text-center">
        <h1>{!! $user->displayName !!}</h1>
            <p>This account is currently deactivated, be it by staff or the user's own action. All information herein is hidden until the account is reactivated.</p>
        @if(Auth::check() && Auth::user()->isStaff)
            <p class="mb-0">As you are staff, you can see the profile contents below and the sidebar contents.</p>
        @endif
    </div>
@endif

@if(!$user->is_deactivated || Auth::check() && Auth::user()->isStaff)
    @include('user._profile_content', ['user' => $user, 'deactivated' => $user->is_deactivated])
@endif

@endsection
