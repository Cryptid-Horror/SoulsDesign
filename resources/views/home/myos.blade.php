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
<div id="sortable" class="row sortable">
    @foreach($slots as $slot)
        <div class="col-md-3 col-6 text-center mb-2" data-id="{{ $slot->id }}">
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
        </div>
    @endforeach
</div>

    {!! Form::hidden('sort', null, ['id' => 'sortableOrder']) !!}
    {!! Form::submit('Save Order', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection


{{-- <div class="row">
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
--}}    

@section('scripts')
    <script>
        $( document ).ready(function() {
            
            $('.create-folder').click(function(e){
                e.preventDefault();
                loadModal("{{ url('/characters/folder/create') }}", "Create New Folder");
            });

            $('.edit-folder').click(function(e){
                e.preventDefault();
                $('#folders').collapse('toggle');
            });

            $('.edit-get-button').click(function(e){
                e.preventDefault();
                var folder_id = $('#folders select').val();
                var url = "{{ url('/characters/folder/edit') }}/" + folder_id;
                loadModal(url, "Edit Folder");
            });

            $( "#sortable" ).sortable({
                characters: '.sort-item',
                placeholder: "sortable-placeholder col-md-3 col-6",
                stop: function( event, ui ) {
                    $('#sortableOrder').val($(this).sortable("toArray", {attribute:"data-id"}));
                },
                create: function() {
                    $('#sortableOrder').val($(this).sortable("toArray", {attribute:"data-id"}));
                }
            });
            $( "#sortable" ).disableSelection();
        });
    </script>
@endsection
