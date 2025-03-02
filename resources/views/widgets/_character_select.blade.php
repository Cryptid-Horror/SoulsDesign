<div id="characterComponents" class="hide">
    <div class="submission-character mb-3 card">
        <div class="card-body">
            <div class="text-right"><a href="#" class="remove-character text-muted"><i class="fas fa-times"></i></a></div>
            <div class="row">
                <div class="col-md-2 align-items-stretch d-flex">
                    <div class="d-flex text-center align-items-center">
                        <div class="character-image-blank">Enter character code.</div>
                        <div class="character-image-loaded hide"></div>
                    </div>
                </div>
                <div class="col-md-10">
                    <a href="#" class="float-right fas fa-close"></a>
                    <div class="form-group">
                        {!! Form::label('slug[]', 'Character Code') !!}
                        {!! Form::text('slug[]', null, ['class' => 'form-control character-code']) !!}
                    </div>
                    <div class="form-group col-6">
                        {!! Form::label('is_focus[]', 'Focus Character?', ['class' => 'form-check-label mr-2']) !!}
                        {!! Form::select('is_focus[]', [0 => 'No' , 1 => 'Yes' ], 0, ['class' => 'form-control']) !!}
                    </div>
                    <div class="character-rewards hide">
                        <h4>Character Rewards</h4>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    @if($expanded_rewards)
                                        <th width="35%">Reward Type</th>
                                        <th width="35%">Reward</th>
                                    @else
                                        <th width="70%">Reward</th>
                                    @endif
                                    <th width="30%">Amount</th>
                                </tr>
                            </thead>
                            <tbody class="character-rewards">
                            </tbody>
                        </table>
                        <div class="text-right">
                            <a href="#" class="btn btn-outline-primary btn-sm add-reward">Add Reward</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table>
        <tr class="character-reward-row">

            @if($expanded_rewards)
                <td>
                    {!! Form::select('character_rewardable_type[]', ['Item' => 'Item', 'Currency' => 'Currency'] + (isset($showLootTables) && $showLootTables ? ['LootTable' => 'Loot Table'] : []) + (isset($showStatuses) && $showStatuses ? ['StatusEffect' => 'Status Effect'] : []), null, ['class' => 'form-control character-rewardable-type', 'placeholder' => 'Select Reward Type']) !!}
                </td>
                <td class="lootDivs">
                    <div class="character-currencies hide">{!! Form::select('character_currency_id[]', $characterCurrencies, 0, ['class' => 'form-control character-currency-id', 'placeholder' => 'Select Currency']) !!}</div>
                    <div class="character-items hide">{!! Form::select('character_item_id[]', $items, 0, ['class' => 'form-control character-item-id', 'placeholder' => 'Select Item']) !!}</div>
                    @if(isset($showLootTables) && $showLootTables) <div class="character-loots hide">{!! Form::select('character_rewardable_id[]', $tables, 0, ['class' => 'form-control character-rtable-id', 'placeholder' => 'Select Loot Table']) !!}</div> @endif
                    @if(isset($showStatuses) && $showStatuses) <div class="character-statuses hide">{!! Form::select('character_rewardable_id[]', $statuses, 0, ['class' => 'form-control character-status-id', 'placeholder' => 'Select Status Effect']) !!}</div> @endif
                </td>
            @else
                <td class="lootDivs">
                    {!! Form::hidden('character_rewardable_type[]', 'Currency', ['class' => 'character-rewardable-type']) !!}
                    <div class="character-currencies">{!! Form::select('character_currency_id[]', $characterCurrencies, 0, ['class' => 'form-control character-currency-id', 'placeholder' => 'Select Currency']) !!}</div>
                </td>
            @endif

            <td class="d-flex align-items-center">
                {!! Form::text('character_quantity[]', 0, ['class' => 'form-control mr-2  character-rewardable-quantity']) !!}
                <a href="#" class="remove-reward d-block"><i class="fas fa-times text-muted"></i></a>
            </td>
        </tr>
    </table>
</div>
