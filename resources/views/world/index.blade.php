@extends('world.layout')

@section('title') Home @endsection

@section('content')
{!! breadcrumbs(['Encyclopedia' => 'world']) !!}

<h1>World</h1>
<div class="row">
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/xdd.png'),
                'header' => 'Species',
                'links' => [
                    'Species' => url('world/species'),
                    'Subtypes' => url('world/subtypes'),
                    'Character Categories' => url('world/character-categories'),
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/characters2.png'),
                'header' => 'Traits',
                'links' => [
                    'Categories' => url('world/trait-categories'),
                    'All Traits' => url('world/traits'),
                    'Rarities' => url('world/rarities'),
                ]
            ])
        </div>
      
</div>
{{--

<div class="row">
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/xdd.png'),
                'header' => 'Species',
                'links' => [
                    'Species' => url('world/species'),
                    'Subtypes' => url('world/subtypes'),
                    'Character Categories' => url('world/character-categories'),
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/characters2.png'),
                'header' => 'Traits',
                'links' => [
                    'Categories' => url('world/trait-categories'),
                    'All Traits' => url('world/traits'),
                    'Rarities' => url('world/rarities'),
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/honeyedit.png'),
                'header' => 'Combat Stats',
                'links' => [
                    'Combat Classes' => url('world/character-classes'),
                    'Gear Categories' => url('world/gear-categories'),
                    'All Gear' => url('world/gear'),
                    'Pet Categories' => url('world/pet-categories'),
                    'All Pets' => url)('world/pets'),
                ]
            ])
        </div>
        <div class="col-xl-3 col-sm-6 d-flex justify-content-center">
            @include('widgets._hovereffect_image', [
                'imageUrl' => asset('images/flower2.png'),
                'header' => 'Items Etc',
                'links' => [
                    'Item Categories' => url('world/item-categories'),
                    'All Items' => url('world/items'),
                    'All Recipes' => url('world/recipes'),
                    'Currencies' => url('world/currencies'),
                    'Categories' => url('world/award-categories'),
                    'All Awards' => url('world/awards'),
                ]
            ])
        </div>
    </div>
    --}}



<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/characters.png') }}" />
                <h5 class="card-title">Characters</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('world/species') }}">Species</a></li>
				<li class="list-group-item"><a href="{{ url('world/subtypes') }}">Subtypes</a></li>
                <li class="list-group-item"><a href="{{ url('world/rarities') }}">Rarities</a></li>
                <li class="list-group-item"><a href="{{ url('world/trait-categories') }}">Trait Categories</a></li>
                <li class="list-group-item"><a href="{{ url('world/traits') }}">All Traits</a></li>
                <li class="list-group-item"><a href="{{ url('world/character-categories') }}">Character Categories</a></li>
                <li class="list-group-item"><a href="{{ url('world/character-classes') }}">Character Classes</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/inventory.png') }}" />
                <h5 class="card-title">Items & Awards</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('world/item-categories') }}">Item Categories</a></li>
                <li class="list-group-item"><a href="{{ url('world/items') }}">All Items</a></li>
                <li class="list-group-item"><a href="{{ url('world/award-categories') }}">Award Categories</a></li>
                <li class="list-group-item"><a href="{{ url('world/awards') }}">All Awards</a></li>
                <li class="list-group-item"><a href="{{ url('world/currencies') }}">Currencies</a></li>
                <li class="list-group-item"><a href="{{ url('world/recipes') }}">All Recipes</a></li>
                <li class="list-group-item"><a href="{{ url('world/pet-categories') }}">Pet Categories</a></li>
                <li class="list-group-item"><a href="{{ url('world/pets') }}">All Pets</a></li>
                <li class="list-group-item"><a href="{{ url('world/weapon-categories') }}">Weapon Categories</a></li>
                <li class="list-group-item"><a href="{{ url('world/weapons') }}">All Weapons</a></li>
                <li class="list-group-item"><a href="{{ url('world/gear-categories') }}">Gear Categories</a></li>
                <li class="list-group-item"><a href="{{ url('world/gear') }}">All Gear</a></li>
            </ul>
        </div>
    </div>
</div>


@endsection


