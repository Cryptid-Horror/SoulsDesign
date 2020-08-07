{!! Form::open(['url' => 'character/'.$character->slug.'/decease']) !!}
    @if(!$character->user_id == Auth::user()->id && Auth::user()->hasPower('manage_characters'))
        <div class="alert alert-warning">You are currently deceasing this dragon as a staff member.</div>
    @endif
    <p>You are about to decease {!! $character->display_name !!}. They will no longer be usable in any group activities.</p> 
    <p><strong>This action cannot be undone. Are you sure?</strong></p>

    <div class="text-right">
        {!! Form::submit('Confirm Decease', ['class' => 'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}