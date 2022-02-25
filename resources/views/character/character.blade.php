@extends('character.layout', ['isMyo' => $character->is_myo_slot])

@section('profile-title') {{ $character->fullName }} @endsection

@section('meta-img') {{ $character->image->thumbnailUrl }} @endsection

@section('profile-content')
@if($character->is_myo_slot)
{!! breadcrumbs(['Registered Dragon Slot Masterlist' => 'myos', $character->fullName => $character->url]) !!}
@else
{!! breadcrumbs([($character->category->masterlist_sub_id ? $character->category->sublist->name.' Masterlist' : 'Character masterlist') => ($character->category->masterlist_sub_id ? 'sublist/'.$character->category->sublist->key : 'masterlist' ), $character->fullName => $character->url]) !!}
@endif

@include('character._header', ['character' => $character])

{{-- Main Image --}}
<div class="text-center mb-3">
    @if(isset($background) && Config::get('lorekeeper.extensions.character_backgrounds.enabled'))
        <div class="text-center" style="{{ implode('; ',$background) }}; background-size: cover; background-repeat:no-repeat;">
            <a href="{{ $character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists( public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)) ? $character->image->fullsizeUrl : $character->image->imageUrl }}" data-lightbox="entry" data-title="{{ $character->fullName }}">
                <img src="{{ $character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists( public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)) ? $character->image->fullsizeUrl : $character->image->imageUrl }}" class="image" />
            </a>
        </div>
    @else
        <div class="text-center">
            <a href="{{ $character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists( public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)) ? $character->image->fullsizeUrl : $character->image->imageUrl }}" data-lightbox="entry" data-title="{{ $character->fullName }}">
                <img src="{{ $character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists( public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)) ? $character->image->fullsizeUrl : $character->image->imageUrl }}" class="image" />
            </a>
        </div>
    @endif
    @if($character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists( public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)))
        <div class="text-right">You are viewing the full-size image. <a href="{{ $character->image->imageUrl }}">View watermarked image</a>?</div>
    @endif
</div>
<div class="mb-4 mt-2 text-center">
    <div class="card text-center">
        <h1><span class="badge badge-dark float-center text-white mx-1" data-toggle="tooltip" title="Current Character level.">Current Lvl: {{ $character->level->current_level }}</span></h1>
        
        <center>
            @if($next)
                <p>Next Level: {{ $next->level}}</p>
                {{ $character->level->current_exp}}/{{ $next->exp_required }}
                <div class="progress" style="height: 20px; width: 50%;">
                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                    aria-valuenow="{{ $character->level->current_exp}}" aria-valuemin="0" aria-valuemax="{{ $next->exp_required }}" style="width:{{ $character->level->current_exp / $next->exp_required * 100 }}%">
                    {{ $character->level->current_exp}}/{{ $next->exp_required }}
                    </div>
                </div>
            @else
                <p>You are at the max level!</p>
            @endif
        
            @php
                $stats = $character->stats;
                $health = $stats->shift();
            @endphp
            <br/>
            @if($health)
                <b><h4>Character Health</h4></b>
                <div class="progress" style="height: 20px; width: 50%;" >
                    <div class="progress-bar bg-success text-dark h4" role="progressbar" aria-valuenow="{{ $health->current_count }}" aria-valuemin="0" aria-valuemax="{{ $health->count }}" style="height:100%; width:{{ $health->current_count / $health->count * 100 }}%">
                    {{ $health->current_count ?? '?' }}/{{ $health->count }}
                    </div>
                </div>
            @else
                Health data not yet initialized! Please visit the Health Tracker tab to initialize.
            @endif
        </center>
       <br><br>
    </div>
</div>


{{-- Profile 
<div class="card character-bio">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="mb-0">Profile</h3>
        <div>
            @if(isset($character->image->ext_url))
                <a href="{{ $character->image->ext_url }}" class="btn btn-outline-secondary btn-sm mr-2 d-none d-sm-inline"><i class="fas fa-link"></i> View Image On DeviantArt</a>
            @endif
            <a href="{{ $character->url . '/profile/edit' }}" class="btn btn-outline-info btn-sm"><i class="fas fa-cog"></i> Edit Profile</a>
        </div>
    </div>
    <div class="card-body">
        @include('character._tab_profile', ['character' => $character])
    </div>
</div> --}}


