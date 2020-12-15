@extends('layout.app')

@section('title', 'Devenir exposant - Marché des gourmets')
@section('main-heading', 'Devenir exposant')

@section('content')
    <div class="bec-info">
        <span class="subtitle bec-info__heading">Formulaire de demande d’inscription</span>
        <p class="bec-info__pricing">Le prix pour un stand est de 250€</p>
        <ul class="bec-info__list">
            <li class="bec-info__item">ASBL Rotary de Flémalle</li>
            <li class="bec-info__item">IBAN BE27 1430 8077 8873</li>
            <li class="bec-info__item">BIC GEBABEBB</li>
        </ul>
    </div>
    <form action="#" class="form" enctype="multipart/form-data">
        <fieldset class="form__section">
            <legend class="form__heading">Informations générales</legend>
            <label for="name" class="label">Nom</label>
            <input type="text" class="input" id="name" name="name" placeholder="Doe">
            <label for="first-name" class="label">Prénom</label>
            <input type="text" class="input" id="first-name" name="first-name" placeholder="John">
            <label for="mail" class="label">Mail</label>
            <input type="email" class="input" id="mail" name="mail" placeholder="exemple@mail.be">
            <label for="phone" class="label">Téléphone</label>
            <input type="tel" class="input" id="phone" name="phone" placeholder="0471 55 55 55">
            <label for="logo" class="label">Logo</label>
            <input type="file" class="input input--file" id="logo" name="logo" accept="image/png, image/jpeg">
        </fieldset>
        <fieldset class="form__section">
            <legend class="form__heading">Adresse</legend>
            <label for="street" class="label">Rue</label>
            <input type="text" class="input" id="street" name="street" placeholder="Rue Neuve">
            <label for="postal" class="label">Code postal</label>
            <input type="text" class="input" id="postal" name="postal" placeholder="4000">
            <label for="ville" class="label">Ville</label>
            <input type="text" class="input" id="ville" name="ville" placeholder="Liège">
            <label for="country" class="label">Pays</label>
            <input type="tel" class="input" id="country" name="country" placeholder="Belgique">
        </fieldset>
        <fieldset class="form__section form__section--checkboxes">
            <legend class="form__heading">Cochez ce que vous vendez</legend>
            <label for="biere" class="checkbox__label">Bière <input type="checkbox" class="input input--checkbox" id="biere"
                       name="art-type[]"><span class="checkbox__span"></span></label>
            <label for="bio" class="checkbox__label">Bio <input type="checkbox" class="input input--checkbox" id="bio"
                       name="art-type[]"><span class="checkbox__span"></span></label>
            <label for="charcuterie" class="checkbox__label">Charcuterie <input type="checkbox"
                       class="input input--checkbox" id="charcuterie"
                       name="art-type[]"><span class="checkbox__span"></span></label>
            <label for="fromage" class="checkbox__label">Fromage <input type="checkbox" class="input input--checkbox"
                       id="fromage"
                       name="art-type[]"><span class="checkbox__span"></span></label>
            <label for="miel" class="checkbox__label">Miel <input type="checkbox" class="input input--checkbox" id="miel"
                       name="art-type[]"><span class="checkbox__span"></span></label>
            <label for="moutarde" class="checkbox__label">Moutarde <input type="checkbox" class="input input--checkbox"
                       id="moutarde"
                       name="art-type[]"><span class="checkbox__span"></span></label>
            <label for="saucisson" class="checkbox__label">Saucisson <input type="checkbox" class="input input--checkbox"
                       id="saucisson"
                       name="art-type[]"><span class="checkbox__span"></span></label>
            <label for="autre" class="checkbox__label">Autre <input type="checkbox" class="input input--checkbox" id="autre"
                       name="art-type[]"><span class="checkbox__span"></span></label>
        </fieldset>
        <fieldset class="form__section form__section--message">
            <label for="message" class="form__heading--message">Décriver votre magasin en quelques mots</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre description ici..."
                      class="form__message"></textarea>
            <button type="submit" class="btn cta form__submit">Soumettre ma candidature</button>
        </fieldset>
    </form>
    <div class="cta__wrapper">
        <a href="{{ route('become-exhibitor') }}" class="cta btn bec-exhibitor__link">Vous avez besoin de plus
            d'informations&nbsp;?</a>
    </div>
@endsection
