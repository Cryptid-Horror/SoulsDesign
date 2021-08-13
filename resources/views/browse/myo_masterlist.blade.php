@extends('layouts.app')

@section('title') Dragon Masterlist @endsection

@section('sidebar')
    @include('browse._sidebar')
@endsection

@section('content')
{!! breadcrumbs(['Dragon Masterlist' => 'Registered Dragons']) !!}
<h1>Genotype Masterlist</h1>

@include('browse._masterlist_content', ['characters' => $slots])

@endsection

@section('scripts')
@include('browse._masterlist_js')
@endsection