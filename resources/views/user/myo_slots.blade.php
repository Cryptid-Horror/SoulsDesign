@extends('user.layout')

@section('profile-title') {{ $user->name }}'s Genotypes @endsection

@section('profile-content')
{!! breadcrumbs(['Users' => 'users', $user->name => $user->url, 'My Genotypes' => $user->url . '/myos']) !!}

<h1>
    {!! $user->displayName !!}'s Genotypes
</h1>

@if($myos->count())
    @foreach($myos as $key => $group)
        <div class="card mb-3 inventory-category">
                <h5 class="card-header inventory-header">
                    <a href="{{ $group->first()->folder ? $group->first()->folder->url : '#' }}">
                        <span data-toggle="tooltip" title="{{ $group->first()->folder ? $group->first()->folder->description : 'Genotypes without a folder.'}}">{{ $key }}</span>
                    </a>
                    <a class="small collapse-toggle" href="#{{ $key }}" data-toggle="collapse">Show</a></h3>
                </h5>
            
            <div class="card-body inventory-body collapse show" id="{{ $key }}">
                <div class="row mb-2">
                    @foreach($group as $myo)
                        <div class="col-md-3 col-6 text-center mb-2">
                            <div>
                                <a href="{{ $myo->url }}"><img src="{{ $myo->image->thumbnailUrl }}" class="img-thumbnail" alt="Thumbnail for {{ $myo->fullName }}" /></a>
                            </div>
                            <div class="mt-1 h5">
                                @if(!$myo->is_visible) <i class="fas fa-eye-slash"></i> @endif {!! $myo->displayName !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>  
    @endforeach
@else
    <p>No Genotypes Found.</p> 
@endif

@endsection

