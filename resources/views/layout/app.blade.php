<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <title>@yield('title', 'Marché des gourmets')</title>

    <meta name="description" content="@yield('description') max 150 characters">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    @include('layout.favicons')

    @include('layout.social-media')

    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__wrapper">
            <h1 role="heading" aria-level="1" class="main-heading"><a href="/" class="main-heading__link">Marché des
                    gourmets <span class="sr-only">-
                        @yield('main-heading')</span></a>
            </h1>
            <span class="date">Du 27 au 28 mars 2020</span>
            <a href="/tickets" class="btn cta header__cta"><span class="sr-only">Acheter vos </span>Tickets</a>
            <label for="menu-cbx" class="menu__label menu__label--open" title="Ouvrir le menu">Ouvrir le menu</label>
            <input type="checkbox" class="menu__cbx" id="menu-cbx">
            <nav class="global" aria-label="globale">
                <h2 role="heading" aria-level="2" class="sr-only">Navigation globale</h2>
                <label for="menu-cbx" class="menu__label menu__label--close" title="Fermer le menu">Fermer le
                    menu</label>
                <ul class="global__list">
                    <li class="global__item">
                        <a href="{{ route('home') }}" class="global__link">Accueil</a>
                    </li>
                    <li class="global__item">
                        <a href="{{ route('exhibitors') }}" class="global__link">Exposants</a>
                    </li>
                    <li class="global__item">
                        <a href="{{ route('become-exhibitor') }}" class="global__link">Devenir exposant</a>
                    </li>
                    <li class="global__item">
                        <a href="{{ route('practical-information') }}" class="global__link">Informations pratiques</a>
                    </li>
                    <li class="global__item">
                        <a href="{{ route('gallery') }}" class="global__link">La galerie</a>
                    </li>
                    <li class="global__item">
                        <a href="{{ route('contact') }}" class="global__link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main-content">

        @yield('content')

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
    </main>
    <footer class="footer">
        <div class="footer__wrapper">
            <a href="/facebook" class="footer__fb" title="like us on facebook">F</a>
            <nav class="footer__nav" aria-label="de pied de page">
                <h2 class="sr-only">Navigation de pied de page</h2>
                <ul class="f-nav__list">
                    <li class="f-nav__item"><a href="{{ route('contact') }}" class="f-nav__link">Contact</a></li>
                    <li class="f-nav__item"><a href="/cookies" class="f-nav__link">Cookies</a></li>
                    <li class="f-nav__item"><a href="/conditions-d-utilisation" class="f-nav__link">Conditions
                            d’utilisation</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
</body>

</html>
