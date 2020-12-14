@extends('layout.app')

@section('title', 'Exposants - Marché des gourmets')
@section('main-heading', 'Exposants')

@section('content')
    <div class="bec-info">
        <span class="subtitle">Formulaire de demande d’inscription</span>
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
            <input type="text" class="input" id="name" placeholder="Doe">
            <label for="first-name" class="label">Prénom</label>
            <input type="text" class="input" id="first-name" placeholder="John">
            <label for="mail" class="label">Mail</label>
            <input type="email" class="input" id="mail" placeholder="exemple@mail.be">
            <label for="phone" class="label">Téléphone</label>
            <input type="tel" class="input" id="phone" placeholder="0471 55 55 55">
            <label for="logo" class="label">Logo</label>
            <input type="file" class="input input--file" id="logo">
        </fieldset>
        <fieldset class="form__section">
            <legend class="form__heading">Adresse</legend>
            <label for="name" class="label">Rue</label>
            <input type="text" class="input" id="name" placeholder="Rue Neuve">
            <label for="first-name" class="label">Code postal</label>
            <input type="text" class="input" id="first-name" name="first-name" placeholder="4000">
            <label for="mail" class="label">Ville</label>
            <input type="text" class="input" id="mail" name="ville" placeholder="Liège">
            <label for="phone" class="label">Pays</label>
            <input type="tel" class="input" id="phone" name="country" placeholder="Belgique">
        </fieldset>
        <fieldset class="form__section form__section--checkboxes">
            <legend class="form__heading">Cochez ce que vous vendez</legend>
            <input type="checkbox" class="input input--checkbox" id="biere" name="art-type[]"><label
                   for="biere">Bière</label>
            <input type="checkbox" class="input input--checkbox" id="bio" name="art-type[]"><label
                   for="bio">Bio</label>
            <input type="checkbox" class="input input--checkbox" id="charcuterie" name="art-type[]"><label
                   for="charcuterie">Charcuterie</label>
            <input type="checkbox" class="input input--checkbox" id="fromage" name="art-type[]"><label
                   for="fromage">Fromage</label>
            <input type="checkbox" class="input input--checkbox" id="miel" name="art-type[]"><label
                   for="miel">Miel</label>
            <input type="checkbox" class="input input--checkbox" id="moutarde" name="art-type[]"><label
                   for="moutarde">Moutarde</label>
            <input type="checkbox" class="input input--checkbox" id="saucisson" name="art-type[]"><label
                   for="saucisson">Saucisson</label>
            <input type="checkbox" class="input input--checkbox" id="autre" name="art-type[]"><label
                   for="autre">Autre</label>
        </fieldset>
        <fieldset class="form__section form__section--checkboxes">
            <label for="message">Décriver votre magasin en quelques mots</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre description ici..."></textarea>
            <button type="submit" class="btn cta form__submit">Soumettre ma candidature</button>
        </fieldset>
    </form>
@endsection
