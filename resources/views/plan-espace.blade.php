@extends('layout.app')

@section('title', 'Plan des lieux - Marché des gourmets')
@section('main-heading', 'Galerie')

@section('content')
    <iframe src={{ asset('storage/' . Page::get('space_plan')) }} width="100%" height="100%">

        Example fallback content: This browser does not support PDFs. Please download the PDF to view it: Download PDF.

    </iframe>
@endsection
