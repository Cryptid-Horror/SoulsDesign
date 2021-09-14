@extends('character.layout', ['isMyo' => $character->is_myo_slot])

@section('profile-title') Editing {{ $character->fullName }}'s Profile @endsection

@section('meta-img') {{ $character->image->thumbnailUrl }} @endsection

@section('profile-content')
@if($character->is_myo_slot)
{!! breadcrumbs(['Registered Dragon Slot Masterlist' => 'myos', $character->fullName => $character->url, 'Editing Profile' => $character->url . '/profile/edit']) !!}
@else
{!! breadcrumbs([($character->category->masterlist_sub_id ? $character->category->sublist->name.' Masterlist' : 'Character masterlist') => ($character->category->masterlist_sub_id ? 'sublist/'.$character->category->sublist->key : 'masterlist' ), $character->fullName => $character->url, 'Editing Profile' => $character->url . '/profile/edit']) !!}
@endif

@include('character._header', ['character' => $character])

@if($character->user_id != Auth::user()->id)
    <div class="alert alert-warning">
        You are editing this character as a staff member.
    </div>
@endif

{!! Form::open(['url' => $character->url . '/profile/edit']) !!}
<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $character->name, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title_name', 'Display Name') !!} {!! add_help('Optional - used for setting the name displayed in links to the character; can be different from name') !!}
    {!! Form::text('title_name', $character->title_name, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nicknames', 'Nickname(s)') !!}
    {!! Form::text('nicknames', $character->nicknames, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('gender_pronouns', 'Gender/Pronouns') !!}
    {!! Form::text('gender_pronouns', $character->gender_pronouns, ['class' => 'form-control']) !!}
</div>
@if(Config::get('lorekeeper.extensions.character_TH_profile_link'))
    <div class="form-group">
        {!! Form::label('link', 'Profile Link') !!}
        {!! Form::text('link', $character->profile->link, ['class' => 'form-control']) !!}
    </div>
@endif
{!! Form::label('custom_values', "Custom Values") !!}
<div id="customValues">
    @foreach ($character->profile->custom_values as $value)
        <div class="form-row">
            <div class="col-2 col-md-1 mb-2">
                <span class="btn btn-link drag-custom-value-row w-100"><i class="fas fa-arrows-alt-v"></i></span>
            </div>
            <div class="col-5 col-md-3 mb-2">
                {!! Form::text('custom_values_group[]', $value->group, ['class' => 'form-control', 'maxLength' => 50, 'placeholder' => "Group (Optional)"]) !!}
            </div>
            <div class="col-5 col-md-3 mb-2">
                {!! Form::text('custom_values_name[]', $value->name, ['class' => 'form-control', 'maxLength' => 50, 'placeholder' => "Title:"]) !!}
            </div>
            <div class="col-10 col-md-4 mb-3">
                {!! Form::text('custom_values_data[]', $value->data_parsed, ['class' => 'form-control', 'maxLength' => 150, 'placeholder' => "Custom Value"]) !!}
            </div>
            <div class="col-2 col-md-1 mb-3">
                <button class="btn btn-danger delete-custom-value-row w-100" type="button">x</button>
            </div>
        </div>
    @endforeach
</div>
<a href="#" class="add-custom-value-row btn btn-primary mb-3">Add Custom Value</a>

@if(!$character->is_myo_slot && ($char_enabled == 2 || (Auth::user()->isStaff && $char_enabled == 3)))
@if(Auth::user()->isStaff && $char_enabled == 3)
    <div class="alert alert-warning">You can edit this because you are a staff member. Normal users cannot edit their character locations freely.</div>
@endif
<div class="form-group">
    {!! Form::label('location', 'Location') !!}
    {!! Form::select('location', [0=>'Choose a Location'] + $locations, isset($character->home_id) ? $character->home_id : 0, ['class' => 'form-control selectize']) !!}
</div>
@endif

@if(!$character->is_myo_slot && ($char_faction_enabled == 2 || (Auth::user()->isStaff && $char_faction_enabled == 3)))
@if(Auth::user()->isStaff && $char_faction_enabled == 3)
    <div class="alert alert-warning">You can edit this because you are a staff member. Normal users cannot edit their character factions freely.</div>
@endif
<p>Please note that changing this character's faction will remove them from any special ranks and reset their faction standing!</p>
<div class="form-group row">
    <label class="col-md-1 col-form-label">Faction</label>
    <div class="col-md">
    {!! Form::select('faction', [0=>'Choose a Faction'] + $factions, isset($character->faction_id) ? $character->faction_id : 0, ['class' => 'form-control selectize']) !!}
    </div>
</div>
@endif

<div class="form-group">
    {!! Form::label('text', 'Profile Content') !!}
    {!! Form::textarea('text', $character->profile->text, ['class' => 'wysiwyg form-control']) !!}
</div>

@if($character->user_id == Auth::user()->id)
    @if(!$character->is_myo_slot)
        <div class="row">
            <div class="col-md form-group">
                {!! Form::label('is_gift_art_allowed', 'Allow Gift Art', ['class' => 'form-check-label mb-3']) !!} {!! add_help('This will place the character on the list of characters that can be drawn for gift art. This does not have any other functionality, but allow users looking for characters to draw to find your character easily.') !!}
                {!! Form::select('is_gift_art_allowed', [0 => 'No', 1 => 'Yes', 2 => 'Ask First'], $character->is_gift_art_allowed, ['class' => 'form-control user-select']) !!}
            </div>
            <div class="col-md form-group">
                {!! Form::label('is_gift_writing_allowed', 'Allow Gift Writing', ['class' => 'form-check-label mb-3']) !!} {!! add_help('This will place the character on the list of characters that can be written about for gift writing. This does not have any other functionality, but allow users looking for characters to write about to find your character easily.') !!}
                {!! Form::select('is_gift_writing_allowed', [0 => 'No', 1 => 'Yes', 2 => 'Ask First'], $character->is_gift_writing_allowed, ['class' => 'form-control user-select']) !!}
            </div>
        </div>
    @endif
    @if($character->is_tradeable ||  $character->is_sellable)
        <div class="form-group disabled">
            {!! Form::checkbox('is_trading', 1, $character->is_trading, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
            {!! Form::label('is_trading', 'Up For Trade', ['class' => 'form-check-label ml-3']) !!} {!! add_help('This will place the character on the list of characters that are currently up for trade. This does not have any other functionality, but allow users looking for trades to find your character easily.') !!}
        </div>
    @else
        <div class="alert alert-secondary">Cannot be set to "Up for Trade" as character cannot be traded or sold.</div>
    @endif
@endif
@if(Auth::check() && Auth::user()->hasPower('manage_characters'))
    <hr>
    <h3>[Admin] Edit Profile</h3>
    @if(!$isMyo)
        <div class="form-group">
            {!! Form::label('Adornments') !!} {!! add_help('This section is for specifying when items have been used in the design. Simple html is allowed (e.g. adding a link).') !!}
            <div id="adornmentsList">
                @if($character->image->adornments)
                    @foreach(explode(',', $character->image->adornments) as $adornment)
                        <div class="d-flex mb-2">
                            {!! Form::text('adornments[]', $adornment, ['class' => 'form-control mr-2', 'placeholder' => 'Enter an adornment']) !!}
                            <a href="#" class="remove-adornment btn btn-danger mb-2">×</a>
                        </div>
                    @endforeach
                @endif
            </div>
            <div><a href="#" class="btn btn-primary" id="addAdornments">Add Adornment</a></div>
        </div>
    @endif

    <h3>Traits</h3>
    <div class="form-group">
        {!! Form::label('Species') !!} @if($isMyo) {!! add_help('This will lock the slot into a particular species. Leave it blank if you would like to give the user a choice.') !!} @endif
        {!! Form::select('species_id', $specieses, $character->image->species_id, ['class' => 'form-control', 'id' => 'species']) !!}
    </div>

    <div class="form-group">
        {!! Form::checkbox('has_grand_title', 1, $character->has_grand_title, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('has_grand_title', 'Has Grand Title', ['class' => 'form-check-label ml-3']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Subtype (Optional)') !!} @if($isMyo) {!! add_help('This will lock the slot into a particular subtype. Leave it blank if you would like to give the user a choice, or not select a subtype. The subtype must match the species selected above, and if no species is specified, the subtype will not be applied.') !!} @endif
        {!! Form::select('subtype_id', $subtypes, $character->image->subtype_id, ['class' => 'form-control', 'id' => 'subtype']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Character Rarity') !!} @if($isMyo) {!! add_help('This will lock the slot into a particular rarity. Leave it blank if you would like to give the user more choices.') !!} @endif
        {!! Form::select('rarity_id', $rarities, $character->image->rarity_id, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Temperament') !!}
        {!! Form::select('temperament', ['Vigilant' => 'Vigilant', 'Aggressive' => 'Aggressive', 'Calm' => 'Calm', 'Sinister' => 'Sinister'], $character->temperament, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Diet') !!}
        {!! Form::select('diet', ['Carnivore' => 'Carnivore', 'Herbivore' => 'Herbivore', 'Piscivore' => 'Piscivore', 'Omnivore' => 'Omnivore'], $character->diet, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Traits') !!} @if($isMyo) {!! add_help('These traits will be listed as required traits for the slot. The user will still be able to add on more traits, but not be able to remove these. This is allowed to conflict with the rarity above; you may add traits above the character\'s specified rarity.') !!} @endif
        <div id="featureList">
            @foreach($character->image->features as $feature)
                <div class="d-flex mb-2">
                    {!! Form::select('feature_id[]', $features, $feature->feature_id, ['class' => 'form-control mr-2 initial feature-select original', 'placeholder' => 'Select Trait']) !!}
                    {!! Form::text('feature_data[]', $feature->data, ['class' => 'form-control mr-2', 'placeholder' => 'Extra Info (Optional)']) !!}
                    <a href="#" class="remove-feature btn btn-danger mb-2">×</a>
                </div>
            @endforeach
        </div>
        <div><a href="#" class="btn btn-primary" id="add-feature">Add Trait</a></div>
        <div class="feature-row hide mb-2">
            {!! Form::select('feature_id[]', $features, null, ['class' => 'form-control mr-2 feature-select', 'placeholder' => 'Select Trait']) !!}
            {!! Form::text('feature_data[]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Extra Info (Optional)']) !!}
            <a href="#" class="remove-feature btn btn-danger mb-2">×</a>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Skills') !!}
        <div id="skillsList">
            @if($character->skills)
                @foreach(explode(',', $character->skills) as $skill)
                    <div class="d-flex mb-2">
                        {!! Form::text('skills[]', $skill, ['class' => 'form-control mr-2', 'placeholder' => 'Enter an skill']) !!}
                        <a href="#" class="remove-skill btn btn-danger mb-2">×</a>
                    </div>
                @endforeach
            @endif
        </div>
        <div><a href="#" class="btn btn-primary" id="addSkills">Add Skill</a></div>
    </div>
    
    <h3>Genetics</h3>
    <div class="form-group">
        {!! Form::label('Sex') !!}
        {!! Form::select('sex', ['M' => 'Male', 'F' => 'Female'], $character->sex ?? 'M', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('genotype', 'Genotype', ['class' => 'w-25 mb-0']) !!}
        {!! Form::text('genotype', $character->image->genotype, ['class' => 'form-control', 'placeholder' => 'Enter genotype']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phenotype', 'Phenotype', ['class' => 'w-25 mb-0']) !!}
        {!! Form::text('phenotype', $character->image->phenotype, ['class' => 'form-control', 'placeholder' => 'Enter phenotype']) !!}
    </div>
    
    @if(!$isMyo)
        <div class="form-group">
            {!! Form::label('free_markings', 'Free Markings', ['class' => 'w-25 mb-0']) !!}
            {!! Form::text('free_markings', $character->image->free_markings, ['class' => 'form-control', 'placeholder' => 'Enter free markings used, if any']) !!}
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('Health Status') !!}
        {!! Form::text('health_status', $character->health_status, ['class' => 'form-control', 'placeholder' => 'Enter health status (Healthy/Inbred/Blind etc.)']) !!}
    </div>


    <h3>Rites and Activities</h3>

    <div class="form-group">
        {!! Form::checkbox('ouroboros', 1, $character->ouroboros, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('ouroboros', 'Has Achieved Ouroboros Emblem', ['class' => 'form-check-label ml-3']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('Slots used') !!}
        {!! Form::text('slots_used', $character->slots_used, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Taming') !!}
        {!! Form::select('taming', [null => 'None', 'Domesticated' => 'Domesticated', 'Wild' => 'Wild', 'Aether' => 'Aether'], $character->taming, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::checkbox('basic_aether', 1, $character->basic_aether, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('basic_aether', 'Has Finished Aether Awakening', ['class' => 'form-check-label ml-3']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Low Aether Class') !!}
        {!! Form::select('low_aether', [null => 'None', 'Arcane' => 'Arcane', 'Illusionist' => 'Illusionist', 'Elementalist' => 'Elementalist', 'Healing' => 'Healing', 'Enchantment' => 'Enchantment'], $character->low_aether, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('High Aether Class') !!}
        {!! Form::select('high_aether', [null => 'None', 'Arcane' => 'Arcane', 'Illusionist' => 'Illusionist', 'Elementalist' => 'Elementalist', 'Healing' => 'Healing', 'Enchantment' => 'Enchantment'], $character->high_aether, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Arena Ranking') !!}
        {!! Form::select('arena_ranking', [null => 'None', 'Challenger' => 'Challenger', 'Warrior' => 'Warrior', 'Gladiator' => 'Gladiator', 'Champion' => 'Champion'], $character->arena_ranking, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Soul Link Type') !!}
        {!! Form::select('soul_link_type', [null => 'None', 'Dragon' => 'Dragon','Account' => 'Account', 'Companion' => 'Companion'], $character->soul_link_type, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Soul Link Target') !!}
        {!! Form::text('soul_link_target', $character->soul_link_target, ['class' => 'form-control', 'placeholder' => 'Enter the name of the target, if link type is Dragon, enter the dragon ID']) !!}
        {!! Form::text('soul_link_target_link', $character->soul_link_target_link, ['class' => 'form-control', 'placeholder' => 'Enter a link to the target']) !!}
    </div>

    {{-- Old Lineage Code
    <h3>Lineage</h3>
    <div class="alert alert-info">
        <p>You only need to enter the Sire and Dam as the system will automatically retrieve their lineage from there. In case of a custom lineage (either parent is 'Unknown' or is a legacy character), you will have to enter each ancestor manually.</p>
        Enter the character code (e.g. SB-0001) of the dragon into each box. If correctly formatted and the character currently exists, a link to the character will show up in the preview.
        Leave blank to set as 'Unknown'.
    </div>
    <div class="form-group">
        {!! Form::checkbox('use_custom_lineage', 1, $character->use_custom_lineage, ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'id' => 'useCustomLineage']) !!}
        {!! Form::label('use_custom_lineage', 'Use Custom Lineage', ['class' => 'form-check-label ml-3']) !!}
    </div>

    <div class="row">
        <div class="d-flex flex-column justify-content-around col-md-4">
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sire_slug', 'Sire:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sire_slug', $character->sire_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dam_slug', 'Dam:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dam_slug', $character->dam_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around col-md-4 custom-lineage-column hide">
            <div class="form-group d-flex align-items-center">
                {!! Form::label('ss_slug', 'SS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('ss_slug', $character->ss_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sd_slug', 'SD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sd_slug', $character->sd_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('ds_slug', 'DS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('ds_slug', $character->ds_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dd_slug', 'DD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dd_slug', $character->dd_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around col-md-4 custom-lineage-column hide">
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sss_slug', 'SSS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sss_slug', $character->sss_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('ssd_slug', 'SSD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('ssd_slug', $character->ssd_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sds_slug', 'SDS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sds_slug', $character->sds_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sdd_slug', 'SDD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sdd_slug', $character->sdd_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dss_slug', 'DSS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dss_slug', $character->dss_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dsd_slug', 'DSD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dsd_slug', $character->dsd_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dds_slug', 'DDS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dds_slug', $character->dds_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('ddd_slug', 'DDD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('ddd_slug', $character->ddd_slug, ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
        </div>
    </div>
    <h5>Preview</h5>
    <div class="card mb-3">
        <div class="card-body">
            @include('character._lineage_tree')
        </div>
    </div>
    --}}
    <h3>Other Profile Information</h3>
    <div class="form-group">
        {!! Form::checkbox('is_adopted', 1, $character->is_adopted, ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'id' => 'isAdopted']) !!}
        {!! Form::label('is_adopted', 'Is Adopted', ['class' => 'form-check-label ml-3']) !!}
    </div>

  

    {{--
    <div class="form-group">
        {!! Form::label('Rank') !!}
        {!! Form::select('rank', ['Fledgling' => 'Fledgling', 'Primal' => 'Primal', 'Ancient' => 'Ancient', 'Primordial' => 'Primordial'], $character->rank, ['class' => 'form-control']) !!}
    </div>
    --}}

  
@endif

@if($character->user_id != Auth::user()->id)
    <div class="form-group">
        {!! Form::checkbox('alert_user', 1, true, ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'data-onstyle' => 'danger']) !!}
        {!! Form::label('alert_user', 'Notify User', ['class' => 'form-check-label ml-3']) !!} {!! add_help('This will send a notification to the user that their character profile has been edited. A notification will not be sent if the character is not visible.') !!}
    </div>
@endif
<div class="text-right">
    {!! Form::submit('Edit Profile', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

<div class="adornment-row hide mb-2">
    {!! Form::text('adornments[]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Enter an adornment']) !!}
    <a href="#" class="remove-adornment btn btn-danger mb-2">×</a>
</div>
<div class="skill-row hide mb-2">
    {!! Form::text('skills[]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Enter an skill']) !!}
    <a href="#" class="remove-skill btn btn-danger mb-2">×</a>
</div>

{{-- Custom Value Row --}}
<div class="form-row hide custom-value-row">
    <div class="col-2 col-md-1 mb-2">
        <span class="btn btn-link drag-custom-value-row w-100"><i class="fas fa-arrows-alt-v"></i></span>
    </div>
    <div class="col-5 col-md-3 mb-2">
        {!! Form::text('custom_values_group[]', null, ['class' => 'form-control', 'maxLength' => 50, 'placeholder' => "Group (Optional)"]) !!}
    </div>
    <div class="col-5 col-md-3 mb-2">
        {!! Form::text('custom_values_name[]', null, ['class' => 'form-control', 'maxLength' => 50, 'placeholder' => "Title:"]) !!}
    </div>
    <div class="col-10 col-md-4 mb-3">
        {!! Form::text('custom_values_data[]', null, ['class' => 'form-control', 'maxLength' => 150, 'placeholder' => "Custom Value"]) !!}
    </div>
    <div class="col-2 col-md-1 mb-3">
        <button class="btn btn-danger delete-custom-value-row w-100" type="button">x</button>
    </div>
</div>

@endsection

@section('scripts')
    @parent
    @include('widgets._character_create_options_js')
    @include('widgets._image_upload_js')
    <script>
        $(document).ready(function(){
            $values = $("#customValues");
            $values.sortable({ handle: ".drag-custom-value-row" });
            $values.find(".delete-custom-value-row").each(function(i) {
                deleteRowOnClick($(this));
            });
            $(".add-custom-value-row").on('click', function(e) {
                e.preventDefault();
                $clone = $(".custom-value-row").clone();
                $clone.removeClass("hide custom-value-row");
                deleteRowOnClick($clone.find('.delete-custom-value-row'));
                $values.append($clone);
            });
            function deleteRowOnClick(node) {
                node.on('click', function(e) {
                    e.preventDefault();
                    $(this).parent().parent().remove();
                });
            }
        });
    </script>
@endsection {{-- end scripts --}}
