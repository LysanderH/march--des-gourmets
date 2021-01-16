@extends('layout.app')

@section('title', 'Tickets - Marché des gourmets')
@section('main-heading', 'Tickets')

@section('content')

    <form action="/tickets" class="tickets__form" method="post">
        @csrf
        <label for="tickets-children" class="tickets__label">Tickets pour enfants de moin de 16 ans
            (@option('Prix.price_children')€)</label>
        <input type="number" class="tickets__input" name="tickets_children" id="tickets-children" min="0" value="0">
        <label for="tickets-adults" class="tickets__label">Tickets pour adultes à partir de 16 ans
            (@option('Prix.price_adults')€)</label>
        <input type="number" class="tickets__input" name="tickets_adults" id="tickets-adults" min="0" value="0">
        <button type="submit">Continuer</button>
    </form>

@endsection
