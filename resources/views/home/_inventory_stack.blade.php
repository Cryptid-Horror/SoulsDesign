@if(!$stack)
    <div class="text-center">Invalid stack selected.</div>
@else
    <div class="text-center">
        @if($item->has_image)
            <div class="mb-1"><a href="{{ $item->url }}"><img src="{{ $item->imageUrl }}" alt="{{ $item->name }}"/></a></div>
        @endif
        <div @if(count($item->tags)) class="mb-1" @endif>
            <a href="{{ $item->idUrl }}">{{ $item->name }}</a>
            @if(Auth::check())
                @include('widgets._wishlist_add', ['item' => $item, 'small' => true])
            @endif
        </div>
        @if(count($item->tags))
            <div>
                @foreach($item->tags as $tag)
                    @if($tag->is_active)
                        {!! $tag->displayTag !!}
                    @endif
                @endforeach
            </div>
        @endif
    </div>

    @if($item->parsed_description)
        <div class="mb-2">
            <a data-toggle="collapse" href="#itemDescription" aria-expanded="false" class="h5">Description <i class="fas fa-caret-down"></i></a>
            <div class="card collapse mt-1" id="itemDescription">
                <div class="card-body">
                    {!! $item->parsed_description !!}
                </div>
            </div>
        </div>
    @endif

    <h5>Item Variations</h5>
    @if($user && $user->hasPower('edit_inventories'))
        <p class="alert alert-warning my-2">Note: Your rank allows you to transfer account-bound items to another user.</p>
    @endif

    {!! Form::open(['url' => 'inventory/edit']) !!}
        <div class="card" style="border: 0px">
            <table class="table table-sm">
                <thead class="thead">
                    <tr class="d-flex">
                        @if($user && !$readOnly && ($stack->first()->user_id == $user->id || $user->hasPower('edit_inventories')))
                            <th class="col-1"><input id="toggle-checks" type="checkbox" onclick="toggleChecks(this)"></th>
                            <th class="col-4">Source</th>
                        @else
                            <th class="col-5">Source</th>
                        @endif
                        <th class="col-3">Notes</th>
                        <th class="col-3">Quantity</th>
                        <th class="col-1"><i class="fas fa-lock invisible"></i></th>
                    </tr>
            </tbody>
        </table>
    </div>

        @if($user && !$readOnly && ($stack->first()->user_id == $user->id || $user->hasPower('edit_inventories')))
            <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    @if(count($item->tags))
                        @foreach($item->tags as $tag)
                            @if(View::exists('inventory._'.$tag->tag))
                                @include('inventory._'.$tag->tag, ['stack' => $stack, 'tag' => $tag])
                            @endif
                        @endforeach
                    @endif

                    @if(isset($item->category) && $item->category->is_character_owned)
                        <li class="list-group-item">
                            <a class="card-title h5 collapse-title" data-toggle="collapse" href="#characterTransferForm">@if($stack->first()->user_id != $user->id) [ADMIN] @endif Transfer Item to Character</a>
                            <div id="characterTransferForm" class="collapse">
                                <p>This will transfer this stack or stacks to this character's inventory.</p>
                                <div class="form-group">
                                    {!! Form::select('character_id', $characterOptions, null, ['class' => 'form-control mr-2 default character-select', 'placeholder' => 'Select Character']) !!}
                                </div>
                                <div class="text-right">
                                    {!! Form::button('Transfer', ['class' => 'btn btn-primary', 'name' => 'action', 'value' => 'characterTransfer', 'type' => 'submit']) !!}
                                </div>
                            </div>
                        </li>
                    @endif
                    @if($item->canDonate)
                    <li class="list-group-item">
                        <a class="card-title h5 collapse-title" data-toggle="collapse" href="#donateForm">@if($stack->first()->user_id != $user->id) [ADMIN] @endif Donate Item</a>
                        <div id="donateForm" class="collapse">
                            <p>This will donate this item to the <a href="{{ url('shops/donation-shop') }}">Donation Shop</a>, where it will be available for other users to take. This action is not reversible. Are you sure you want to donate this item?</p>
                            <div class="text-right">
                                {!! Form::button('Donate', ['class' => 'btn btn-warning', 'name' => 'action', 'value' => 'donate', 'type' => 'submit']) !!}
                            </div>
                        </div>
                    </li>
                @endif
                    @if(isset($item->data['resell']) && App\Models\Currency\Currency::where('id', $item->resell->flip()->pop())->first() && Config::get('lorekeeper.extensions.item_entry_expansion.resale_function'))
                        <li class="list-group-item">
                            <a class="card-title h5 collapse-title" data-toggle="collapse" href="#resellForm">@if($stack->first()->user_id != $user->id) [ADMIN] @endif Sell Item</a>
                            <div id="resellForm" class="collapse">
                                <p>This item can be sold for <strong>{!! App\Models\Currency\Currency::find($item->resell->flip()->pop())->display($item->resell->pop()) !!}</strong>. This action is not reversible. Are you sure you want to sell this item?</p>
                                <div class="text-right">
                                    {!! Form::button('Sell', ['class' => 'btn btn-danger', 'name' => 'action', 'value' => 'resell', 'type' => 'submit']) !!}
                                </div>
                            </div>
                        </li>
                    @endif
                    <li class="list-group-item">
                        <a class="card-title h5 collapse-title" data-toggle="collapse" href="#transferForm">@if($stack->first()->user_id != $user->id) [ADMIN] @endif Transfer Item</a>
                        <div id="transferForm" class="collapse">
                            <div class="form-group">
                                {!! Form::label('user_id', 'Recipient') !!} {!! add_help('You can only transfer items to verified users.') !!}
                                {!! Form::select('user_id', $userOptions, null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="text-right">
                                {!! Form::button('Transfer', ['class' => 'btn btn-primary', 'name' => 'action', 'value' => 'transfer', 'type' => 'submit']) !!}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <a class="card-title h5 collapse-title" data-toggle="collapse" href="#deleteForm">@if($stack->first()->user_id != $user->id) [ADMIN] @endif Delete Item</a>
                        <div id="deleteForm" class="collapse">
                            <p>This action is not reversible. Are you sure you want to delete this item?</p>
                            <div class="text-right">
                                {!! Form::button('Delete', ['class' => 'btn btn-danger', 'name' => 'action', 'value' => 'delete', 'type' => 'submit']) !!}
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        @endif
    {!! Form::close() !!}
@endif

<script>
    $(document).keydown(function(e) {
    var code = e.keyCode || e.which;
    if(code == 13)
        return false;
    });
    $('.default.character-select').selectize();
    function toggleChecks($toggle) {
        $.each($('.item-check'), function(index, checkbox) {
            $toggle.checked ? checkbox.setAttribute('checked', 'checked') : checkbox.removeAttribute('checked');
            updateQuantities(checkbox);
        });
    }
    function updateQuantities($checkbox) {
        var $rowId = "#itemRow" + $checkbox.value
        $($rowId).find('.quantity-select').prop('name', $checkbox.checked ? 'quantities[]' : '')
    }
</script>