@extends('layout.app')

@section('title', 'Tickets - Marché des gourmets')
@section('main-heading', 'Tickets')

@section('content')

    <dl class="confirm__data-list">
        <dt class="confirm__therm">Enfants {{ $children }} x @option('Prix.price_children')€</dt>
        <dd class="confirm__definition">{{ $totalChildren }}€</dd>
        <dt class="confirm__therm">Adultes {{ $adults }} x @option('Prix.price_adults')€</dt>
        <dd class="confirm__definition">{{ $totalAdults }}€</dd>
        <dt class="confirm__therm">Total</dt>
        <dd class="confirm__definition">{{ $total }}€ TVAC.</dd>
    </dl>

    <form action="/tickets/address" class="address__form" method="post">
        @csrf
        <label for="name" class="address__label">Nom</label>
        <input type="text" class="address__input" name="name" id="name" value="{{ old('name') }}" placeholder="Doe"
               required>
        <label for="first-name" class="address__label">Prénom</label>
        <input type="text" class="address__input" name="first_name" id="first-name" value="{{ old('first_name') }}"
               placeholder="John" required>
        <label for="email" class="address__label">Email</label>
        <input type="email" class="address__input" name="email" id="email" value="{{ old('email') }}"
               placeholder="exemple@mail.com" required>
        <label for="tel" class="address__label">Numéro de téléphone</label>
        <input type="tel" class="address__input" name="tel" id="tel" value="{{ old('tel') }}" placeholder="0471 11 11 11"
               required>
        <label for="street" class="address__label">Rue</label>
        <input type="text" class="address__input" name="street" id="street" value="{{ old('street') }}"
               placeholder="Rue Neuve" required>
        <label for="number" class="address__label">Numéro</label>
        <input type="number" class="address__input" name="number" id="number" value="{{ old('number') }}"
               placeholder="255" required>
        <label for="postal" class="address__label">Code postal</label>
        <input type="text" class="address__input" name="postal" id="postal" value="{{ old('postal') }}"
               placeholder="4000" required>
        <label for="town" class="address__label">Ville</label>
        <input type="text" class="address__input" name="town" id="town" value="{{ old('town') }}"
               placeholder="Liège" required>
        <label for="country" class="address__label">Pays</label>
        <input type="text" class="address__input" name="country" id="country" value="{{ old('country') }}"
               placeholder="Belgique" required>

        <button type="submit" class="address__submit btn">Continuer vers le payement</button>
    </form>

@endsection
