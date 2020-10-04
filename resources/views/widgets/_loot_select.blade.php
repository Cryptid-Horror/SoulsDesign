<div class="text-right mb-3">
    <a href="#" class="btn btn-outline-info" id="addLoot">Add Reward</a>
</div>
<table class="table table-sm" id="lootTable">
    <thead>
        <tr>
            <th width="35%">Reward Type</th>
            <th width="35%">Reward</th>
            <th width="20%">Quantity</th>
            <th width="10%"></th>
        </tr>
    </thead>
    <tbody id="lootTableBody">
        @if($loots)
            @foreach($loots as $loot)
                <tr class="loot-row">
                    <td>{!! Form::select('rewardable_type[]', ['Item' => 'Item', 'Currency' => 'Currency', 'Award' => 'Award'] + ($showLootTables ? ['LootTable' => 'Loot Table'] : []), $loot->rewardable_type, ['class' => 'form-control reward-type', 'placeholder' => 'Select Reward Type']) !!}</td>
                    <td class="loot-row-select">
                        @if($loot->rewardable_type == 'Item')
                            {!! Form::select('rewardable_id[]', $items, $loot->rewardable_id, ['class' => 'form-control item-select selectize', 'placeholder' => 'Select Item']) !!}
                        @elseif($loot->rewardable_type == 'Currency')
                            {!! Form::select('rewardable_id[]', $currencies, $loot->rewardable_id, ['class' => 'form-control currency-select selectize', 'placeholder' => 'Select Currency']) !!}
                        @elseif($loot->rewardable_type == 'Award')
                            {!! Form::select('rewardable_id[]', $awards, $loot->rewardable_id, ['class' => 'form-control award-select selectize', 'placeholder' => 'Select Award']) !!}
                        @elseif($showLootTables && $loot->rewardable_type == 'LootTable')
                            {!! Form::select('rewardable_id[]', $tables, $loot->rewardable_id, ['class' => 'form-control table-select selectize', 'placeholder' => 'Select Loot Table']) !!}
                        @endif
                    </td>
                    <td>{!! Form::text('quantity[]', $loot->quantity, ['class' => 'form-control']) !!}</td>
                    <td class="text-right"><a href="#" class="btn btn-danger remove-loot-button">Remove</a></td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>