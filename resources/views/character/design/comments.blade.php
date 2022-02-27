@extends('character.design.layout')

@section('design-title') Design Approval Request (#{{ $request->id }}) :: Comments @endsection

@section('design-content')
{!! breadcrumbs(['Design Approvals' => 'designs', 'Request (#' . $request->id . ')' => 'designs/' . $request->id, 'Comments' => 'designs/' . $request->id . '/comments']) !!}

@include('character.design._header', ['request' => $request])

<h2>Comments</h2>

@if($request->status == 'Draft' && $request->user_id == Auth::user()->id)
    <p>The comment section is NOT optional! Please refer to the design registration guide under the activity drop down for the forms necessary to submit your design! Not including this form will cause your design to be sent back! </p>
    {!! Form::open(['url' => 'designs/'.$request->id.'/comments']) !!}
        <div class="form-group">
            {!! Form::label('Comments (Optional)') !!}
            {!! Form::textarea('comments', $request->comments, ['class' => 'form-control']) !!}
        </div>
        <div class="text-right">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@else
    <div class="card">
        <div class="card-body">
            {!! nl2br(htmlentities($request->comments)) !!}
        </div>
    </div>
@endif

@endsection