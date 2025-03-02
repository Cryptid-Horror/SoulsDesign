<div class="ml-auto">
    <b>Name:</b> {{ $character->name ? $character->name : 'Unnamed' }}<br>
    <b>Nicknames:</b> {{ $character->nicknames ? $character->nicknames : 'N/A' }}<br>
    <b>ID:</b> {{ $character->slug }}<br>
    <b>Owner:</b> {!! $character->displayOwner !!}<br>
    <br>
    <b>Sex:</b> {{ $character->sex == 'M' ? 'Male' : 'Female' }}<br>
    <b>Gender/Pronouns:</b> {{ $character->gender_pronouns ? $character->gender_pronouns : '-' }}<br>
    <b>Species:</b> {{ $character->has_grand_title ? 'Grand' : '' }} {!! $character->image->subtype_id ? $character->image->subtype->displayName : 'Undefined' !!} {!! $character->image->species_id ? $character->image->species->displayName : 'Undefined' !!}<br>
    <b>Temperament:</b> {{ $character->temperament }}<br>
    <b>Diet:</b> {{ $character->diet ?? 'Undefined' }}<br>
    @if($character->homeSetting)<b>Location:</b> {{ $character->homeSetting }}<br>@endif
    <b>{{ $character->deceased ? 'Deceased' : $character->health_status }}</b><br>
    <b>Total Health:</b> {{ $character->image->total_health }}<br>
    <b>Current Health:</b> {{ $character->image->current_health }}<br>
    <b>Genotype:</b> {{ $character->image->genotype }}<br>
    <b>Phenotype:</b> {{ $character->image->phenotype }}<br>
    @if($character->image->free_markings)<b>Free Markings:</b> {{ $character->image->free_markings }}<br>@endif
    <b>Traits:</b>
    <?php $features = $character->image->features()->with('feature.category')->get(); ?>
    @if($features->count())
        @foreach($features as $feature)
            <div>@if($feature->feature->feature_category_id) <strong>{!! $feature->feature->category->displayName !!}:</strong> @endif {!! $feature->feature->displayName !!} @if($feature->data) ({{ $feature->data }}) @endif</div> 
        @endforeach
    @else 
        <div>No traits listed.</div>
    @endif
    <b>Rank:</b> {{ $character->rank }}<br>
    <img style="height:150px;" src="{{ $character->rankImageUrl }}"><br>
    <br>
    <b>Ouroboros Emblem:</b> {{ $character->ouroboros ? 'Complete' : 'Incomplete' }}<br>
    <b>Taming:</b> {{ $character->taming ? $character->taming.' Taming Complete' : 'Incomplete' }}<br>
    <ul>
        @switch($character->taming)
            @case('Domesticated')
                <li><i>Arena Honor</i> - The Dragons gains an extra chance to get rare items in the arena, even if they lose the fight.</li>
                <li><i>Good Listening</i> - The dragon has a higher chance to pass quests.</li>
                <li><i>Survival of the Fittest</i> - The dragon has a higher chance of finding rarer items in hunting, fishing, and foraging.</li>
                <li><i>Answering the Call</i> - The dragon has a higher chance to get rare items in the Grand Hunt.</li>
                @break
            @case('Wild')
                <li><i>Arena Honor</i> - The Dragons gains an extra chance to get rare items in the arena, even if they lose the fight.</li>
                <li><i>Good Listening</i> - The dragon has a higher chance to pass quests.</li>
                <li><i>Survival of the Fittest</i> - The dragon has a higher chance of finding rarer items in hunting, fishing, and foraging.</li>
                <li><i>Answering the Call</i> - The dragon has a higher chance to get rare items in the Grand Hunt.</li>
                @break
            @case('Aether')
                <li><i>Arena Honor</i> - The Dragons gains an extra chance to get rare items in the arena, even if they lose the fight.</li>
                <li><i>Good Listening</i> - The dragon has a higher chance to pass quests.</li>
                <li><i>Survival of the Fittest</i> - The dragon has a higher chance of finding rarer items in hunting, fishing, and foraging.</li>
                <li><i>Answering the Call</i> - The dragon has a higher chance to get rare items in the Grand Hunt.</li>
                @break
        @endswitch
    </ul>
    <b>Aether Restoration:</b> {{ $character->basic_aether ? 'Basic Completed' : 'Incomplete' }}<br>
    <ul>
        <i>Low Aether Class:</i> {{ $character->low_aether ? 'Low '.$character->low_aether.' Completed' : 'Incomplete' }}<br>
        <i>High Aether Class:</i> {{ $character->high_aether ? 'High '.$character->high_aether.' Completed' : 'Incomplete' }}<br>
    </ul>
    <ul>
        @switch($character->high_aether)
            @case('Arcane')
                <li>AETHERLING’S FAVOR</li>
                @break
            @case('Illusionist')
                <li>TIMELESS TRANSFORMATION</li>
                @break
            @case('Elementalist')
                <li>PERFECT NEST</li>
                @break
            @case('Healing')
                <li>REVITALIZING AURA</li>
                @break
            @case('Enchantment')
                <li>ENDLESS SATCHEL</li>
                @break
        @endswitch
    </ul>

    <b>Soul Linking:</b> {!! $character->soul_link !!}<br>
    <b>Arena Ranking:</b> {{ $character->arena_ranking ? $character->arena_ranking : 'Rankless' }}<br>
    <br>
    @if($character->skills)
        <b>Skills:</b>
        <ul>
        @foreach(explode(',', $character->skills) as $skill)
            <li>{{ $skill }}</li>
        @endforeach
        </ul>
    @endif
    <b>Adornments:</b>
    @if($character->image->adornments)
        <ul>
        @foreach(explode(',', $character->image->adornments) as $adornment)
            <li>{!! $adornment !!}</li>
        @endforeach
        </ul>
    @else
        None<br>
    @endif
    <b>Personality:</b><br>
    {!! $character->profile->parsed_text ?? 'N/A' !!}
    <br><br>
    @if($character->ouroboros)
        <b>Slots:</b> 
        @if($character->rank != 'Primordial')
            {{ $character->slots_used }} /
            @switch($character->rank)
                @case('Fledgling')
                    5
                    @break
                @case('Primal')
                    15
                    @break
                @case('Ancient')
                    30
                    @break
                @default
                    Undefined
                    @break
            @endswitch
            Used
        @else
            ∞
        @endif
    @endif
    <br>
    <b>Generation:</b> {!! $character->rarity->displayName ?? '-' !!}<br>
    <b>Lineage:</b><br>
    @include('character._lineage_tree', ['lineage' => $character->lineage()->first()])
    <br>
    <b>Designed By:</b> {!! $character->image->displayDesigners !!}<br>
    <b>Art By:</b> {!! $character->image->displayArtists !!}<br>
    @if($character->profile->custom_values->count() > 0)
        <hr>
        <div class="row no-gutters">
            @php $valueGroups = $character->profile->custom_values->groupBy('group'); @endphp
            @foreach($valueGroups as $groupName => $values)
                <div class="col-12 mb-3">
                    <div class="card">
                        @if($groupName)
                            <div class="card-header">
                                <h5 class="mb-0 mx-n1">{{ $values->first()->group }}</h5>
                            </div>
                        @endif
                        <ul class="list-group list-group-flush">
                            @foreach($values as $value)
                                <li class="list-group-item px-3">
                                    <div class="row no-gutters align-items-center">
                                        @if($value->name && $value->name != "")
                                            <div class="col-4 col-md-3"><h6 class="mb-0" style="font-weight: bold;">{{ $value->name }}</h6></div>
                                            <div class="col-8 col-md-9 pl-2">{!! $value->data_parsed !!}</div>
                                        @else
                                            <div class="col-12">{!! $value->data_parsed !!}</div>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @if($character->is_trading || $character->is_gift_art_allowed || $character->is_gift_writing_allowed)
        <hr>
        <div class="card mb-3">
            <ul class="list-group list-group-flush">
                @if($character->is_gift_art_allowed >= 1 && !$character->is_myo_slot)
                    <li class="list-group-item"><h5 class="mb-0"><i class="{{ $character->is_gift_art_allowed == 1 ? 'text-success' : 'text-secondary' }} far fa-circle fa-fw mr-2"></i> {{ $character->is_gift_art_allowed == 1 ? 'Gift art is allowed' : 'Please ask before gift art' }}</h5></li>
                @endif
                @if($character->is_gift_writing_allowed >= 1 && !$character->is_myo_slot)
                    <li class="list-group-item"><h5 class="mb-0"><i class="{{ $character->is_gift_writing_allowed == 1 ? 'text-success' : 'text-secondary' }} far fa-circle fa-fw mr-2"></i> {{ $character->is_gift_writing_allowed == 1 ? 'Gift writing is allowed' : 'Please ask before gift writing' }}</h5></li>
                @endif
                @if($character->is_trading)
                    <li class="list-group-item"><h5 class="mb-0"><i class="text-success far fa-circle fa-fw mr-2"></i> Open for trades</h5></li>
                @endif
            </ul>
        </div>
    @endif
</div>