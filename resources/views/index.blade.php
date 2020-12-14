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
            <div class="hide_1" aria-hidden="true"></div>
            <div class="hide_2" aria-hidden="true"></div>
            <div class="hide_3" aria-hidden="true"></div>
            <div class="hide_4" aria-hidden="true"></div>
            <div class="hide_5" aria-hidden="true"></div>
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

    <section class="supported" aria-label="Porjets soutenus">
        <h2 class="supported__heading" role="heading" aria-level="2">Porjets soutenus</h2>
        <article class="supported__item">
            <h3 class="supported__sect-heading">La construction de la paix</h3>
            <img src="{{ asset('/storage/assets/img/rc-desease.jpg') }}" alt="" class="supported__img">
            <p class="supported__text">Le Rotary lance la conversation pour favoriser la compréhension mutuelle malgré les
                différences culturelles. Nous formons des adultes et des jeunes à la prévention et à la médiation des
                conflits, et nous venons en aide aux réfugiés.</p>
        </article>
        <article class="supported__item">
            <h3 class="supported__sect-heading">Approvisionnement en eau potable, assainissement et hygiène </h3>
            <img src="{{ asset('/storage/assets/img/rc-water.jpg') }}" alt="" class="supported__img">
            <p class="supported__text">Nous soutenons les solutions locales pour approvisionner en eau potable et donner
                accès à l’assainissement et à l’hygiène au plus grand nombre. Nous partageons nos expertises avec les
                décideurs et les éducateurs locaux pour nous assurer de la pérennité de nos actions.</p>
        </article>
        <article class="supported__item">
            <h3 class="supported__sect-heading">Lutte contre les maladies</h3>
            <img src="{{ asset('/storage/assets/img/peace.jpg') }}" alt="" class="supported__img">
            <p class="supported__text">Nous éduquons et équipons les collectivités afin de stopper la propagation de
                maladies mortelles telles que la polio, le sida ou le paludisme. Nous améliorons l’accès aux soins dans les
                pays en développement.</p>
        </article>
        <a href="" class="supported__btn cta btn" rel="noopener noreferrer" target="_blank">Savoir plus sur nos projets</a>
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
        <h2 class="producer__heading" role="heading" aria-level="2">Voulez-vous vendre vos produits?</h2>
        <img src="{{ asset('/storage/assets/img/hello.jpeg') }}" alt="Image représentant la salle d'exposition">
        <a href="" class="btn cta producer__btn">Inscrivez-vous ici</a>
    </section>

    <section class="partners" aria-label="Nos partenaires">
        <h2 class="partners__heading" role="heading" aria-level="2">Nos partenaires</h2>
        <ul class="partners__list">
            <li class="partners__items"><img src="{{ asset('/storage/assets/img/rc-flemalle.png') }}"
                     alt="Logo du club Rotary de Flémalle"
                     class="partners__img"></li>
            <li class="partners__items"><img src="{{ asset('/storage/assets/img/province-liege.png') }}"
                     alt="logo de La Province de Liège"
                     class="partners__img"></li>
        </ul>
    </section>
@endsection
