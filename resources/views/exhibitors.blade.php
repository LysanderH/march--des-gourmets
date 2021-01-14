@extends('layout.app')

@section('title', 'Exposants - Marché des gourmets')
@section('main-heading', 'Exposants')

@section('content')
    <div class="exhibitors-search">
        <div class="exhibitors-search__wrapper">
            <p class="exhibitors-search__subtitle subtitle">Exposants</p>
            <form action="/exposants" aria-label="Trier les exposants" role="search"
                  class="exhibitors-search__form exhibitors-search__form--search">
                <label for="" class="sort__label sr-only">Rechercher</label>
                <input type="text" class="sort__input sort__input--search" placeholder="Rechercher">
                <button class="search__btn">Rechercher</button>
            </form>
            <form action="/exposants" aria-label="Trier les exposants par type de produits vendu" role="search"
                  class="exhibitors-search__form">
                <label for="producer_type" class="sort__label sr-only">Trier par type de produits vendu</label>
                <select name="producer_type" id="producer_type" class="select">
                    <option disabled selected value>Choisir un type de produit</option>
                    <option value="saucisson">Saucisson</option>
                    <option value="saucisson">Vin</option>
                </select>
                <noscript>
                    <button type="submit">Trier par produit</button>
                </noscript>
            </form>
            <form action="/exposants" aria-label="Trier les exposants par pays de provenance" role="search"
                  class="exhibitors-search__form">
                <label for="country" class="sort__label sr-only">Trier par pays</label>
                <select name="country" id="country" class="select">
                    <option disabled selected value>Choisir un pays</option>
                    <option value="saucisson">Belgique</option>
                    <option value="saucisson">France</option>
                </select>
                <noscript>
                    <button type="submit">Trier par pays</button>
                </noscript>
            </form>
        </div>
    </div>

    <section class="exhibitors" aria-label="Liste des exposants">
        <h2 class="exhibitors__heading sr-only" role="heading" aria-level="2">Liste des exposants</h2>
        @if ($exhibitors->isNotEmpty())
            <ul class="exhibitors__list">
                @foreach ($exhibitors as $exhibitor)
                    <li class="exhibitors__item">
                        <article class="exhibitor" aria-label="Écohay">
                            <h3 class="exhibitor__heading" role="heading" aria-level="3">{{ $exhibitor->company }}</h3>
                            <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66"
                                 class="exhibitor__logo">
                            <span class="exhibitor__country">{{ $exhibitor->country }}</span>
                            @if ($exhibitor->categories->isNotEmpty())
                                <ul class="exhibitor__list">
                                    @foreach ($exhibitor->categories as $category)
                                        <li class="exhibitor__item">{{ $category->name }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </article>
                    </li>
                @endforeach

            </ul>
        @else
            <p class="exhibitors__no-exhibitors">La liste des exposants arrivera bientôt.</p>
        @endif
    </section>
    {{ $exhibitors->links() }}
    {{-- <div class="pagination">
        <ul class="pagination__list">
            <li class="pagination__item"><a href="#" class="pagination__link">Précédent</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link active">1</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">2</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">3</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">4</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">Suivant</a></li>
        </ul>
    </div> --}}
    <div class="cta__wrapper">
        <a href="/plan-espace" class="btn exhibitors__link">Voir le plan d’espace</a>
    </div>
@endsection
