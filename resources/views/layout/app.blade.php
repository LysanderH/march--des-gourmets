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

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    <header class="header">
        <h1 role="heading" aria-level="1" class="main-heading">Marché des gourmets <span class="sr-only">-
                @yield('main-heading')</span>
        </h1>
        <span class="date">Du 27 au 28 mars 2020</span>
        <a href="/tickets" class="btn cta"><span class="sr-only">Acheter vos </span>Tickets</a>
        <nav class="global" aria-label="globale">
            <h2 role="heading" aria-level="2">Navigation globale</h2>
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
    </header>
    <main class="main-content">

        @yield('content')

    </main>
</body>

</html>
