@extends('layouts.app')

@section('title') Comments @endsection

@section('profile-title') Comment  @endsection

@section('content')

<h1>
    Comments on
    @if($comment->commentable_type == 'App\Models\User\UserProfile') {!! $comment->commentable->user->displayName !!}
    @elseif($comment->commentable_type == 'App\Models\Forum') {!! $comment->topComment->displayName !!} in {!! $comment->commentable->displayName !!}
    @elseif($comment->commentable_type == 'App\Models\Submission\Submission') <a href="{{ $comment->commentable->viewUrl }}">Submission {!! $comment->commentable->id !!}</a>
    @elseif($comment->commentable_type == 'App\Models\Character\CharacterDesignUpdate') <a href="{{ $comment->commentable->url }}">Design Request {!! $comment->commentable->id !!}</a>
    @else {!! $comment->commentable->displayName !!}
    @endif
</h1>
<h5>
    @if(isset($comment->child_id))
        <a href="{{ url('comment/').'/'. $comment->child_id }}" class="btn btn-secondary btn-sm mr-2">See Parent</a>
        <a href="{{ url('comment/').'/'. $comment->topComment->id }}" class="btn btn-secondary btn-sm mr-2">Go To Top Comment</a>
    @endif
</h5>

<hr>
<br>
<div class="d-flex mw-100 row mx-0" style="overflow:hidden;">
    @include('comments._perma_comments', ['comment' => $comment, 'limit' => 0, 'depth' => 0])
</div>


@endsection
