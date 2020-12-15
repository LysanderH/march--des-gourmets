@extends('layout.app')

@section('title', 'Galerie - Marché des gourmets')
@section('main-heading', 'Galerie')

@section('content')
    <div class="gallery">
        <span class="gallery__subtitle subtitle">Gallerie</span>
        <div class="gallery__wrapper">
            <p class="gallery__text">Les impressions des années précédentes</p>
            <form action="/" method="get" class="gallery__form">
                <select name="year" id="" class="gallery__select">
                    <option class="gallery__option">2020</option>
                    <option class="gallery__option">2019</option>
                    <option class="gallery__option">2018</option>
                    <option class="gallery__option">2017</option>
                </select>
            </form>
        </div>
        <ul class="gallery__list">
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
            <li class="gallery__item"><img src="https://www.fillmurray.com/352/198"
                     alt="Image montrant le marché de gourmets" class="gallery__img">
            </li>
        </ul>
    </div>
    <div class="cta__wrapper">
        <a href="{{ route('exhibitors') }}" class="gallery__cta btn cta">Vous voulez voir les exposants de cette
            année?</a>
    </div>
@endsection
