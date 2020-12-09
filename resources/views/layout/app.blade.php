<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <title>
        @hasSection('title')
            @yield('title') - Marché des gourmets
        @else
            Marché des gourmets
        @endif
    </title>

    <meta name="description" content="@yield('description') max 150 characters">

    <link rel="icon" type="image/x-icon" href="https://example.com/favicon.ico">

    <link rel="icon" type="image/png" href="https://example.com/favicon.png">
    <!-- Apple Touch Icon (at least 200x200px) -->
    <link rel="apple-touch-icon" href="/custom-icon.png">


    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="msapplication-config" content="browserconfig.xml" />

    {{-- TODO modify social media meta tags --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gourmets.local/">
<meta property="og:title" content="@hasSection('title') @yield('title') - Marché des gourmets @else Marché des gourmets 
@endif">
<meta property="og:image" content="https://example.com/image.jpg">
<meta property="og:description" content="Description Here">
<meta property="og:site_name" content="@hasSection('title') @yield('title') - Marché des gourmets @else Marché des gourmets 
@endif">
<meta property="og:locale" content="fr_BE">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@site_account">
<meta name="twitter:creator" content="@individual_account">
<meta name="twitter:url" content="https://gourmets.local">
<meta name="twitter:title" content=" @hasSection('title') @yield('title') - Marché des gourmets @else Marché des gourmets  
@endif">
<meta name="twitter:description" content="Content description less than 200 characters">
<meta name="twitter:image" content="https://example.com/image.jpg">


</head>

<body>
<header>
<h1 role="heading" aria-level="1">Marché des gourmets <span class="sr-only">- @yield('main-heading')</span></h1>
<nav class="global">
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
@yield('content')
</body>

</html>
