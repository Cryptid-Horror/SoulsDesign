@extends('user.layout')

@section('profile-title') {{ $user->name }}'s Inventory @endsection

@section('profile-content')
{!! breadcrumbs(['Users' => 'users', $user->name => $user->url, 'Inventory' => $user->url . '/inventory']) !!}

<h1>
    Inventory
</h1>

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
                        @foreach($chunk as $item)
                            <div class="col-sm-3 col-6 text-center inventory-item" data-id="{{ $item->pivot->id }}">
                                <div class="mb-1">
                                    <a href="#" class="inventory-stack"><img src="{{ $item->imageUrl }}" alt="{{ $item->name }}" /></a>
                                </div>
                                <div>
                                    <a href="#" class="inventory-stack inventory-stack-name"><strong>{{ $item->name }}</strong></a>
                                    <div><strong>Cost: </strong> {!! $currencies[$item->pivot->currency_id]->display((int)$item->pivot->cost) !!}</div>
                                    @if($item->pivot->is_limited_stock) <div>Stock: {{ $item->pivot->quantity }}</div> @endif
                                    @if($item->pivot->purchase_limit) <div class="text-danger">Max {{ $item->pivot->purchase_limit }} per user</div> @endif
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
<div class="row ml-md-2 mb-4">
  <div class="d-flex row flex-wrap col-12 mt-1 pt-1 px-0 ubt-bottom">
    <div class="col-6 col-md-2 font-weight-bold">Sender</div>
    <div class="col-6 col-md-2 font-weight-bold">Recipient</div>
    <div class="col-6 col-md-2 font-weight-bold">Item</div>
    <div class="col-6 col-md-4 font-weight-bold">Log</div>
    <div class="col-6 col-md-2 font-weight-bold">Date</div>
  </div>
      @foreach($logs as $log)
          @include('user._item_log_row', ['log' => $log, 'owner' => $user])
      @endforeach
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
