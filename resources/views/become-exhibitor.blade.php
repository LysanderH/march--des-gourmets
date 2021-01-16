@extends('layout.app')

@section('title', 'Devenir exposant - Marché des gourmets')
@section('main-heading', 'Devenir exposant')

@section('content')
    <div class="bec-info">
        <span class="subtitle bec-info__heading">Formulaire de demande d’inscription</span>
        <p class="bec-info__pricing">Le prix pour un stand est de @option('Prix.price_exhibitors')€</p>
        <ul class="bec-info__list">
            <li class="bec-info__item">ASBL Rotary de Flémalle</li>
            <li class="bec-info__item">IBAN BE27 1430 8077 8873</li>
            <li class="bec-info__item">BIC GEBABEBB</li>
        </ul>
    </div>
    {{-- @dd(session()) --}}
    <form action="/exhibitor" method="post" class="form" enctype="multipart/form-data">
        @csrf
        <fieldset class="form__section">
            <legend class="form__heading">Informations générales</legend>
            <label for="enterprise" class="label">Nom d’entreprise</label>
            <input type="text" value="{{ old('enterprise') }}" class="input" id="enterprise" name="enterprise"
                   placeholder="Les délices du chef">
            <label for="name" class="label">Nom</label>
            <input type="text" value="{{ old('name') }}" class="input" id="name" name="name" placeholder="Doe">
            <label for="first-name" class="label">Prénom</label>
            <input type="text" value="{{ old('first_name') }}" class="input" id="first-name" name="first_name"
                   placeholder="John">
            <label for="mail" class="label">Mail</label>
            <input type="email" value="{{ old('mail') }}" class="input" id="mail" name="mail" placeholder="exemple@mail.be">
            <label for="phone" class="label">Téléphone</label>
            <input type="tel" value="{{ old('phone') }}" class="input" id="phone" name="phone" placeholder="0471 55 55 55">
            <label for="logo" class="label">Logo</label>
            <input type="file" value="{{ old('logo') }}" class="input input--file" id="logo" name="logo"
                   accept="image/png, image/jpeg">
        </fieldset>
        <fieldset class="form__section">
            <legend class="form__heading">Adresse</legend>
            <label for="street" class="label">Rue</label>
            <input type="text" value="{{ old('street') }}" class="input" id="street" name="street" placeholder="Rue Neuve">
            <label for="street_number" class="label">Numéro de maison</label>
            <input type="number" value="{{ old('street_number') }}" class="input" id="street_number" name="street_number"
                   placeholder="57">
            <label for="postal" class="label">Code postal</label>
            <input type="text" value="{{ old('postal') }}" class="input" id="postal" name="postal" placeholder="4000">
            <label for="ville" class="label">Ville</label>
            <input type="text" value="{{ old('ville') }}" class="input" id="ville" name="ville" placeholder="Liège">
            <label for="country" class="label">Pays</label>
            <input type="tel" value="{{ old('country') }}" class="input" id="country" name="country" placeholder="Belgique">
        </fieldset>
        <fieldset class="form__section form__section--checkboxes">
            <legend class="form__heading">Cochez ce que vous vendez</legend>
            @foreach ($categories as $category)
                <label for="{{ $category->name }}" class="checkbox__label">{{ $category->name }} <input type="checkbox"
                           value="{{ $category->name }}"
                           class="input input--checkbox"
                           id="{{ $category->name }}"
                           name="art_type[]"><span class="checkbox__span"></span></label>
            @endforeach
        </fieldset>
        <fieldset class="form__section form__section--message">
            <label for="message" class="form__heading--message">Décriver votre magasin en quelques mots</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre description ici..."
                      class="form__message">{{ old('message') }}</textarea>
            <button type="submit" class="btn cta form__submit">Soumettre ma candidature</button>
        </fieldset>
    </form>
    <div class="cta__wrapper">
        <a href="{{ route('become-exhibitor') }}" class="cta btn bec-exhibitor__link">Vous avez besoin de plus
            d'informations&nbsp;?</a>
    </div>
@endsection
