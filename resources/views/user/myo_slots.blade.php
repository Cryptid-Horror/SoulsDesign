@extends('user.layout')

@section('profile-title') {{ $user->name }}'s Genotypes @endsection

@section('profile-content')
{!! breadcrumbs(['Users' => 'users', $user->name => $user->url, 'My Genotypes' => $user->url . '/myos']) !!}

<h1>
    {!! $user->displayName !!}'s Genotypes
</h1>

@if($myos->count())
    <div class="row">
        @foreach($myos as $myo)
            <div class="col-md-3 col-6 text-center mb-2">
                <div>
                    <a href="{{ $myo->url }}"><img src="{{ $myo->image->thumbnailUrl }}" class="img-thumbnail" /></a>
                </div>
                <div class="mt-1 h5">
                    @if(!$myo->is_visible) <i class="fas fa-eye-slash"></i> @endif {!! $myo->displayName !!}
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>No Genotypes Found.</p> 
@endif

@endsection
