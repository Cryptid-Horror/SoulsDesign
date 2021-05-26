@extends('layouts.app')

@section('title') Dragon Masterlist @endsection

@section('sidebar')
    @include('browse._sidebar')
@endsection

@section('content')
{!! breadcrumbs(['Dragon Masterlist' => 'masterlist']) !!}
<h1>Dragon Masterlist</h1>

@include('browse._masterlist_content', ['characters' => $characters])

@endsection

@section('scripts')
@include('browse._masterlist_js')
@endsection