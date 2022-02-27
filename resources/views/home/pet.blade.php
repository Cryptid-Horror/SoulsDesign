@extends('home.layout')

@section('home-title') Pets @endsection

@section('home-content')
{!! breadcrumbs(['Pets' => 'pets']) !!}

<h1>
    Pets
</h1>

<p>These are your pets. Click on a pet to view more details and actions you can perform on it.</p>


<div class="card character-bio">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            @foreach($pets as $categoryId=>$categoryPets)
                <li class="nav-item">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="categoryTab-{{ isset($categories[$categoryId]) ? $categoryId : 'misc'}}" data-toggle="tab" href="#category-{{ isset($categories[$categoryId]) ? $categoryId : 'misc'}}" role="tab">
                        {!! isset($categories[$categoryId]) ? $categories[$categoryId]->name : 'Miscellaneous' !!}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="card-body tab-content">
        @foreach($pets as $categoryId=>$categoryPets)
            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="category-{{ isset($categories[$categoryId]) ? $categoryId : 'misc'}}">
            @foreach($categoryPets->chunk(4) as $chunk)
                <div class="row mb-3">
                    @foreach($chunk as $pet)
                        <div class="col-sm-3 col-6 text-center inventory-item" data-id="{{ $pet->pivot->id }}" data-name="{{ $user->name }}'s {{ $pet->name }}">
                            <div class="mb-1">
                                <a href="#" class="inventory-stack"><img src="{{ $pet->VariantImage($pet->pivot->variant_id) }}" class="img-fluid"/></a>
                            </div>
                            <div>
                                <a href="#" class="inventory-stack inventory-stack-name">{{ $pet->VariantName($pet->pivot->variant_id) }} {{ $pet->name }}</a>
                            </div>
                            <div>
                                <span class="text-light badge badge-dark" style="font-size:95%;">{{ $pet->pivot->pet_name }}</span>
                            </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>



{{-- @foreach($pets as $categoryId=>$categoryPets)
    <div class="card mb-3 inventory-category">
        <h5 class="card-header inventory-header">
            {!! isset($categories[$categoryId]) ? '<a href="'.$categories[$categoryId]->searchUrl.'">'.$categories[$categoryId]->name.'</a>' : 'Miscellaneous' !!}
        </h5>
        <div class="card-body inventory-body">
            @foreach($categoryPets->chunk(4) as $chunk)
                <div class="row mb-3">
                    @foreach($chunk as $pet)
                        <div class="col-sm-3 col-6 text-center inventory-pet" data-id="{{ $pet->pivot->id }}" data-name="{{ $user->name }}'s {{ $pet->name }}">
                            <div class="mb-1">
                                <a href="#" class="inventory-stack"><img src="{{ $pet->VariantImage($pet->pivot->variant_id) }}" class="img-fluid"/></a>
                            </div>
                            <div> <span class="text-light badge badge-dark px-3 py-2 mb-1" style="font-size:95%;">{{ $pet->pivot->pet_name }}</span></div>
                            <div>
                                <a href="#" class="inventory-stack inventory-stack-name">{{ $pet->name }}</a>
                            </div>

                            @if($pet->dropData)
                                <a href="{{ url('pets/pet/'.$pet->pivot->id) }}" class="btn btn-primary btn-sm mt-1">Drops</a>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endforeach --}} 
<div class="text-right mb-4">
    <a href="{{ url(Auth::user()->url.'/pet-logs') }}">View logs...</a>
</div>

@endsection
@section('scripts')
<script>

$( document ).ready(function() {
    $('.inventory-stack').on('click', function(e) {
        e.preventDefault();
        var $parent = $(this).parent().parent();
        loadModal("{{ url('pets') }}/" + $parent.data('id'), $parent.data('name'));
    });
});

</script>
@endsection
