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
            <span class="practical__day">Samedi 27 mars</span>
            <span class="practical__hour">De 11h00 à 20h00</span>
        </div>
        <div class="practical__d-one">
            <span class="practical__day">Samedi 27 mars</span>
            <span class="practical__hour">De 10h00 à 19h00</span>
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

    <div class="side-info">
        <section class="info-payment" aria-label="Méthode de payement">
            <h2 class="sr-only info-payment__heading" role="heading" aria-level="2">Méthode de payement</h2>
            <img src="{{ asset('/storage/assets/img/BC_logo_ORGNL_RGB-200.png') }}" alt="Logo Mister Cash"
                 class="info-payment__img">
            <p class="info-payment__text">Le payement par banccontact est possible sur les lieux. Si un vendeur n'a pas de
                module de payement sans contact, il est toujours possible de retirer de l'argent à l'entrée.</p>
        </section>
        <section class="info-payment" aria-label="Les animaux de companie ne sont pas permis">
            <h2 class="sr-only info-payment__heading" role="heading" aria-level="2">Les animaux de companie ne sont pas
                permis
            </h2>
            <img src="{{ asset('/storage/assets/icons/no-dogs-svgrepo-com.svg') }}"
                 alt="Signe animaux de companie ne sont pas permis" class="info-payment__img">
            <p class="info-payment__text">Les animaux de companie ne sont pas permis sur les lieux.</p>
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
