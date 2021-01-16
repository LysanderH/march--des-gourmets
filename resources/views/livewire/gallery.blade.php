<div>

    <div class="gallery">
        <span class="gallery__subtitle subtitle">Gallerie</span>
        <div class="gallery__wrapper">
            <p class="gallery__text">Les impressions des années précédentes</p>
            <form action="/" method="get" class="gallery__form">
                <select name="year" id="" class="gallery__select" wire:model="year">
                    @foreach ($years as $year)
                        <option class="gallery__option">{{ $year->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <ul class="gallery__list">
            @foreach ($albums as $album)
                @foreach ($album->photos as $photo)
                    <li class="gallery__item"><img src="{{ asset('storage/' . $photo->path) }}"
                             alt="Image montrant le marché de gourmets" class="gallery__img">
                    </li>
                @endforeach
            @endforeach
        </ul>
    </div>
    <div class="cta__wrapper">
        <a href="{{ route('exhibitors') }}" class="gallery__cta btn cta">Vous voulez voir les exposants de cette
            année?</a>
    </div>
</div>
