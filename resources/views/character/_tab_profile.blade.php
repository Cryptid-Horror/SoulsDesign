<div class="ml-auto">
    <b>Name:</b> {{ $character->name ? $character->name : 'Unnamed' }}<br>
    <b>Nicknames:</b> {{ $character->nicknames ? $character->nicknames : 'N/A' }}<br>
    <b>ID:</b> {{ $character->slug }}<br>
    <b>Owner:</b> {!! $character->displayOwner !!}<br>
    
    <b>Sex:</b> {{ $character->sex == 'M' ? 'Male' : 'Female' }}<br>
    <b>Gender/Pronouns:</b> {{ $character->gender_pronouns ? $character->gender_pronouns : '-' }}<br>
    <b>Species:</b> {!! $character->image->subtype_id ? $character->image->subtype->displayName : 'Undefined' !!} {!! $character->image->species_id ? $character->image->species->displayName : 'Undefined' !!}<br>
    <b>Temperament:</b> {{ $character->temperament }}<br>
    <b>Diet:</b> {{ $character->diet ?? 'Undefined' }}<br>
    <b>{{ $character->deceased ? 'Deceased' : $character->condition }}</b><br>
    <b>Genotype:</b> {{ $character->image->genotype }}<br>
    <b>Phenotype:</b> {{ $character->image->phenotype }}<br>
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
                @break
            @case('Wild')
                <li><i>War Blood</i> - The dragon has a higher chance to deal critical damage in fights.</li>
                <li><i>Survival of the Fittest</i> - The dragon has a higher chance of finding rarer items in hunting, fishing, and foraging.</li>
                @break
            @case('Aether')
                <li><i>Answering the Call</i> - The dragon has a higher chance to succeed in the Call to Arms activity.</li>
                <li><i>Aether Bound</i> - This dragon has a higher chance of succeeding in their magic attacks in fights.</li>
                @break
        @endswitch
    </ul>
    <b>Aether Restoration:</b> {{ $character->basic_aether ? 'Basic Completed' : 'Incomplete' }}<br>
    <ul>
        <i>Low Aether Class:</i> {{ $character->low_aether ? 'Low '.$character->low_aether.' Completed' : 'Incomplete' }}<br>
        <i>High Aether Class:</i> {{ $character->high_aether ? 'High '.$character->high_aether.' Completed' : 'Incomplete' }}<br>
    </ul>
    <b>Soul Linking:</b> {{ $character->soul_link_type ? 'Completed; Linked to '.$character->soul_link_type : 'Incomplete' }} @if($character->soul_link_type)(<a href="{{ $character->soul_link_target_link }}">{{ $character->soul_link_target }}</a>)@endif<br>
    <b>Arena Ranking:</b> {{ $character->taming ? $character->taming.' Taming Complete' : 'Incomplete' }}<br>
    <br>
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
    {!! $character->profile->parsed_text ? $character->profile->parsed_text : 'N/A' !!}
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
    <b>Generation:</b> {!! $character->rarity->displayName !!}<br>
    <b>Lineage:</b><br>
    @include('character._lineage_tree', ['lineage' => $character->lineage()])
    <br>
    <b>Designed By:</b> {{ $character->image->displayDesigners }}<br>
    <b>Art By:</b> {{ $character->image->displayArtists }}<br>
</div>