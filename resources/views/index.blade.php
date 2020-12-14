@extends('layout.app')

@section('main-heading', 'Accueil')

@section('content')
    <div class="landing-zone">
        <div class="landing-zone__wrapper">
            <div class="hello">
                <span role="heading" aria-level="2" class="subtitle hello__heading">Bienvenue à la 20<sup>ème</sup>
                    édition</span>
                <p class="hello__text">Le Marché des Gourmets est un événement annuel organisé par le Rotary Club de
                    Flémalle
                    sur
                    le prestigieux site de l'abbaye de la Paix-Dieu afin d'obtenir des fonds pour aider les plus démunis.
                    Nous
                    rassemblons pour vous des producteurs de qualité provenant de la région.</p>
                <a href="{{ route('gallery') }}" class="hello__link cta btn">Voir la galerie</a>
            </div>
            <div class="landing-zone__img"></div>
            <div class="hide_1"></div>
            <div class="hide_2"></div>
            <div class="hide_3"></div>
            <div class="hide_4"></div>
            <div class="hide_5"></div>
        </div>
    </div>

@endsection
