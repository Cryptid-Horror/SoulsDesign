@extends('admin.layout')

@section('admin-title') Create {{ $isMyo ? 'Registered Dragon Slot' : 'Character' }} @endsection

@section('admin-content')
{!! breadcrumbs(['Admin Panel' => 'admin', 'Create '.($isMyo ? 'Registered Dragon Slot' : 'Character') => 'admin/masterlist/create-'.($isMyo ? 'myo' : 'character')]) !!}

<h1>Create {{ $isMyo ? 'Registered Dragon Slot' : 'Character' }}</h1>

@if(!$isMyo && !count($categories))

    <div class="alert alert-danger">Creating characters requires at least one <a href="{{ url('admin/data/character-categories') }}">character category</a> to be created first, as character categories are used to generate the character code.</div>

@else

    {!! Form::open(['url' => 'admin/masterlist/create-'.($isMyo ? 'myo' : 'character'), 'files' => true]) !!}

    <h3>Basic Information</h3>

    @if($isMyo)
        <div class="form-group">
            {!! Form::label('Name') !!} {!! add_help('Enter a descriptive name for the type of character this slot can create, e.g. Rare Registered Dragon Slot. This will be listed on the Registered Dragon slot masterlist.') !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
        </div>
    @endif

    <div class="alert alert-info">
        Fill in either of the owner fields - you can select a user from the list if they have registered for the site, or enter the URL of their off-site profile, such as their deviantArt profile, if they don't have an account. If the owner registers an account later and links their account, {{ $isMyo ? 'Registered Dragon slot' : 'character' }}s linked to that account's profile will automatically be credited to their site account. If both fields are filled, the URL field will be ignored.
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('Owner') !!}
                {!! Form::select('user_id', $userOptions, old('user_id'), ['class' => 'form-control', 'placeholder' => 'Select User', 'id' => 'userSelect']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('Owner URL (Optional)') !!}
                {!! Form::text('owner_url', old('owner_url'), ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    @if(!$isMyo)
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Character Category') !!}
                    <select name="character_category_id" id="category" class="form-control" placeholder="Select Category">
                        <option value="" data-code="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" data-code="{{ $category->code }}" {{ old('character_category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }} ({{ $category->code }})</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Number') !!} {!! add_help('This number helps to identify the character and should preferably be unique either within the category, or among all characters.') !!}
                    <div class="d-flex">
                        {!! Form::text('number', old('number'), ['class' => 'form-control mr-2', 'id' => 'number']) !!}
                        <a href="#" id="pull-number" class="btn btn-primary" data-toggle="tooltip" title="This will find the highest number assigned to a character currently and add 1 to it. It can be adjusted to pull the highest number in the category or the highest overall number - this setting is in the code.">Pull Next Number</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('Character Code') !!} {!! add_help('This code identifies the character itself. You don\'t have to use the automatically generated code, but this must be unique among all characters (as it\'s used to generate the character\'s page URL).') !!}
            {!! Form::text('slug', old('slug'), ['class' => 'form-control', 'id' => 'code']) !!}
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('Description (Optional)') !!}
        @if($isMyo)
            {!! add_help('This section is for making additional notes about the Registered Dragon slot. If there are restrictions for the character that can be created by this slot that cannot be expressed with the options below, use this section to describe them.') !!}
        @else
            {!! add_help('This section is for making additional notes about the character and is separate from the character\'s profile (this is not editable by the user).') !!}
        @endif
        {!! Form::textarea('description', old('description'), ['class' => 'form-control wysiwyg']) !!}
    </div>

    <div class="form-group">
        {!! Form::checkbox('is_visible', 1, old('is_visible'), ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('is_visible', 'Is Visible', ['class' => 'form-check-label ml-3']) !!} {!! add_help('Turn this off to hide the '.($isMyo ? 'Registered Dragon slot' : 'character').'. Only mods with the Manage Masterlist power (that\'s you!) can view it - the owner will also not be able to see the '.($isMyo ? 'Registered Dragon slot' : 'character').'\'s page.') !!}
    </div>

    <h3>Transfer Information</h3>

    <div class="alert alert-info">
        These are displayed on the {{ $isMyo ? 'Registered Dragon slot' : 'character' }}'s profile, but don't have any effect on site functionality except for the following: 
        <ul>
            <li>If all switches are off, the {{ $isMyo ? 'Registered Dragon slot' : 'character' }} cannot be transferred by the user (directly or through trades).</li>
            <li>If a transfer cooldown is set, the {{ $isMyo ? 'Registered Dragon slot' : 'character' }} also cannot be transferred by the user (directly or through trades) until the cooldown is up.</li>
        </ul>
    </div>
    <div class="form-group">
        {!! Form::checkbox('is_giftable', 1, old('is_giftable'), ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('is_giftable', 'Is Giftable', ['class' => 'form-check-label ml-3']) !!}
    </div>
    <div class="form-group">
        {!! Form::checkbox('is_tradeable', 1, old('is_tradeable'), ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('is_tradeable', 'Is Tradeable', ['class' => 'form-check-label ml-3']) !!}
    </div>
    <div class="form-group">
        {!! Form::checkbox('is_sellable', 1, old('is_sellable'), ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'id' => 'resellable']) !!}
        {!! Form::label('is_sellable', 'Is Resellable', ['class' => 'form-check-label ml-3']) !!}
    </div>
    <div class="card mb-3" id="resellOptions">
        <div class="card-body">
            {!! Form::label('Resale Value') !!} {!! add_help('This value is publicly displayed on the '.($isMyo ? 'Registered Dragon slot' : 'character').'\'s page.') !!}
            {!! Form::text('sale_value', old('sale_value'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('On Transfer Cooldown Until (Optional)') !!}
        {!! Form::text('transferrable_at', old('transferrable_at'), ['class' => 'form-control', 'id' => 'datepicker']) !!}
    </div>

    <h3>Image Upload</h3>

    <div class="form-group">
        {!! Form::label('Image') !!}
        @if($isMyo)
            {!! add_help('This is a cover image for the Genotype slot. If left blank, a default image will be used.') !!}
        @else
            {!! add_help('This is the full masterlist image. Note that the image is not protected in any way, so take precautions to avoid art/design theft.') !!}
        @endif
        <div>{!! Form::file('image', ['id' => 'mainImage']) !!}</div>
    </div>
@if (Config::get('lorekeeper.settings.masterlist_image_automation') === 1)
    <div class="form-group">
        {!! Form::checkbox('use_cropper', 1, 1, ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'id' => 'useCropper']) !!}
        {!! Form::label('use_cropper', 'Use Thumbnail Automation', ['class' => 'form-check-label ml-3']) !!} {!! add_help('A thumbnail is required for the upload (used for the masterlist). You can use the Thumbnail Automation, or upload a custom thumbnail.') !!}
    </div>
    <div class="card mb-3" id="thumbnailCrop">
        <div class="card-body">
            <div id="cropSelect">By using this function, the thumbnail will be automatically generated from the full image.</div>
            {!! Form::hidden('x0', 1) !!}
            {!! Form::hidden('x1', 1) !!}
            {!! Form::hidden('y0', 1) !!}
            {!! Form::hidden('y1', 1) !!}
        </div>
    </div>
@else
    <div class="form-group">
        {!! Form::checkbox('use_cropper', 1, 1, ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'id' => 'useCropper']) !!}
        {!! Form::label('use_cropper', 'Use Image Cropper', ['class' => 'form-check-label ml-3']) !!} {!! add_help('A thumbnail is required for the upload (used for the masterlist). You can use the image cropper (crop dimensions can be adjusted in the site code), or upload a custom thumbnail.') !!}
    </div>
    <div class="card mb-3" id="thumbnailCrop">
        <div class="card-body">
            <div id="cropSelect">Select an image to use the thumbnail cropper.</div>
            <img src="#" id="cropper" class="hide" />
            {!! Form::hidden('x0', null, ['id' => 'cropX0']) !!}
            {!! Form::hidden('x1', null, ['id' => 'cropX1']) !!}
            {!! Form::hidden('y0', null, ['id' => 'cropY0']) !!}
            {!! Form::hidden('y1', null, ['id' => 'cropY1']) !!}
        </div>
    </div>
@endif
    <div class="card mb-3" id="thumbnailUpload">
        <div class="card-body">
            {!! Form::label('Thumbnail Image') !!} {!! add_help('This image is shown on the masterlist page.') !!}
            <div>{!! Form::file('thumbnail') !!}</div>
            <div class="text-muted">Recommended size: {{ Config::get('lorekeeper.settings.masterlist_thumbnails.width') }}px x {{ Config::get('lorekeeper.settings.masterlist_thumbnails.height') }}px</div>
        </div>
    </div>
    <p class="alert alert-info">
        This section is for crediting the image creators. The first box is for the designer or artist's on-site username (if any). The second is for a link to the designer or artist if they don't have an account on the site.
    </p>
    <div class="form-group">
        {!! Form::label('Designer(s)') !!}
        <div id="designerList">
            <div class="mb-2 d-flex">
                {!! Form::select('designer_id[]', $userOptions, null, ['class'=> 'form-control mr-2 selectize', 'placeholder' => 'Select a Designer']) !!}
                {!! Form::text('designer_url[]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Designer URL']) !!}
                <a href="#" class="add-designer btn btn-link" data-toggle="tooltip" title="Add another designer">+</a>
            </div>
        </div>
        <div class="designer-row hide mb-2">
            {!! Form::select('designer_id[]', $userOptions, null, ['class'=> 'form-control mr-2 designer-select', 'placeholder' => 'Select a Designer']) !!}
            {!! Form::text('designer_url[]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Designer URL']) !!}
            <a href="#" class="add-designer btn btn-link" data-toggle="tooltip" title="Add another designer">+</a>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('Artist(s)') !!}
        <div id="artistList">
            <div class="mb-2 d-flex">
                {!! Form::select('artist_id[]', $userOptions, null, ['class'=> 'form-control mr-2 selectize', 'placeholder' => 'Select an Artist']) !!}
                {!! Form::text('artist_url[]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Artist URL']) !!}
                <a href="#" class="add-artist btn btn-link" data-toggle="tooltip" title="Add another artist">+</a>
            </div>
        </div>
        <div class="artist-row hide mb-2">
            {!! Form::select('artist_id[]', $userOptions, null, ['class'=> 'form-control mr-2 artist-select', 'placeholder' => 'Select an Artist']) !!}
            {!! Form::text('artist_url[]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Artist URL']) !!}
            <a href="#" class="add-artist btn btn-link mb-2" data-toggle="tooltip" title="Add another artist">+</a>
        </div>
    </div>
    @if(!$isMyo)
        <div class="form-group">
            {!! Form::label('Image Notes (Optional)') !!} {!! add_help('This section is for making additional notes about the image.') !!}
            {!! Form::textarea('image_description', old('image_description'), ['class' => 'form-control wysiwyg']) !!}
        </div>
    @endif

    <h3>Lineage</h3>

    <div class="alert alert-info">Enter a sire and dam to autogenerate ancestry or enter ancestors manually. Do not enter anything if there are no ancestors in that slot.</div>

    <?php
        // Reduce errors and repetition
        $k = [
            'sire',
            'dam',
            'sire_sire',
            'sire_sire_sire',
            'sire_sire_dam',
            'sire_dam',
            'sire_dam_sire',
            'sire_dam_dam',
            'dam_sire',
            'dam_sire_sire',
            'dam_sire_dam',
            'dam_dam',
            'dam_dam_sire',
            'dam_dam_dam'
        ];
        // Human-readable names for the things
        $j = [
            "Sire",
            "Dam",
            "Sire's Sire",
            "Sire's Sire's Sire",
            "Sire's Sire's Dam",
            "Sire's Dam",
            "Sire's Dam's Sire",
            "Sire's Dam's Dam",
            "Dam's Sire",
            "Dam's Sire's Sire",
            "Dam's Sire's Dam",
            "Dam's Dam",
            "Dam's Dam's Sire",
            "Dam's Dam's Dam",
        ];
        ?>
    <div class="row">
        <div class="col-md-6">
            @for ($i=0; $i < 14; $i++)
                <?php $em = ($i < 3 || $i == 5 || $i == 8 || $i == 11); ?>
                <div class="form-group text-center {{ $em ? 'pb-1 border-bottom' : '' }}">
                    {!! Form::label($j[$i], null, ['class' => $em ? 'font-weight-bold' : '']) !!}
                    <div class="row">
                        <div class="col-sm-6 pr-sm-1">
                            {!! Form::select($k[$i].'_id', $characterOptions, old($k[$i].'_id'), ['class' => 'form-control text-left character-select mb-1', 'placeholder' => 'None']) !!}
                        </div>
                        <div class="col-sm-6 pl-sm-1">
                            {!! Form::text($k[$i].'_name', old($k[$i].'_name'), ['class' => 'form-control mb-1']) !!}
                        </div>
                    </div>
                </div>
                @if ($i == 0)
                    </div>
                    <div class="col-md-6">
                @elseif ($i == 1)
                    </div>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="generate" name="generate_ancestors" id="generate_ancestors" checked>
                    <label class="form-check-label" for="generate_ancestors">
                        automatically fill in ancestors from the parent(s)/grandparent(s) lineages?
                    </label>
                </div>

                <h4><a href="#advanced_lineage" class="dropdown-toggle" data-toggle="collapse" data-target="#advanced_lineage" aria-expanded="false" aria-controls="advanced_lineage">
    				Advanced Lineage
    			</a></h4>

                <div class="mb-4">
                    <div id="advanced_lineage" class="row collapse mb-0">
                        <div class="col-md-6">
                @elseif ($i == 7)
                    </div>
                    <div class="col-md-6">
                @endif
            @endfor
        </div>
    </div>
    </div>

    <h3>Traits</h3>

    <div class="form-group">
        {!! Form::label('Species') !!} @if($isMyo) {!! add_help('This will lock the slot into a particular species. Leave it blank if you would like to give the user a choice.') !!} @endif
        {!! Form::select('species_id', $specieses, old('species_id'), ['class' => 'form-control', 'id' => 'species']) !!}
    </div>

    <div class="form-group">
        {!! Form::checkbox('has_grand_title', 1, 0, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('has_grand_title', 'Has Grand Title', ['class' => 'form-check-label ml-3']) !!}
    </div>

    <div class="form-group" id="subtypes">
        {!! Form::label('Subtype (Optional)') !!} @if($isMyo) {!! add_help('This will lock the slot into a particular subtype. Leave it blank if you would like to give the user a choice, or not select a subtype. The subtype must match the species selected above, and if no species is specified, the subtype will not be applied.') !!} @endif
        {!! Form::select('subtype_id', $subtypes, old('subtype_id'), ['class' => 'form-control disabled', 'id' => 'subtype']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Character Rarity') !!} @if($isMyo) {!! add_help('This will lock the slot into a particular rarity. Leave it blank if you would like to give the user more choices.') !!} @endif
        {!! Form::select('rarity_id', $rarities, old('rarity_id'), ['class' => 'form-control']) !!}
    </div>

    @if(!$isMyo)
    <div class="row no-gutters">
        <div class="col-md-6 pr-2">
            <div class="form-group">
                {!! Form::label('Character Title') !!}
                {!! Form::select('title_id', $titles, null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('Extra Info/Custom Title (Optional)') !!} {!! add_help('If \'custom title\' is selected, this will be displayed as the title. If a preexisting title is selected, it will be displayed in addition to it. The short version is only used in the case of a custom title.') !!}
                <div class="d-flex">
                    {!! Form::text('title_data[full]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Full Title']) !!}
                    @if(Settings::get('character_title_display'))
                        {!! Form::text('title_data[short]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Short Title (Optional)']) !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="form-group">
        {!! Form::label('Traits') !!} @if($isMyo) {!! add_help('These traits will be listed as required traits for the slot. The user will still be able to add on more traits, but not be able to remove these. This is allowed to conflict with the rarity above; you may add traits above the character\'s specified rarity.') !!} @endif
        <div id="featureList">
        </div>
        <div><a href="#" class="btn btn-primary" id="add-feature">Add Trait</a></div>
        <div class="feature-row hide mb-2">
            {!! Form::select('feature_id[]', $features, null, ['class' => 'form-control mr-2 feature-select', 'placeholder' => 'Select Trait']) !!}
            {!! Form::text('feature_data[]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Extra Info (Optional)']) !!}
            <a href="#" class="remove-feature btn btn-danger mb-2">×</a>
        </div>
    </div>

    <h3>Genetics</h3>
    <div class="form-group">
        {!! Form::label('Sex') !!}
        {!! Form::select('sex', ['M' => 'Male', 'F' => 'Female'], old('sex') ? old('sex') : 'm', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('genotype', 'Genotype', ['class' => 'w-25 mb-0']) !!}
        {!! Form::text('genotype', old('genotype'), ['class' => 'form-control', 'placeholder' => 'Enter genotype']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phenotype', 'Phenotype', ['class' => 'w-25 mb-0']) !!}
        {!! Form::text('phenotype', old('phenotype'), ['class' => 'form-control', 'placeholder' => 'Enter phenotype']) !!}
    </div>
    
    @if(!$isMyo)
        <div class="form-group">
            {!! Form::label('free_markings', 'Free Markings', ['class' => 'w-25 mb-0']) !!}
            {!! Form::text('free_markings', old('free_markings'), ['class' => 'form-control', 'placeholder' => 'Enter free markings used, if any']) !!}
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('Slots used') !!}
        {!! Form::text('slots_used', old('slots_used') ? old('slots_used') : 0, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Health Status') !!}
        {!! Form::text('health_status', 'Healthy', ['class' => 'form-control', 'placeholder' => 'Enter health status (Healthy/Inbred/Blind etc.)']) !!}
    </div>

    <h3>Rites and Activities</h3>

    <div class="form-group">
        {!! Form::checkbox('ouroboros', 1, 0, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('ouroboros', 'Has Achieved Ouroboros Emblem', ['class' => 'form-check-label ml-3']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Taming') !!}
        {!! Form::select('taming', [null => 'None', 'Domesticated' => 'Domesticated', 'Wild' => 'Wild', 'Aether' => 'Aether'], old('taming') ? old('taming') : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::checkbox('basic_aether', 1, 0, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('basic_aether', 'Has Finished Aether Awakening', ['class' => 'form-check-label ml-3']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Low Aether Class') !!}
        {!! Form::select('low_aether', [null => 'None', 'Arcane' => 'Arcane', 'Illusionist' => 'Illusionist', 'Elementalist' => 'Elementalist', 'Healing' => 'Healing', 'Enchantment' => 'Enchantment'], old('low_aether') ? old('low_aether') : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('High Aether Class') !!}
        {!! Form::select('high_aether', [null => 'None', 'Arcane' => 'Arcane', 'Illusionist' => 'Illusionist', 'Elementalist' => 'Elementalist', 'Healing' => 'Healing', 'Enchantment' => 'Enchantment'], old('high_aether') ? old('high_aether') : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Arena Ranking') !!}
        {!! Form::select('arena_ranking', [null => 'None'], old('arena_ranking') ? old('arena_ranking') : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Soul Link Type') !!}
        {!! Form::select('soul_link_type', [null => 'None', 'Dragon' => 'Dragon','Account' => 'Account', 'Companion' => 'Companion'], old('soul_link_type') ? old('soul_link_type') : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Soul Link Target') !!}
        {!! Form::text('soul_link_target', old('soul_link_target'), ['class' => 'form-control', 'placeholder' => 'Enter the name of the target, if link type is Dragon, enter the dragon ID']) !!}
        {!! Form::text('soul_link_target_link', old('soul_link_target_link'), ['class' => 'form-control', 'placeholder' => 'Enter a link to the target']) !!}
    </div>

    {{-- Old Lineage Code
    <h3>Lineage</h3>
    <div class="alert alert-info">
        <p>You only need to enter the Sire and Dam as the system will automatically retrieve their lineage from there. In case of a custom lineage (either parent is 'Unknown' or is a legacy character), you will have to enter each ancestor manually.</p>
        Enter the character code (e.g. SB-0001) of the dragon into each box. If correctly formatted and the character currently exists, a link to the character will show up in the preview.
        Leave blank to set as 'Unknown'.
    </div>
    <div class="form-group">
        {!! Form::checkbox('use_custom_lineage', 1, 0, ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'id' => 'useCustomLineage']) !!}
        {!! Form::label('use_custom_lineage', 'Use Custom Lineage', ['class' => 'form-check-label ml-3']) !!}
    </div>

    <div class="row">
        <div class="d-flex flex-column justify-content-around col-md-4">
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sire_slug', 'Sire:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sire_slug', old('sire_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dam_slug', 'Dam:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dam_slug', old('dam_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around col-md-4 custom-lineage-column hide">
            <div class="form-group d-flex align-items-center">
                {!! Form::label('ss_slug', 'SS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('ss_slug', old('ss_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sd_slug', 'SD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sd_slug', old('sd_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('ds_slug', 'DS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('ds_slug', old('ds_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dd_slug', 'DD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dd_slug', old('dd_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around col-md-4 custom-lineage-column hide">
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sss_slug', 'SSS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sss_slug', old('sss_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('ssd_slug', 'SSD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('ssd_slug', old('ssd_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sds_slug', 'SDS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sds_slug', old('sds_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('sdd_slug', 'SDD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('sdd_slug', old('sdd_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dss_slug', 'DSS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dss_slug', old('dss_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dsd_slug', 'DSD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dsd_slug', old('dsd_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('dds_slug', 'DDS:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('dds_slug', old('dds_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
            </div>
            <div class="form-group d-flex align-items-center">
                {!! Form::label('ddd_slug', 'DDD:', ['class' => 'w-25 mb-0']) !!}
                {!! Form::text('ddd_slug', old('ddd_slug'), ['class' => 'w-75 form-control ancestry-entry', 'placeholder' => 'Unknown']) !!}
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

    @if(!$isMyo)
        <div class="form-group">
            {!! Form::label('Name') !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('Display Name') !!} {!! add_help('Optional - used for setting the name displayed in links to the character; can be different from name.') !!}
            {!! Form::text('title_name', old('title_name'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Nickname(s)') !!}
            {!! Form::text('nicknames', old('nicknames'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Gender/Pronouns') !!}
            {!! Form::text('gender_pronouns', old('gender_pronouns'), ['class' => 'form-control']) !!}
        </div>
    @endif

    <div class="form-group">
        {!! Form::checkbox('is_adopted', 1, 0, ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'id' => 'isAdopted']) !!}
        {!! Form::label('is_adopted', 'Is Adopted', ['class' => 'form-check-label ml-3']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Temperament') !!}
        {!! Form::select('temperament', ['Vigilant' => 'Vigilant', 'Aggressive' => 'Aggressive', 'Calm' => 'Calm', 'Sinister' => 'Sinister'], old('temperament') ? old('temperament') : 'Timid', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Diet') !!}
        {!! Form::select('diet', ['Carnivore' => 'Carnivore', 'Herbivore' => 'Herbivore', 'Piscivore' => 'Piscivore', 'Omnivore' => 'Omnivore'], old('diet') ? old('diet') : 'Omnivore', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Rank') !!}
        {!! Form::select('rank', ['Fledgling' => 'Fledgling', 'Primal' => 'Primal', 'Ancient' => 'Ancient', 'Primordial' => 'Primordial'], old('rank') ? old('rank') : 'Fledgling', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Skills') !!}
        <div id="skillsList">
        </div>
        <div><a href="#" class="btn btn-primary" id="addSkills">Add Skill</a></div>
    </div>

    @if($stats)
    <h3>Stats</h3>
    <p class="alert alert-info">If you want a character to have different stats from the default, set them here. Else, leave it as default</p>
    <div class="form-group">
        @foreach($stats as $stat)
            {!! Form::label($stat->name) !!}
            {!! Form::number('stats['.$stat->id.']', $stat->base, ['class' => 'form-control m-1',]) !!}
        @endforeach
    </div>
    @endif

    <div class="text-right">
        {!! Form::submit('Create Character', ['class' => 'btn btn-primary']) !!}
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
@endif

@endsection

@section('scripts')
@parent
@include('widgets._character_create_options_js')
@include('widgets._image_upload_js')
@if(!$isMyo)
    @include('widgets._character_code_js')
@endif

<script>
    $( "#species" ).change(function() {
      var species = $('#species').val();
      var myo = '<?php echo($isMyo); ?>';
      $.ajax({
        type: "GET", url: "{{ url('admin/masterlist/check-subtype') }}?species="+species+"&myo="+myo, dataType: "text"
      }).done(function (res) { $("#subtypes").html(res); }).fail(function (jqXHR, textStatus, errorThrown) { alert("AJAX call failed: " + textStatus + ", " + errorThrown); });
    });
    $(document).ready(function()
    {
        $('.character-select').selectize();
        $('#advanced_lineage').on('click', function(e)
        {
            e.preventDefault();
        });
    });
</script>

@endsection