{{--Technical Information--}}
<h3>Character Details</h3>
<div class="card character-bio">
    <ul class="p-4 nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" id="profileTab" data-toggle="tab" href="#profile" role="tab">Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="charinfoTab" data-toggle="tab" href="#charinfo" role="tab">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="notesTab" data-toggle="tab" href="#notes" role="tab">Description</a>
        </li>
        @if($character->getLineageBlacklistLevel() < 2)
            <li class="nav-item">
                <a class="nav-link" id="lineageTab" data-toggle="tab" href="#lineage" role="tab">Lineage</a>
            </li>
        @endif
        @if(Auth::check() && Auth::user()->hasPower('manage_characters'))
            <li class="nav-item">
                <a class="nav-link" id="settingsTab" data-toggle="tab" href="#settings-{{ $character->slug }}" role="tab"><i class="fas fa-cog"></i></a>
            </li>
                <li><a href="{{ $character->url . '/profile/edit' }}" class="btn btn-outline-primary"><i class="fas fa-user-cog"></i></a>
            </li>
        @endif
        @if(Auth::check() && !$character->deceased && ($character->user_id == Auth::user()->id || Auth::user()->hasPower('manage_characters')))    
            <li>    
                <a href="#" class="btn btn-outline-danger" data-slug="{{ $character->slug }}"><i class="fas fa-skull-crossbones"></i></a>
            </li>
        @endif
    </ul>
    <div class="p-4 tab-content">
        <div class="tab-pane fade show active" id="profile">
            @include('character._tab_profile', ['character' => $character])
        </div>
        <div class="tab-pane fade" id="charinfo">
            @include('character._tab_charinfo', ['character' => $character])
        </div>
        <div class="tab-pane fade" id="notes">
            @include('character._tab_notes', ['character' => $character])
            @include('character._tab_stats', ['character' => $character])
        </div>
        @if($character->getLineageBlacklistLevel() < 2)
            <div class="tab-pane fade" id="lineage">
                @include('character._tab_lineage', ['character' => $character])
            </div>
        @endif
        <div class="tab-pane fade" id="skills">
            @include('character._tab_skills', ['character' => $character, 'skills' => $skills])
        </div>
        @if(Auth::check() && Auth::user()->hasPower('manage_characters'))
            <div class="tab-pane fade" id="settings-{{ $character->slug }}">
                {!! Form::open(['url' => $character->is_myo_slot ? 'admin/myo/'.$character->id.'/settings' : 'admin/character/'.$character->slug.'/settings']) !!}
                    <div class="form-group">
                        {!! Form::checkbox('is_visible', 1, $character->is_visible, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
                        {!! Form::label('is_visible', 'Is Visible', ['class' => 'form-check-label ml-3']) !!} {!! add_help('Turn this off to hide the character. Only mods with the Manage Masterlist power (that\'s you!) can view it - the owner will also not be able to see the character\'s page.') !!}
                    </div>
                    <div class="text-right">
                        {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
                <hr />
                <div class="text-right">
                    <a href="#" class="btn btn-outline-danger btn-sm delete-character" data-slug="{{ $character->slug }}">Delete</a>
                </div>
            </div>
        @endif
    </div>
</div>

{{-- @if(Auth::check() && !$character->deceased && ($character->user_id == Auth::user()->id || Auth::user()->hasPower('manage_characters')))
    <div class="d-flex justify-content-end mt-2">
        <a href="#" class="btn btn-danger float-right decease-character" data-slug="{{ $character->slug }}">Decease Dragon</a>
    </div>
@endif --}}

<hr>

@if(Auth::check() && Auth::user()->hasPower('manage_characters'))

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsequickadmin" aria-expanded="false" aria-controls="collapsequickadmin">
    Quick Admin Controls
</button>

<div class="collapse" id="collapsequickadmin">
    <div class="card card-body">
        <h3>[Admin] Edit Image Details</h3>
        <div class="alert alert-info">
            This section is for easy editing of details relating to the active character image at the top of the page.
        </div>
        @include('character._image_info', ['image' => $character->image])
    </div>
</div>
@endif

@endsection 

@section('scripts')
    @parent
    @include('character._image_js', ['character' => $character])
    <script>
        $(document).ready(function() {
            $('.decease-character').on('click', function(e) {
            e.preventDefault();
            loadModal("{{ url('character') }}/"+$(this).data('slug')+"/decease", 'Confirm Decease Dragon');
            });
        });
    </script>
@endsection