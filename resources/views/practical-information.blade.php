@extends('layout.app')

@section('title', 'Informations pratiques - Marché des gourmets')
@section('main-heading', 'Informations pratiques')

@section('map-css')
    <link rel="stylesheet" href="{{ asset('/css/leaflet.css') }}"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin="">
@endsection

@section('content')

    <div class="practical">
        <span class="subtitle practical__heading">Informations pratiques</span>
        <div class="practical__d-one">
            <span
                  class="practical__day">{{ \Carbon\Carbon::parse(Page::option('Horaires')->starting_date)->format('l d F') }}</span>
            <span class="practical__hour">De
                {{ \Carbon\Carbon::parse(Page::option('Horaires')->starting_day_one)->format('H:i') }} à
                {{ \Carbon\Carbon::parse(Page::option('Horaires')->ending_day_one)->format('H:i') }}</span>
        </div>
        <div class="practical__d-one">
            <span
                  class="practical__day">{{ \Carbon\Carbon::parse(Page::option('Horaires')->ending_date)->format('l d F') }}</span>
            <span class="practical__hour">De
                {{ \Carbon\Carbon::parse(Page::option('Horaires')->starting_day_two)->format('H:i') }} à
                {{ \Carbon\Carbon::parse(Page::option('Horaires')->ending_day_two)->format('H:i') }}</span>
        </div>
    </div>

    <section class="map" aria-label="Informations de déplacement">
        <h2 class="sr-only map__heading" role="heading" aria-level="2">Informations de déplacement</h2>
        <div class="map__map" id="mapid" style="min-height: 500px">
            <noscript>
                <img src="{{ asset('/storage/assets/img/map.png') }}" alt="Image de la carte d'accès" class="map__img"
                     width="1088" height="500">
            </noscript>
        </div>
        <article class="car">
            <h3 class="car__heading">En voiture</h3>
            <img src="../storage/assets/icons/car.svg" alt="Illustration d'une voiture" class="car__img">
            <p class="car__text">Profitez de notre parking, on vous conseille de prendre la sortie A604 sur l'autoroute E40.
            </p>
        </article>
        <article class="car">
            <h3 class="car__heading">Transport en commun</h3>
            <img src="../storage/assets/icons/train.svg" alt="Illustration d'un train" class="car__img">
            <p class="car__text">En bus, il suffit de prendre le numéro 9, celui-ci passe aussi à la gare de
                Liège-Guillemins.</p>
        </article>
    </section>

    <section class="pricing pricing--right" aria-label="Les prix">
        <h2 class="pricing__heading" role="heading" aria-level="2">Les prix</h2>
        <p class="pricing__info">L'achat des ticket est possible en ligne ou sur place.</p>
        <dl class="pricing__list">
            <div class="pricing__wrapper">
                <dt class="pricing__therm">Enfants moin de 16 ans</dt>
                <dd class="pricing__price">@option('Prix.price_children')€</dd>
            </div>
            <div class="pricing__wrapper">
                <dt class="pricing__therm">Adultes</dt>
                <dd class="pricing__price">@option('Prix.price_adults')€</dd>
            </div>
            <div class="pricing__wrapper">
                <dt class="pricing__therm">Exposants</dt>
                <dd class="pricing__price">@option('Prix.price_exhibitors')€</dd>
            </div>
        </dl>
        <a href="/acheter-vos-tickets" class="pricing__btn cta btn">Acheter vos tickets</a>
    </section>

    <div class="side-info">
        <section class="info-payment" aria-label="Méthode de payement">
            <h2 class="sr-only info-payment__heading" role="heading" aria-level="2">Méthode de payement</h2>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px"
                 width="326.1px" height="230.5px" viewBox="0 0 326.1 230.5" style="enable-background:new 0 0 326.1 230.5;"
                 xml:space="preserve" class="info-payment__img" class="info-payment__img">
                <style type="text/css">
                    .st0 {
                        fill: #FFFFFF;
                    }

                    .st1 {
                        fill: #005498;
                    }

                    .st2 {
                        fill: #FFD800;
                    }

                    .st3 {
                        fill: none;
                    }

                </style>
                <g>
                    <path class="st0" d="M326.1,210.7c0,10.9-8.9,19.8-19.8,19.8H19.9c-10.9,0-19.8-8.9-19.8-19.8V19.8C0.1,8.9,9,0,19.9,0h286.4
                      c10.9,0,19.8,8.9,19.8,19.8L326.1,210.7L326.1,210.7z" />
                </g>
                <g>
                    <path class="st1"
                          d="M262,64.4h-11.8h-54.6h-11.9l-8,9l-25.8,29.1l0,0l-8,9h-11.8H76.5H64.7l7.8-9.1l3.7-4.3L84,89H72.2H57h-8.5
                      c-6.5,0-11.8,5.5-11.8,12.1l0,0v23.4v2.2c0,6.7,5.3,12.1,11.8,12.1h3.3h124h8.9c6.5,0,15.4-4,19.7-9l20.6-23.4L262,64.4z" />
                    <path class="st2" d="M277.7,37.1c6.5,0,11.8,5.5,11.8,12.1v25.5c0,6.7-5.3,12.1-11.8,12.1h-6.4h-17.2h-11.8l7.9-9l0,0l3.9-4.5
                      l7.9-9h-78.3l-41.7,47H64.3l55.7-63l2.1-2.4c4.4-4.9,13.3-9,19.8-9h2.7h133.1V37.1z" />
                </g>
                <path class="st1" d="M289.5,192.4v-3.7c0-0.5-0.3-0.8-1-0.8h-2.4c-0.7,0-1.2-0.1-1.3-0.4c-0.2-0.3-0.2-0.9-0.2-1.9v-14h3.9
                     c0.3,0,0.5-0.1,0.7-0.3s0.3-0.4,0.3-0.7v-3.9c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.4-0.3-0.7-0.3h-3.9v-5.1c0-0.3-0.1-0.5-0.2-0.6
                     c-0.2-0.1-0.4-0.2-0.6-0.2h-0.1l-5.8,1c-0.3,0.1-0.5,0.2-0.7,0.3c-0.2,0.2-0.3,0.4-0.3,0.6v3.9H273c-0.3,0-0.5,0.1-0.7,0.3
                     s-0.3,0.4-0.3,0.7v3.2c0,0.3,0.1,0.5,0.3,0.6c0.2,0.2,0.4,0.3,0.7,0.4l3.9,0.6v14c0,1.7,0.2,3.1,0.5,4.2c0.4,1.1,0.9,1.9,1.5,2.5
                     c0.7,0.6,1.5,1,2.5,1.2s2.2,0.3,3.5,0.3c0.7,0,1.3,0,1.9-0.1c0.5-0.1,1.2-0.2,1.9-0.3C289.2,193.2,289.5,192.9,289.5,192.4
                     M268.7,191.9v-4.3c0-0.3-0.1-0.5-0.3-0.6c-0.2-0.1-0.4-0.2-0.6-0.2h-0.1c-0.9,0.1-1.8,0.2-2.6,0.2c-0.8,0.1-1.9,0.1-3.3,0.1
                     c-0.5,0-1.1-0.1-1.5-0.3c-0.5-0.2-0.9-0.5-1.3-0.9s-0.6-1-0.8-1.7c-0.2-0.7-0.3-1.6-0.3-2.7v-4c0-1.1,0.1-2,0.3-2.7
                     c0.2-0.7,0.5-1.3,0.8-1.7c0.4-0.4,0.8-0.7,1.3-0.9s1-0.3,1.5-0.3c1.4,0,2.5,0,3.3,0.1s1.7,0.1,2.6,0.2h0.1c0.3,0,0.5-0.1,0.6-0.2
                     c0.2-0.1,0.3-0.3,0.3-0.6v-4.3c0-0.4-0.1-0.6-0.2-0.7c-0.2-0.1-0.4-0.3-0.8-0.4c-0.7-0.2-1.5-0.3-2.6-0.5s-2.3-0.2-3.8-0.2
                     c-3.4,0-6.1,1-8.2,3.1c-2,2.1-3.1,5.1-3.1,9.1v4c0,3.9,1,7,3.1,9.1c2,2.1,4.8,3.1,8.2,3.1c1.4,0,2.7-0.1,3.8-0.2
                     c1.1-0.2,2-0.3,2.6-0.5c0.4-0.1,0.6-0.2,0.8-0.4C268.7,192.5,268.7,192.2,268.7,191.9 M237.4,186.8c-0.6,0.3-1.2,0.5-1.9,0.7
                     c-0.7,0.2-1.4,0.3-2.1,0.3c-1,0-1.8-0.1-2.3-0.4s-0.7-0.9-0.7-2V185c0-0.6,0.1-1.1,0.2-1.5s0.4-0.8,0.7-1.1c0.3-0.3,0.8-0.5,1.3-0.6
                     s1.2-0.2,2.1-0.2h2.7L237.4,186.8L237.4,186.8z M245,175.1c0-1.8-0.3-3.3-0.8-4.5s-1.3-2.2-2.2-3c-1-0.8-2.1-1.4-3.5-1.7
                     c-1.4-0.4-3-0.6-4.7-0.6c-1.6,0-3.2,0.1-4.7,0.3s-2.7,0.4-3.6,0.7c-0.6,0.2-0.9,0.5-0.9,1.1v3.9c0,0.3,0.1,0.5,0.2,0.7
                     c0.2,0.1,0.4,0.2,0.6,0.2h0.2c0.4,0,0.9-0.1,1.4-0.1c0.6,0,1.2-0.1,1.9-0.1c0.7,0,1.5-0.1,2.3-0.1s1.6,0,2.3,0c1.1,0,2,0.2,2.6,0.6
                     c0.6,0.4,1,1.3,1,2.7v1.7h-2.6c-4.1,0-7.2,0.6-9,1.9c-1.9,1.3-2.8,3.4-2.8,6.2v0.4c0,1.6,0.2,2.9,0.7,3.9c0.5,1.1,1.1,1.9,1.9,2.6
                     c0.8,0.6,1.6,1.1,2.6,1.4s2,0.4,3.1,0.4c1.4,0,2.7-0.2,3.7-0.6s2-0.9,3-1.6v0.8c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.4,0.3,0.7,0.3h5.4
                     c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-17.2H245z M219.3,192.4v-3.7c0-0.5-0.3-0.8-1-0.8h-2.4c-0.7,0-1.2-0.1-1.3-0.4
                     c-0.2-0.3-0.2-0.9-0.2-1.9v-14h3.9c0.3,0,0.5-0.1,0.7-0.3s0.3-0.4,0.3-0.7v-3.9c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-3.9v-5.1
                     c0-0.3-0.1-0.5-0.2-0.6c-0.2-0.1-0.4-0.2-0.6-0.2h-0.1l-5.8,1c-0.3,0.1-0.5,0.2-0.7,0.3c-0.2,0.2-0.3,0.4-0.3,0.6v3.9h-4
                     c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.4-0.3,0.7v3.2c0,0.3,0.1,0.5,0.3,0.6c0.2,0.2,0.4,0.3,0.7,0.4l3.9,0.6v14c0,1.7,0.2,3.1,0.5,4.2
                     c0.4,1.1,0.9,1.9,1.5,2.5c0.7,0.6,1.5,1,2.5,1.2s2.2,0.3,3.5,0.3c0.7,0,1.3,0,1.9-0.1c0.5-0.1,1.2-0.2,1.9-0.3
                     C219,193.2,219.3,192.9,219.3,192.4 M198.3,192.3v-16c0-1.5-0.1-2.9-0.4-4.3c-0.2-1.3-0.7-2.5-1.3-3.5c-0.6-1-1.5-1.8-2.6-2.3
                     c-1.1-0.6-2.5-0.9-4.3-0.9c-1.5,0-2.9,0.2-4.1,0.6c-1.2,0.4-2.4,1-3.8,2v-1.2c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-5.4
                     c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.4-0.3,0.7v25.6c0,0.3,0.1,0.5,0.3,0.7s0.4,0.3,0.7,0.3h5.8c0.3,0,0.5-0.1,0.7-0.3
                     c0.2-0.2,0.3-0.4,0.3-0.7v-18.9c0.8-0.4,1.6-0.8,2.4-1.1c0.7-0.3,1.5-0.4,2.2-0.4s1.3,0.1,1.8,0.2c0.5,0.1,0.8,0.4,1.1,0.7
                     c0.3,0.4,0.4,0.8,0.5,1.4c0.1,0.6,0.1,1.3,0.1,2.1v16c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.4,0.3,0.7,0.3h5.8c0.3,0,0.5-0.1,0.7-0.3
                     C198.2,192.8,198.3,192.5,198.3,192.3 M161.9,181.2c0,3.9-1.4,5.9-4.3,5.9c-1.4,0-2.5-0.5-3.2-1.5s-1.1-2.5-1.1-4.4v-3.4
                     c0-2,0.4-3.4,1.1-4.4c0.7-1,1.8-1.5,3.2-1.5c2.8,0,4.3,2,4.3,5.9V181.2z M169.7,177.8c0-1.9-0.3-3.7-0.8-5.2s-1.3-2.8-2.3-3.9
                     c-1-1.1-2.3-1.9-3.8-2.5s-3.2-0.9-5.2-0.9s-3.7,0.3-5.2,0.9c-1.5,0.6-2.8,1.4-3.8,2.5s-1.8,2.4-2.3,3.9s-0.8,3.3-0.8,5.2v3.4
                     c0,1.9,0.3,3.7,0.8,5.2s1.3,2.8,2.3,3.9s2.3,1.9,3.8,2.5s3.2,0.9,5.2,0.9s3.7-0.3,5.2-0.9s2.8-1.4,3.8-2.5s1.8-2.4,2.3-3.9
                     s0.8-3.3,0.8-5.2V177.8z M143,191.9v-4.3c0-0.3-0.1-0.5-0.3-0.6s-0.4-0.2-0.7-0.2h-0.1c-0.9,0.1-1.8,0.2-2.6,0.2
                     c-0.8,0.1-1.9,0.1-3.3,0.1c-0.5,0-1.1-0.1-1.5-0.3c-0.5-0.2-0.9-0.5-1.3-0.9c-0.4-0.4-0.6-1-0.8-1.7s-0.3-1.6-0.3-2.7v-4
                     c0-1.1,0.1-2,0.3-2.7s0.5-1.3,0.8-1.7c0.4-0.4,0.8-0.7,1.3-0.9s1-0.3,1.5-0.3c1.4,0,2.5,0,3.3,0.1s1.7,0.1,2.6,0.2h0.1
                     c0.3,0,0.5-0.1,0.7-0.2c0.2-0.1,0.3-0.3,0.3-0.6v-4.3c0-0.4-0.1-0.6-0.2-0.7c-0.2-0.1-0.4-0.3-0.8-0.4c-0.7-0.2-1.5-0.3-2.6-0.5
                     s-2.3-0.2-3.8-0.2c-3.4,0-6.1,1-8.2,3.1c-2,2.1-3.1,5.1-3.1,9.1v4c0,3.9,1,7,3.1,9.1c2,2.1,4.8,3.1,8.2,3.1c1.4,0,2.7-0.1,3.8-0.2
                     c1.1-0.2,1.9-0.3,2.6-0.5c0.4-0.1,0.6-0.2,0.8-0.4C142.9,192.5,143,192.2,143,191.9 M119.3,192.3v-16c0-1.5-0.1-2.9-0.4-4.3
                     c-0.2-1.3-0.7-2.5-1.3-3.5s-1.5-1.8-2.6-2.3c-1.1-0.6-2.5-0.9-4.3-0.9c-1.5,0-2.9,0.2-4.1,0.6c-1.2,0.4-2.4,1-3.8,2v-1.2
                     c0-0.3-0.1-0.5-0.3-0.7s-0.4-0.3-0.7-0.3h-5.4c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.4-0.3,0.7v25.6c0,0.3,0.1,0.5,0.3,0.7s0.4,0.3,0.7,0.3
                     h5.8c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-18.9c0.8-0.4,1.6-0.8,2.4-1.1c0.7-0.3,1.5-0.4,2.2-0.4s1.3,0.1,1.8,0.2
                     c0.5,0.1,0.8,0.4,1.1,0.7c0.3,0.4,0.4,0.8,0.5,1.4c0.1,0.6,0.1,1.3,0.1,2.1v16c0,0.3,0.1,0.5,0.3,0.7s0.4,0.3,0.7,0.3h5.8
                     c0.3,0,0.5-0.1,0.7-0.3C119.2,192.8,119.3,192.5,119.3,192.3 M82.1,186.8c-0.6,0.3-1.2,0.5-1.9,0.7s-1.4,0.3-2.1,0.3
                     c-1,0-1.8-0.1-2.3-0.4s-0.7-0.9-0.7-2V185c0-0.6,0.1-1.1,0.2-1.5c0.1-0.4,0.4-0.8,0.7-1.1c0.3-0.3,0.8-0.5,1.3-0.6s1.2-0.2,2.1-0.2
                     h2.7V186.8z M89.8,175.1c0-1.8-0.3-3.3-0.8-4.5s-1.3-2.2-2.2-3c-1-0.8-2.1-1.4-3.5-1.7c-1.4-0.4-3-0.6-4.7-0.6
                     c-1.6,0-3.2,0.1-4.7,0.3s-2.7,0.4-3.6,0.7c-0.6,0.2-0.9,0.5-0.9,1.1v3.9c0,0.3,0.1,0.5,0.2,0.7c0.2,0.1,0.4,0.2,0.6,0.2h0.2
                     c0.4,0,0.9-0.1,1.4-0.1c0.6,0,1.2-0.1,2-0.1c0.7,0,1.5-0.1,2.3-0.1s1.6,0,2.3,0c1.1,0,2,0.2,2.6,0.6c0.6,0.4,1,1.3,1,2.7v1.7h-2.6
                     c-4.1,0-7.2,0.6-9,1.9c-1.9,1.3-2.8,3.4-2.8,6.2v0.4c0,1.6,0.2,2.9,0.7,3.9c0.5,1.1,1.1,1.9,1.9,2.6c0.8,0.6,1.6,1.1,2.6,1.4
                     s2,0.4,3.1,0.4c1.4,0,2.7-0.2,3.7-0.6s2-0.9,3-1.6v0.8c0,0.3,0.1,0.5,0.3,0.7s0.4,0.3,0.7,0.3H89c0.3,0,0.5-0.1,0.7-0.3
                     c0.2-0.2,0.3-0.4,0.3-0.7v-17.2H89.8z M55.4,182.7c0,1.3-0.5,2.4-1.4,3.1s-2.7,1.1-5.1,1.1h-0.8c-0.4,0-0.8,0-1.2,0
                     c-0.4,0-0.8,0-1.2,0h-0.8v-9h5.4c1.9,0,3.3,0.4,4,1.3c0.7,0.9,1.1,1.9,1.1,3V182.7z M55.2,168.4c0,0.5-0.1,1-0.2,1.5
                     c-0.2,0.5-0.4,0.9-0.8,1.2s-0.9,0.6-1.5,0.8s-1.4,0.3-2.4,0.3h-5.4v-8.3c0.2,0,0.4,0,0.7,0c0.3,0,0.7,0,1.1,0h1.1h0.8
                     c2.5,0,4.2,0.3,5.2,0.9c1,0.6,1.5,1.6,1.5,2.9L55.2,168.4L55.2,168.4z M63.4,182.2c0-1.7-0.4-3.1-1.2-4.3s-1.8-2.2-3.1-2.8
                     c1.3-0.6,2.3-1.6,3-2.8c0.7-1.3,1.1-2.7,1.1-4.2v-0.9c0-1.9-0.4-3.5-1.1-4.8c-0.7-1.3-1.8-2.3-3.1-3.1s-2.9-1.3-4.8-1.7
                     c-1.9-0.3-3.9-0.5-6.2-0.5c-0.8,0-1.6,0-2.4,0s-1.6,0.1-2.4,0.1s-1.5,0.1-2.2,0.2c-0.7,0.1-1.2,0.1-1.6,0.2c-0.9,0.2-1.6,0.4-2,0.9
                     c-0.4,0.4-0.6,1.2-0.6,2.3v29.3c0,1.1,0.2,1.8,0.6,2.3c0.4,0.4,1.1,0.7,2,0.9c0.5,0.1,1.1,0.2,1.7,0.2c0.7,0.1,1.4,0.1,2.2,0.2
                     s1.6,0.1,2.4,0.1s1.7,0,2.5,0c2.1,0,4.1-0.2,5.9-0.5c1.8-0.3,3.4-0.9,4.8-1.7c1.4-0.8,2.4-1.9,3.3-3.3c0.8-1.4,1.2-3.2,1.2-5.3
                     L63.4,182.2L63.4,182.2z" />
                <rect x="0" y="0" class="st3" width="326" height="230.5" />
            </svg>
            <p class="info-payment__text">{{ Page::get('info_description_one') }}</p>
        </section>
        <section class="info-payment" aria-label="Les animaux de companie ne sont pas permis">
            <h2 class="sr-only info-payment__heading" role="heading" aria-level="2">Les animaux de companie ne sont pas
                permis
            </h2>
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px"
                 viewBox="0 0 298.798 298.798" style="enable-background:new 0 0 298.798 298.798;" xml:space="preserve"
                 height="110" width="110">
                <g>
                    <path d="M51.936,205.946c3.818,6.709,8.598,10.987,12.122,13.486c4.01,14.508,17.317,25.194,33.082,25.194
              c1.172,0,47.793,0,47.793,0c4.8,0,8.69-3.891,8.69-8.69c0-4.799-3.891-8.689-8.69-8.689h-17.961
              c4.501-7.93,4.562-13.615,4.595-17.989c0.009-1.248,0.729-14.334-11.412-23.399c-2.827-2.111-3.504-6.2-1.323-9.121
              c2.154-2.881,6.239-3.477,9.122-1.322c9.049,6.754,14.918,17.003,16.288,28.092l19.284-8.752l-51.271-51.271l-18.9,8.479
              c-18.429,8.267-30.334,26.499-30.53,46.664c-4.463-8.576-6.599-22.599,2.529-44.469c1.387-3.321-0.184-7.139-3.505-8.524
              c-3.32-1.388-7.138,0.182-8.524,3.503C41.533,177.388,46.063,195.624,51.936,205.946z" />
                    <path d="M237.14,76.265h-15.882c0-15.718-12.743-28.46-28.459-28.46c-6.85,0-13.135,2.422-18.045,6.454
              c4.248,1.318,7.94,4.189,10.221,8.14c14.581,25.264,14.581,32.892,14.581,36.146c0,16.583-13.492,30.075-30.074,30.075
              c-3.612,0-7.07-0.654-10.279-1.83l38.613,38.613c1.49-4.248,2.298-8.779,2.298-13.439v-2.924v-22.844
              c0-7.336,5.947-13.283,13.283-13.283h7.443c6.877,0,13.038-4.253,15.477-10.683l6.648-17.525c0.727-1.915,0.467-4.064-0.697-5.749
              C241.105,77.271,239.188,76.265,237.14,76.265z M201.634,78.652c-2.04,0-3.693-1.653-3.693-3.692c0-2.04,1.653-3.693,3.693-3.693
              c2.04,0,3.692,1.653,3.692,3.693C205.326,76.999,203.674,78.652,201.634,78.652z" />
                    <path d="M175.348,244.627h17.451c4.799,0,8.689-3.891,8.689-8.69c0-5.086-4.553-8.689-8.689-8.689h-8.763v-11.982l-17.38-17.38
              v38.052C166.656,240.736,170.548,244.627,175.348,244.627z" />
                    <path
                          d="M186.52,98.545c0-6.362-7.79-20.89-12.835-29.63c-0.867-1.504-2.466-2.432-4.2-2.434c-1.735,0-3.338,0.926-4.205,2.428
              c-5.046,8.741-12.839,23.273-12.839,29.636c0,9.41,7.63,17.039,17.04,17.039C178.893,115.584,186.52,107.955,186.52,98.545z" />
                    <path d="M149.398,0C66.971,0,0,67.108,0,149.399c0,82.379,67.019,149.398,149.398,149.398c82.236,0,149.399-66.908,149.399-149.398
              C298.798,67.021,231.777,0,149.398,0z M149.398,276.001c-69.809,0-126.602-56.793-126.602-126.602
              c0-30.135,10.63-58.698,29.698-81.374l178.278,178.276C208.068,265.403,179.471,276.001,149.398,276.001z M246.845,230.132
              L68.665,51.953c21.932-18.196,50.094-29.156,80.733-29.156c69.809,0,126.603,56.794,126.603,126.603
              C276.001,180.038,265.042,208.199,246.845,230.132z" />
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
            </svg>
            <p class="info-payment__text">{{ Page::get('info_description_one') }}</p>
        </section>
    </div>

    <section class="feature" aria-label="La garderie">
        <h2 class="feature__heading" role="heading" aria-level="2">La garderie</h2>
        <img src="{{ asset('../storage/assets/img/pexels-mentatdgt-1049622.jpg') }}" alt="Image de la garderie"
             class="feature__img" width="536" height="458">
        <p class="feature__description">Pour les enfants de _ à _ ans, les membre du _________ organisent une garderie
            avec des animations et des jeux. Ainsi, il vous est possible de passer un beau moment tout en sachant que vos
            enfants s'amusent.</p>
        <a href="/plan-d-espace" class="feature__link cta btn">Voir le plan d’espace</a>
    </section>

    <section class="feature" aria-label="Le restaurant">
        <h2 class="feature__heading" role="heading" aria-level="2">Le restaurant</h2>
        <img src="{{ asset('../storage/assets/img/pexels-elevate-1267320.jpg') }}" alt="Image de la garderie"
             class="feature__img" width="536" height="458">
        <p class="feature__description">Les membres du rotari club flémalle organisent un restaurant avec des plats froids,
            dont les ingrédients proviennent des producteurs du marché. Ainsi, vous pouvez gouter l'excellence des produits
            offerts à nos stands.</p>
        <a href="{{ route('exhibitors') }}" class="feature__link cta btn">Voir les exposants</a>
    </section>
@endsection

@section('map-js')
    <script src="{{ asset('/js/leaflet.js') }}"></script>
    <script async>
        var map = L.map('mapid').setView([50.593562942613325, 5.482897114209436], 16);
        var marker = L.marker([50.593562942613325, 5.482897114209436]).addTo(map);
        var popup = marker.bindPopup('<b>Val Saint lambert</b><br />');



        L.tileLayer('https://tile.openstreetmap.be/osmbe/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors' +
                ', Tiles courtesy of <a href="https://geo6.be/">GEO-6</a>',
            maxZoom: 18
        }).addTo(map);

    </script>
@endsection
