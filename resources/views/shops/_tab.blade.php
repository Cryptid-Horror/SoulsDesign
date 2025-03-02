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
                                    @if($item->pivot->purchase_limit) <div class="text-danger">Max {{ $item->pivot->purchase_limit }} @if($item->pivot->purchase_limit_timeframe !== 'lifetime') {{ $item->pivot->purchase_limit_timeframe }} @endif per user</div> @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
