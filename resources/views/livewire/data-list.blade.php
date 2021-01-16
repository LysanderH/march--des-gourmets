<div>
    <div class="exhibitors-search">
        <div class="exhibitors-search__wrapper">
            <p class="exhibitors-search__subtitle subtitle">Exposants</p>
            <form action="/exposants" aria-label="Trier les exposants" role="search"
                  class="exhibitors-search__form exhibitors-search__form--search">
                <label for="" class="sort__label sr-only">Rechercher</label>
                <input type="search" class="sort__input sort__input--search" placeholder="Rechercher"
                       wire:model="search">
                <button class="search__btn" type="submit">Rechercher</button>
            </form>
            <form action="/exposants" aria-label="Trier les exposants par type de produits vendu" role="search"
                  class="exhibitors-search__form">
                <label for="producer_type" class="sort__label sr-only">Trier par type de produits vendu</label>
                <select name="producer_type" id="producer_type" class="select" wire:model="category">
                    <option selected value="">Choisir un type de produit</option>
                    @foreach ($categories as $category)
                        <option>{{ $category->name }}</option>
                    @endforeach
                </select>
                <noscript>
                    <button class="btn" type="submit">Trier par produit</button>
                </noscript>
            </form>
            <form action="/exposants" aria-label="Trier les exposants par pays de provenance" role="search"
                  class="exhibitors-search__form">
                <label for="country" class="sort__label sr-only">Trier par pays</label>
                <select name="country" id="country" class="select" wire:model="country">
                    <option selected value="">Choisir un pays</option>
                    @foreach ($countries as $country)
                        <option>{{ $country }}</option>
                    @endforeach
                </select>
                <noscript>
                    <button class="btn" type="submit">Trier par pays</button>
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
                            <img src=@if ($exhibitor->logo != '')
                            {{ asset('/storage/' . $exhibitor->logo) }}
                        @else {{ asset('/storage/assets/icons/chef.svg') }}
                @endif alt=""
                width="66" height="66"
                class="exhibitor__logo">
                <span class="exhibitor__country">{{ $exhibitor->country }}</span>
                @if ($exhibitor->categories->isNotEmpty())
                    <ul class="exhibitor__list">
                        @foreach ($exhibitor->categories as $category)
                            <li class="exhibitor__item {{ mb_strtolower($category->name) }}">{{ $category->name }}</li>
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
        {{ $exhibitors->links('vendor.pagination.tailwind') }}

</div>
