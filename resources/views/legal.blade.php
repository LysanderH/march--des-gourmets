@extends('layout.app')

@section('title', 'Conditions d’utilisation - Marché des gourmets')
@section('main-heading', 'Galerie')

@section('map-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/wysiwyg.css') }}">
@endsection

@section('content')
    <div class="wysiwyg">
        {!! Page::get('legal_content') !!}
    </div>
@endsection
