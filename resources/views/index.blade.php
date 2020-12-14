@extends('layout.app')

@section('main-heading', 'Accueil')

@section('content')
    <div class="landing-zone">
        <div class="landing-zone__wrapper">
            <section class="hello" aria-labelledby="hello-heading">
                <h2 role="heading" aria-level="2" class="subtitle hello__heading" id="hello-heading">Bienvenue à la
                    20<sup>ème</sup>
                    édition</h2>
                <p class="hello__text">Le Marché des Gourmets est un événement annuel organisé par le Rotary Club de
                    Flémalle
                    sur
                    le prestigieux site de l'abbaye de la Paix-Dieu afin d'obtenir des fonds pour aider les plus démunis.
                    Nous
                    rassemblons pour vous des producteurs de qualité provenant de la région.</p>
                <a href="{{ route('gallery') }}" class="hello__link cta btn">Voir la galerie</a>
            </section>
            <div class="landing-zone__img"></div>
            <div class="hide_1"></div>
            <div class="hide_2"></div>
            <div class="hide_3"></div>
            <div class="hide_4"></div>
            <div class="hide_5"></div>
        </div>
    </div>

    <section class="info" aria-label="info">
        <h2 class="info__heading sr-only" role="heading" aria-level="2">info</h2>
        <div class="info__wrapper">
            <div class="info__d-one">
                <span class="info__day">Samedi 27 mars</span>
                <span class="info__hour">De 11h00 à 20h00</span>
            </div>
            <div class="info__d-two">
                <span class="info__day">Samedi 27 mars</span>
                <span class="info__hour">De 10h00 à 19h00</span>
            </div>
        </div>
    </section>

    <section class="feature" aria-label="La garderie">
        <h2 class="feature__heading" role="heading" aria-level="2">La garderie</h2>
        <img src="{{ asset('../storage/assets/img/pexels-mentatdgt-1049622.jpg') }}" alt="Image de la garderie"
             class="feature__img" width="536" height="458">
        <p class="feature__description">Pour les enfants de _ à _ ans, les membre du _________ organisent une garderie
            avec des animations et des jeux. Ainsi, il vous est possible de passer un beau moment tout en sachant que vos
            enfants s'amusent.</p>
        <a href="/plan-d-espace" class="feature__link cta btn">Voir le plan d’espace</a>
    </section>

@endsection
