@extends('user.layout')

@section('profile-title') {{ $user->name }}'s Registered Dragon Slots @endsection

@section('profile-content')
{!! breadcrumbs(['Users' => 'users', $user->name => $user->url, 'Registered Dragon Slots' => $user->url . '/myos']) !!}

<h1>
    {!! $user->displayName !!}'s Registered Dragon Slots
</h1>

@if($myos->count())
    <div class="row">
        @foreach($myos as $myo)
            <div class="col-md-3 col-6 text-center mb-2">
                <div>
                    <a href="{{ $myo->url }}"><img src="{{ $myo->image->thumbnailUrl }}" class="img-thumbnail" /></a>
                </div>
                <div class="mt-1 h5">
                    {!! $myo->displayName !!}
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>No Registered Dragon slots found.</p> 
@endif

@endsection
