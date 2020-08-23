@extends('layouts.app')

@section('title') Registered Dragons Masterlist @endsection

@section('content')
{!! breadcrumbs(['Registered Dragons Masterlist' => 'Registered Dragons']) !!}
<h1>Registered Dragon Slot Masterlist</h1>

@include('browse._masterlist_content', ['characters' => $slots])

@endsection

@section('scripts')
@include('browse._masterlist_js')
@endsection