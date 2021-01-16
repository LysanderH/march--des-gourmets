@extends('layout.app')

@section('title', 'Exposants - Marché des gourmets')
@section('main-heading', 'Exposants')

@section('map-css')
    @livewireStyles
@endsection

@section('content')

    @livewire('data-list')

    <div class="cta__wrapper">
        <a href="/plan-espace" class="btn exhibitors__link">Voir le plan d’espace</a>
    </div>
@endsection

@section('map-js')
    @livewireScripts
@endsection
