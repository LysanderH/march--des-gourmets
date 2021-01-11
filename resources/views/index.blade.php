@extends('layout.app')

@section('main-heading', @pageTitle)

@section('content')
    <div class="landing-zone">
        <div class="landing-zone__wrapper">
            <section class="hello" aria-labelledby="hello-heading">
                <h2 role="heading" aria-level="2" class="subtitle hello__heading" id="hello-heading">Bienvenue à la
                    20<sup>ème</sup>
                    édition</h2>
                <p class="hello__text">{{ Page::get('welcome_text') }}</p>
                <a href="{{ route('gallery') }}" class="hello__link cta btn">Voir la galerie</a>
            </section>
            <div class="landing-zone__img" style="background-image: url({{ asset('storage/' . Page::get('bcg_img')) }})"
                 aria-hidden="true">
            </div>
            <div class="hide_1" aria-hidden="true"></div>
            <div class="hide_2" aria-hidden="true"></div>
            <div class="hide_3" aria-hidden="true"></div>
            <div class="hide_4" aria-hidden="true"></div>
            <div class="hide_5" aria-hidden="true"></div>
        </div>
    </div>

    <section class="info" aria-label="info">
        <h2 class="sr-only info__heading" role="heading" aria-level="2">info</h2>
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
        <h2 class="feature__heading" role="heading" aria-level="2">{{ Page::get('feature_title') }}</h2>
        <img src="{{ asset('/storage/' . Page::get('feature_img')) }}" alt="Image de la garderie"
             class="feature__img" width="536" height="458">
        <p class="feature__description">{{ Page::get('feature_content') }}</p>
        <a href="{{ Page::get('feature_link') }}" class="feature__link cta btn"
           @if (Page::get('feature_blank')) rel="noopener noreferrer" target="_blank"
            @endif>{{ Page::get('feature_link_label') }}</a>
    </section>

    <section class="supported" aria-label="Porjets soutenus">
        <h2 class="supported__heading" role="heading" aria-level="2">Porjets soutenus</h2>
        <article class="supported__item">
            <h3 class="supported__sect-heading">{{ Page::get('supported_title_one') }}</h3>
            <img src="{{ asset('/storage/' . Page::get('supported_img_one')) }}" alt="" class="supported__img">
            <p class="supported__text">{{ Page::get('supported_content_one') }}</p>
        </article>
        <article class="supported__item">
            <h3 class="supported__sect-heading">{{ Page::get('supported_title_two') }}</h3>
            <img src="{{ asset('/storage/' . Page::get('supported_img_two')) }}" alt="" class="supported__img">
            <p class="supported__text">{{ Page::get('supported_content_two') }}</p>
        </article>
        <article class="supported__item">
            <h3 class="supported__sect-heading">{{ Page::get('supported_title_three') }}</h3>
            <img src="{{ asset('/storage/' . Page::get('supported_img_three')) }}" alt="" class="supported__img">
            <p class="supported__text">{{ Page::get('supported_content_three') }}</p>
        </article>
        <a href="{{ Page::get('exhibitor_cta_link') }}" class="supported__btn cta btn"
           @if (Page::get('exhibitor_cta_blank')) rel="noopener noreferrer" target="_blank"
            @endif>{{ Page::get('exhibitor_cta_link_label') }}</a>
    </section>

    <section class="feature" aria-label="Le restaurant">
        <h2 class="feature__heading" role="heading" aria-level="2">{{ Page::get('feature_two_title') }}</h2>
        <img src="{{ asset('/storage/' . Page::get('feature_two_img')) }}" alt="Image de la garderie"
             class="feature__img" width="536" height="458">
        <p class="feature__description">{{ Page::get('feature_two_content') }}</p>
        <a href="{{ Page::get('feature_two_link') }}" class="feature__link cta btn"
           @if (Page::get('feature_two_blank')) rel="noopener noreferrer" target="_blank"
            @endif>{{ Page::get('feature_two_link_label') }}</a>
    </section>

    <section class="pricing" aria-label="Les prix">
        <h2 class="pricing__heading" role="heading" aria-level="2">Les prix</h2>
        <p class="pricing__info">L'achat des ticket est possible en ligne ou sur place.</p>
        <dl class="pricing__list">
            <div class="pricing__wrapper">
                <dt class="pricing__therm">Enfants moin de 16 ans</dt>
                <dd class="pricing__price">0€</dd>
            </div>
            <div class="pricing__wrapper">
                <dt class="pricing__therm">Adultes</dt>
                <dd class="pricing__price">6€</dd>
            </div>
            <div class="pricing__wrapper">
                <dt class="pricing__therm">Exposants</dt>
                <dd class="pricing__price">250€</dd>
            </div>
        </dl>
        <a href="/acheter-vos-tickets" class="pricing__btn cta btn">Acheter vos tickets</a>
    </section>

    <section class="producer" aria-label="Voulez-vous vendre vos produits?">
        <h2 class="producer__heading" role="heading" aria-level="2">{{ Page::get('exhibitor_cta_title') }}</h2>
        <img src="{{ asset('/storage/assets/img/hello.jpeg') }}" alt="Image représentant la salle d'exposition">
        <a href="{{ Page::get('exhibitor_cta_link') }}" class="btn cta producer__btn"
           @if (Page::get('exhibitor_cta_blank')) rel="noopener noreferrer" target="_blank"
            @endif>{{ Page::get('exhibitor_cta_link_label') }}</a>
    </section>
@endsection
