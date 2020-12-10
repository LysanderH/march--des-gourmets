@extends('layout.app')

@section('title', 'Exposants - Marché des gourmets')
@section('main-heading', 'Exposants')

@section('content')
    <p class="subtitle">Exposants</p>
    <form action="/exposants" aria-label="Trier les exposants" role="search">
        <label for="" class="sort__label sr-only">Rechercher</label>
        <input type="text" class="sort__input" placeholder="Rechercher">
        <button class="search__btn btn">Rechercher</button>
    </form>
    <form action="/exposants" aria-label="Trier les exposants par type de produits vendu" role="search">
        <label for="producer_type" class="sort__label sr-only">Trier par type de produits vendu</label>
        <select name="producer_type" id="producer_type">
            <option disabled selected value>Choisir un type de produit</option>
            <option value="saucisson">Saucisson</option>
            <option value="saucisson">Vin</option>
        </select>
        <noscript>
            <button type="submit">Trier par produit</button>
        </noscript>
    </form>
    <form action="/exposants" aria-label="Trier les exposants par pays de provenance" role="search">
        <label for="country" class="sort__label sr-only">Trier par pays</label>
        <select name="country" id="country">
            <option disabled selected value>Choisir un pays</option>
            <option value="saucisson">Belgique</option>
            <option value="saucisson">France</option>
        </select>
        <noscript>
            <button type="submit">Trier par pays</button>
        </noscript>
    </form>
    <section class="exhibitors" aria-label="Liste des exposants">
        <h2 class="exhibitors__heading" role="heading" aria-level="2">Liste des exposants</h2>
        <ul class="exhibitors__list">
            {{-- LOOP Exhibitors --}}
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item">Vin</li>
                    </ul>
                </article>
            </li>
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item">Fromage</li>
                    </ul>
                </article>
            </li>
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item"></li>
                    </ul>
                </article>
            </li>
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item"></li>
                    </ul>
                </article>
            </li>
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item"></li>
                    </ul>
                </article>
            </li>
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item"></li>
                    </ul>
                </article>
            </li>
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item"></li>
                    </ul>
                </article>
            </li>
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item"></li>
                    </ul>
                </article>
            </li>
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item"></li>
                    </ul>
                </article>
            </li>
            <li class="exhibitors__item">
                <article class="exhibitor" aria-label="Écohay">
                    <h3 class="exhibitor__heading" role="heading" aria-level="3">Écohay</h3>
                    <img src="https://www.fillmurray.com/66/66" alt="" width="66" height="66" class="exhibitor__logo">
                    <span class="exhibitor__country">Auvergne</span>
                    <ul class="exhibitor__list">
                        <li class="exhibitor__item"></li>
                    </ul>
                </article>
            </li>
        </ul>
    </section>
    <div class="pagination">
        <ul class="pagination__list">
            <li class="pagination__item"><a href="#" class="pagination__link">Précédent</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">1</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">2</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">3</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">4</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">Suivant</a></li>
        </ul>
    </div>
    <a href="/plan-espace" class="btn">Voir le plan d’espace</a>
    <section class="partners" aria-label="Nos partenaires">
        <h2 class="partners__heading" role="heading" aria-level="2">Nos partenaires</h2>
        <img src="{{ asset('/assets/img/rc-flemalle.png') }}" alt="Logo du club rotary de flémalle" class="partners__img">
        <img src="{{ asset('/assets/img/province-liege.png') }}" alt="Logo de La Province de Liège" class="partners__img">
    </section>
@endsection
