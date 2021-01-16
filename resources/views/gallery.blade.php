@extends('layout.app')

@section('title', 'Galerie - Marché des gourmets')
@section('main-heading', 'Galerie')

@section('map-css')
    @livewireStyles
@endsection

@section('content')
    @livewire('gallery')
@endsection

@section('map-js')
    @livewireScripts
@endsection
