<div class="ml-auto">

  

    <b>Sex:</b> {{ $character->sex == 'M' ? 'Male' : 'Female' }}<br>
    <b>Species:</b> {{ $character->has_grand_title ? 'Grand' : '' }} {!! $character->image->subtype_id ? $character->image->subtype->displayName : 'Undefined' !!} {!! $character->image->species_id ? $character->image->species->displayName : 'Undefined' !!}<br>
    <b>Temperament:</b> {{ $character->temperament }}<br>
    <b>Diet:</b> {{ $character->diet ?? 'Undefined' }}<br>
    <b>{{ $character->deceased ? 'Deceased' : $character->health_status }}</b><br>
    <b>Genotype:</b> {{ $character->image->genotype }}<br>
    <b>Phenotype:</b> {{ $character->image->phenotype }}<br>
    @if($character->image->free_markings)<b>Free Markings:</b> {{ $character->image->free_markings }}<br>@endif
    <b>Traits:</b>
    <?php $feature_categories = $character->image->features()->with('feature.category')->get()->groupBy('feature_category_id'); ?>
    @if($feature_categories->count())
        @foreach($feature_categories as $features)
            <div>
                @if($features[0]->feature->feature_category_id)
                    <strong>{!! $features[0]->feature->category->displayName !!}:</strong>
                @endif
                @foreach($features as $feature)
                    {!! $feature->feature->displayName !!} @if($feature->data) ({{ $feature->data }}) @endif
                @endforeach
            </div> 
        @endforeach
    @else 
        <div>No traits listed.</div>
    @endif
    @if($character->skills)
        <b>Skills:</b>
        <ul>
        @foreach(explode(',', $character->skills) as $skill)
            <li>{{ $skill }}</li>
        @endforeach
        </ul>
    @endif
    <b>Rank:</b> {{ $character->rank }}<br>
    <img style="height:150px;" src="{{ $character->rankImageUrl }}"><br>
    <br>
    <b>Ouroboros Emblem:</b> {{ $character->ouroboros ? 'Complete' : 'Incomplete' }}<br>
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
    <b>Aether Trials:</b> {{ $character->basic_aether ? 'Basic Completed' : 'Incomplete' }}<br>
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
    <b>Combat Class:</b> {!! $character->class_id ? $character->class->displayName : 'None' !!}<br>
    <br>
    
    @if(count($character->pets))
        <b>Pets:</b>
        <div class="text-center row">
        @foreach($character->pets as $userPet)
            <div class="ml-3 mr-3">
                @if($userPet->pet->imageurl)
                <img src="{{ $userPet->pet->VariantImage($userPet->variant_id) }}" data-toggle="tooltip" title="{{ $userPet->pet->name }}" style="max-width: 75px;"/>
                @else {!!$userPet->pet->displayName !!}
                @endif
                <br>
                <span class="text-light badge badge-dark" style="font-size:95%;">{!! $userPet->pet_name !!}</span>
            </div>
        @endforeach
        </div>
        <br>
    @endif

    @if(count($character->gear))
        <b>Gear:</b>
        <div class="text-center row">
        @foreach($character->gear as $gear)
            <div class="ml-3 mr-3">
                @if($gear->has_image)
                <img src="{{ $gear->imageUrl }}" data-toggle="tooltip" title="{{ $gear->gear->name }}" style="max-width: 75px;"/>
                @elseif($gear->gear->imageurl)
                <img src="{{ $gear->gear->imageUrl }}" data-toggle="tooltip" title="{{ $gear->gear->name }}" style="max-width: 75px;"/>
                @else {!!$gear->gear->displayName !!}
                @endif
            </div>
        @endforeach
        </div>
        <br>
    @endif

    @if(count($character->weapons))
        <b>Weapons:</b>
        <div class="text-center row">
        @foreach($character->weapons as $weapon)
            <div class="ml-3 mr-3">
                @if($weapon->has_image)
                <img src="{{ $weapon->imageUrl }}" data-toggle="tooltip" title="{{ $weapon->weapon->name }}" style="max-width: 75px;"/>
                @elseif($weapon->weapon->imageurl)
                <img src="{{ $weapon->weapon->imageUrl }}" data-toggle="tooltip" title="{{ $weapon->weapon->name }}" style="max-width: 75px;"/>
                @else {!!$weapon->weapon->displayName !!}
                @endif
            </div>
        @endforeach
        </div>
        <br>
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

    
</div>