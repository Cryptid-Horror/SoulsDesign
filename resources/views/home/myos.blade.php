@extends('home.layout')

@section('home-title') My MYO Slots @endsection

@section('home-content')
{!! breadcrumbs(['Characters' => 'characters', 'My Registered Slots' => 'Registered Dragons']) !!}

<h1>
    My Registered Dragon Slots
</h1>

<p>This is a list of Registered Dragons slots you own - click on a slot to view details about it. Registered Dragon slots can be submitted for design approval from their respective pages.</p>
<div class="row">
    @foreach($slots as $slot)
        <div class="col-md-3 col-6 text-center mb-2">
            <div>
                <a href="{{ $slot->url }}"><img src="{{ $slot->image->thumbnailUrl }}" class="img-thumbnail" /></a>
            </div>
            <div class="mt-1 h5">
                {!! $slot->displayName !!}
            </div>
        </div>
    @endforeach
</div>
@endsection