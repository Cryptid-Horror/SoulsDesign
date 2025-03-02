@extends('user.layout')

@section('profile-title') {{ $user->name }}'s Inventory @endsection

@section('profile-content')
{!! breadcrumbs(['Users' => 'users', $user->name => $user->url, 'Inventory' => $user->url . '/inventory']) !!}
@section('profile-title') {{ $user->name }}'s Profile @endsection

@section('meta-img') {{ asset('/images/avatars/'.$user->avatar) }} @endsection
<h1>
    <img src="/images/avatars/{{ $user->avatar }}" style="width:125px; height:125px; float:left; border-radius:50%; margin-right:25px;" alt="{{ $user->name }}" ></h1>

<h1>{!! $user->displayName !!}'s Hoard</h1>
<h1>
    <div class="float-left mb-3">
        <a class="btn btn-primary" href="{{ url('inventory/account-search') }}"><i class="fas fa-search"></i> Account Search</a>
    </div>
</h1>
<br><br><br>
<p>This is your inventory. Click on an item to view more details and actions you can perform on it.</p>

<div class="card character-bio">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            @foreach($items as $categoryId=>$categoryItems)
                <li class="nav-item">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="categoryTab-{{ isset($categories[$categoryId]) ? $categoryId : 'misc'}}" data-toggle="tab" href="#category-{{ isset($categories[$categoryId]) ? $categoryId : 'misc'}}" role="tab">
                        {!! isset($categories[$categoryId]) ? $categories[$categoryId]->name : 'Miscellaneous' !!}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="card-body tab-content">
        @foreach($items as $categoryId=>$categoryItems)
            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="category-{{ isset($categories[$categoryId]) ? $categoryId : 'misc'}}">
            @foreach($categoryItems->chunk(4) as $chunk)
                <div class="row mb-3">
                    @foreach($chunk as $itemId=>$stack)
                        <div class="col-sm-3 col-6 text-center inventory-item" data-id="{{ $stack->first()->pivot->id }}" data-name="{{ $user->name }}'s {{ $stack->first()->name }}">
                            @if($stack->first()->has_image)
                                <div class="mb-1">
                                    <a href="#" class="inventory-stack"><img src="{{ $stack->first()->imageUrl }}" alt="{{ $stack->first()->name }}"/></a>
                                </div>
                            @endif
                            <div>
                                <a href="#" class="inventory-stack inventory-stack-name">{{ $stack->first()->name }} x{{ $stack->sum('pivot.count') }}</a>
                            </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>

<h3>Latest Activity</h3>
<div class="mb-4 logs-table">
    <div class="logs-table-header">
        <div class="row">
            <div class="col-6 col-md-2"><div class="logs-table-cell">Sender</div></div>
            <div class="col-6 col-md-2"><div class="logs-table-cell">Recipient</div></div>
            <div class="col-6 col-md-2"><div class="logs-table-cell">Item</div></div>
            <div class="col-6 col-md-4"><div class="logs-table-cell">Log</div></div>
            <div class="col-6 col-md-2"><div class="logs-table-cell">Date</div></div>
        </div>
    </div>
    <div class="logs-table-body">
        @foreach($logs as $log)
            <div class="logs-table-row">
                @include('user._item_log_row', ['log' => $log, 'owner' => $user])
            </div>
        @endforeach
    </div>
</div>
<div class="text-right">
    <a href="{{ url($user->url.'/item-logs') }}">View all...</a>
</div>

@endsection

@section('scripts')
<script>
$( document ).ready(function() {
    $('.inventory-stack').on('click', function(e) {
        e.preventDefault();
        var $parent = $(this).parent().parent();
        loadModal("{{ url('items') }}/" + $parent.data('id'), $parent.data('name'));
    });
});
</script>
@endsection