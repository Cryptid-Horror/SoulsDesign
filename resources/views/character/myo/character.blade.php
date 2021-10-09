@extends('character.layout', ['isMyo' => true])

@section('profile-title') {{ $character->fullName }} @endsection

@section('profile-content')
{!! breadcrumbs(['Genotype Slot Masterlist' => 'myos', $character->fullName => $character->url]) !!}

@include('character._header', ['character' => $character])

{{-- Main Image --}}
<div class="text-center mb-3">
    <a href="{{ $character->image->imageUrl }}" data-lightbox="entry" data-title="{{ $character->fullName }}">
        <img src="{{ $character->image->imageUrl }}" class="image" />
    </a>
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
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
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
                <li>    
                @if(Auth::check() && !$character->deceased && ($character->user_id == Auth::user()->id || Auth::user()->hasPower('manage_characters')))    
                    <a href="#" class="btn btn-outline-danger" data-slug="{{ $character->slug }}"><i class="fas fa-skull-crossbones"></i></a>
                </li>
            @endif
        </ul>
    </div>
    <div class="card-body tab-content">
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
</p>
<div class="collapse" id="collapsequickadmin">
  <div class="card card-body">
    <h3>[Admin] Edit Image Details</h3>
        <div class="alert alert-info">
            This section is for easy editing of details relating to the active character image at the top of the page.
        </div>
        @include('character._image_info', ['image' => $character->image])
        @endif
        @endsection 
    </div>
</div>

@section('scripts')
    @parent
    @include('character._image_js')
@endsection