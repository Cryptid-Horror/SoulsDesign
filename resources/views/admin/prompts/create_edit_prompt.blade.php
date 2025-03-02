@extends('admin.layout')

@section('admin-title') Prompts @endsection

@section('admin-content')
{!! breadcrumbs(['Admin Panel' => 'admin', 'Prompts' => 'admin/data/prompts', ($prompt->id ? 'Edit' : 'Create').' Prompt' => $prompt->id ? 'admin/data/prompts/edit/'.$prompt->id : 'admin/data/prompts/create']) !!}

<h1>{{ $prompt->id ? 'Edit' : 'Create' }} Prompt
    @if($prompt->id)
        <a href="#" class="btn btn-danger float-right delete-prompt-button">Delete Prompt</a>
    @endif
</h1>

{!! Form::open(['url' => $prompt->id ? 'admin/data/prompts/edit/'.$prompt->id : 'admin/data/prompts/create', 'files' => true]) !!}

<h3>Basic Information</h3>

<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::label('Name') !!}
            {!! Form::text('name', $prompt->name, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md">
        <div class="form-group">
            {!! Form::label('Prefix (Optional)') !!} {!! add_help('This is used to label submissions associated with this prompt in the gallery.') !!}
            {!! Form::text('prefix', $prompt->prefix, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('World Page Image (Optional)') !!} {!! add_help('This image is used only on the world information pages.') !!}
    <div>{!! Form::file('image') !!}</div>
    <div class="text-muted">Recommended size: 100px x 100px</div>
    @if($prompt->has_image)
        <div class="form-check">
            {!! Form::checkbox('remove_image', 1, false, ['class' => 'form-check-input']) !!}
            {!! Form::label('remove_image', 'Remove current image', ['class' => 'form-check-label']) !!}
        </div>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Prompt Category (Optional)') !!}
    {!! Form::select('prompt_category_id', $categories, $prompt->prompt_category_id, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Summary (Optional)') !!} {!! add_help('This is a short blurb that shows up on the consolidated prompts page. HTML cannot be used here.') !!}
    {!! Form::text('summary', $prompt->summary, ['class' => 'form-control', 'maxLength' => 250]) !!}
</div>

<div class="form-group">
    {!! Form::label('Description (Optional)') !!} {!! add_help('This is a full description of the prompt that shows up on the full prompt page.') !!}
    {!! Form::textarea('description', $prompt->description, ['class' => 'form-control wysiwyg']) !!}
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('start_at', 'Start Time (Optional)') !!} {!! add_help('Prompts cannot be submitted to the queue before the starting time.') !!}
            {!! Form::text('start_at', $prompt->start_at, ['class' => 'form-control datepicker']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('end_at', 'End Time (Optional)') !!} {!! add_help('Prompts cannot be submitted to the queue after the ending time.') !!}
            {!! Form::text('end_at', $prompt->end_at, ['class' => 'form-control datepicker']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::checkbox('hide_before_start', 1, $prompt->id ? $prompt->hide_before_start : 0, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
            {!! Form::label('hide_before_start', 'Hide Before Start Time', ['class' => 'form-check-label ml-3']) !!} {!! add_help('If hidden, the prompt will not be shown on the prompt list before the starting time is reached. A starting time needs to be set.') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::checkbox('hide_after_end', 1, $prompt->id ? $prompt->hide_after_end : 0, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
            {!! Form::label('hide_after_end', 'Hide After End Time', ['class' => 'form-check-label ml-3']) !!} {!! add_help('If hidden, the prompt will not be shown on the prompt list after the ending time is reached. An end time needs to be set.') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::checkbox('is_active', 1, $prompt->id ? $prompt->is_active : 1, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
            {!! Form::label('is_active', 'Is Active', ['class' => 'form-check-label ml-3']) !!} {!! add_help('Prompts that are not active will be hidden from the prompt list. The start/end time hide settings override this setting, i.e. if this is set to active, it will still be hidden outside of the start/end times.') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::checkbox('staff_only', 1, $prompt->id ? $prompt->staff_only : 0, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
            {!! Form::label('staff_only', 'Staff Only', ['class' => 'form-check-label ml-3']) !!} {!! add_help('If this is set, the prompt will only be visible to staff, and only they will be able to submit to it.') !!}
        </div>
    </div>
</div>


<h3>Level Rewards (Optional)</h3>
<p>Leave the following forms blank if you want no reward</p>
<div class="form-group">
    <p>User Rewards</p>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('user_exp', 'User Exp Reward', ['class' => 'form-control-label ml-3']) !!}
                {!! Form::number('user_exp', $prompt->expreward ? $prompt->expreward->user_exp : null, ['class' => 'form-control',]) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('user_points', 'User Stat Point Reward', ['class' => 'form-control-label ml-3']) !!}
                {!! Form::number('user_points', $prompt->expreward ? $prompt->expreward->user_points : null, ['class' => 'form-control',]) !!}
            </div>
        </div>
    </div>
    <p>Character Rewards</p>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('chara_exp', 'Character Exp Reward', ['class' => 'form-control-label ml-3']) !!}
                {!! Form::number('chara_exp', $prompt->expreward ? $prompt->expreward->chara_exp : null, ['class' => 'form-control',]) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('chara_points', 'Character Stat Point Reward', ['class' => 'form-control-label ml-3']) !!}
                {!! Form::number('chara_points', $prompt->expreward ? $prompt->expreward->chara_points : null, ['class' => 'form-control',]) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        {!! Form::checkbox('level_check', 1, $prompt->level_req ? 1 : 0, ['class' => 'is-level-class form-check-input', 'data-toggle' => 'toggle']) !!}
        {!! Form::label('level_check', 'Should this prompt have a level requirement?', ['class' => 'form-check-label ml-3']) !!}
    </div>
    <div class="level-form-group" style="display: none">
        {!! Form::number('level_req', $prompt->level_req ? $prompt->level_req : 1, ['class' => 'form-control mb-1', 'min' => 1]) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('Hide Submissions (Optional)') !!} {!! add_help('Hide submissions to this prompt until the prompt ends, or forever. <strong>Hiding until the prompt ends requires a set end time.</strong>') !!}
    {!! Form::select('hide_submissions', [0 => 'Submissions Visible After Approval', 1 => 'Hide Submissions Until Prompt Ends', 2 => 'Hide Submissions Always'], $prompt->hide_submissions, ['class' => 'form-control']) !!}
</div>

<h3>Submission Limits</h3>
<p>Limit the number of times a user can submit. Leave blank to allow endless submissions.</p>
<p>Set a number into number of submissions. This will be applied for all time if you leave period blank, or per time period (ex: once a month, twice a week) if selected.</p>
<p>If you turn 'per character' on, then the number of submissions multiplies per character (ex: if you can submit twice a month per character and you own three characters, that's 6 submissions) HOWEVER it will not keep track of which characters are being submitted due to conflicts arising in character cameos. A user will be able to submit those full 6 times with just one character...!</p>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('limit', 'Number of Submissions (Optional)') !!} {!! add_help('Enter a number to limit how many times a user can submit. Leave blank to allow endless submissions.') !!}
            {!! Form::text('limit', $prompt->limit, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('limit_period', 'Limit Period') !!} {!! add_help('The time period that the limit is set for.') !!}
            {!! Form::select('limit_period', $limit_periods, $prompt->limit_period, ['class' => 'form-control', 'data-name' => 'limit_period']) !!}
        </div>
    </div>
</div>
<div class="form-group">
            {!! Form::checkbox('limit_character', 1, $prompt->limit_character, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
            {!! Form::label('limit_character', 'Per Character', ['class' => 'form-check-label ml-3']) !!} {!! add_help('If turned on, they can submit once per character they own on the masterlist.') !!}
        </div>


<h3>Rewards</h3>
<p>Rewards are credited on a per-user basis. Mods are able to modify the specific rewards granted at approval time.</p>
<p>You can add loot tables containing any kind of currencies (both user- and character-attached), but be sure to keep track of which are being distributed! Character-only currencies cannot be given to users.</p>
@include('widgets._loot_select', ['loots' => $prompt->rewards, 'showLootTables' => true, 'showRaffles' => true, 'showRecipes' => true])
<hr class="w-70">
<h3>Skill Rewards</h3>
<p>Skills are rewarded to focus characters</p>
<div class="form-group">
    <div id="skillList">
        @foreach($prompt->skills as $skill)
            <div class="d-flex mb-2">
                {!! Form::select('skill_id[]', $skills, $skill->skill_id, ['class' => 'form-control mr-2 skill-select original', 'placeholder' => 'Select Skill']) !!}
                {!! Form::text('skill_quantity[]', $skill->quantity, ['class' => 'form-control mr-2', 'placeholder' => 'Amount of level']) !!}
                <a href="#" class="remove-skill btn btn-danger mb-2">×</a>
            </div>
        @endforeach
    </div>
    <div><a href="#" class="btn btn-primary" id="add-skill">Add Skill Reward</a></div>
</div>

<div class="text-right">
    {!! Form::submit($prompt->id ? 'Edit' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

<div class="skill-row hide mb-2">
    {!! Form::select('skill_id[]', $skills, null, ['class' => 'form-control mr-2 skill-select', 'placeholder' => 'Select Skill']) !!}
    {!! Form::text('skill_quantity[]', null, ['class' => 'form-control mr-2', 'placeholder' => 'Amount of level']) !!}
    <a href="#" class="remove-skill btn btn-danger mb-2">×</a>
</div>

@include('widgets._loot_select_row', ['items' => $items, 'currencies' => $currencies, 'pets' => $pets, 'gears' => $gears, 'weapons' => $weapons, 'tables' => $tables, 'raffles' => $raffles, 'recipes' => $recipes, 'showLootTables' => true, 'showRaffles' => true, 'showRecipes' => true])

@if($prompt->id)
    <h3>Preview</h3>
    <div class="card mb-3">
        <div class="card-body">
            @include('prompts._prompt_entry', ['prompt' => $prompt])
        </div>
    </div>
@endif

@endsection

@section('scripts')
@parent
@include('js._loot_js', ['showLootTables' => true, 'showRaffles' => true, 'showRecipes' => true])
<script>
$( document ).ready(function() {

    $('.original.skill-select').selectize();
    $('#add-skill').on('click', function(e) {
        e.preventDefault();
        addSkillRow();
    });
    $('.remove-skill').on('click', function(e) {
        e.preventDefault();
        removeSkillRow($(this));
    })
    function addSkillRow() {
        var $clone = $('.skill-row').clone();
        $('#skillList').append($clone);
        $clone.removeClass('hide skill-row');
        $clone.addClass('d-flex');
        $clone.find('.remove-skill').on('click', function(e) {
            e.preventDefault();
            removeSkillRow($(this));
        })
        $clone.find('.skill-select').selectize();
    }
    function removeSkillRow($trigger) {
        $trigger.parent().remove();
    }

    $('.delete-prompt-button').on('click', function(e) {
        e.preventDefault();
        loadModal("{{ url('admin/data/prompts/delete') }}/{{ $prompt->id }}", 'Delete Prompt');
    });

    $( ".datepicker" ).datetimepicker({
        dateFormat: "yy-mm-dd",
        timeFormat: 'HH:mm:ss',
    });
    $('.is-level-class').change(function(e){
        console.log(this.checked)
        $('.level-form-group').css('display',this.checked ? 'block' : 'none')
    })

    $('.level-form-group').css('display',$('.is-level-class').prop('checked') ? 'block' : 'none')
});

</script>
@endsection
