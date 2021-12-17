@extends('home.layout')

@section('home-title') My Genotypes @endsection

@section('home-content')
{!! breadcrumbs(['Dragons' => 'characters', 'My Genotypes' => 'myos']) !!}

<h1>
    My Genotypes
</h1>

<p>This is a list of genotypes you own - click on a slot to view details about it. Genotypes can be submitted for design approval from their respective pages.</p>

<div class="text-right mb-2">
    <a class="btn btn-primary create-folder mx-1" href="#"><i class="fas fa-plus"></i> Create New Folder</a>
    <a class="btn btn-primary edit-folder mx-1" href="#"><i class="fas fa-edit"></i> Edit Folder</a>
</div>

<div id="folders" class="collapse text-right">
    <div class="row">
        <div class="col-8">
        </div>
        <div class="form-group col-4">
            {!! Form::label('Select Folder to Edit') !!}
            {!! Form::select('folder_ids[]', $folders, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="edit-get-button btn btn-primary"><i class="fas fa-edit"></i> Edit Folder</a></div>
</div>



{!! Form::open(['url' => 'characters/sort', 'class' => 'text-right']) !!}
<div class ="row">
    @foreach($slots as $slot)
        <div class="col-md-3 col-6 text-center mb-2" data-id="{{ $character->id }}">
            <div>
            <a href="{{ $slot->url }}"><img src="{{ $slot->image->thumbnailUrl }}" class="img-thumbnail" alt="Thumbnail for {{ $slot->fullName }}" /></a>
            </div>
            <div class="mt-1 h5">
                {!! $slot->displayName !!}
            </div>
            <div class="form-group">
                {!! Form::label('folder_ids[]', 'Folder (Optional)') !!}
                {!! Form::select('folder_ids[]', $folders, $slot->folder_id, ['class' => 'form-control']) !!}
            </div>
            @endforeach
        </div>
    @endsection




<-- <div class="row">
    @foreach($slots as $slot)
        <div class="col-md-3 col-6 text-center mb-2">
            <div>
                <a href="{{ $slot->url }}"><img src="{{ $slot->image->thumbnailUrl }}" class="img-thumbnail" alt="Thumbnail for {{ $slot->fullName }}" /></a>
            </div>
            <div class="mt-1 h5">
                {!! $slot->displayName !!}
            </div>
        </div>
    @endforeach
</div>
@endsection --> 
