@extends('layout.app')

@section('title', 'Conntact - Marché des gourmets')
@section('main-heading', 'Conntact')

@section('content')

    <div class="contact__wrapper">
        <form action="#" method="post">
            <label for="name" class="contact__label">Nom</label>
            <input type="text" id="name" name="name" class="contact__input">
            <label for="mail" class="contact__label">Mail</label>
            <input type="mail" id="mail" name="mail" class="contact__input">
            <label for="subject" class="contact__label">Sujet</label>
            <input type="text" id="subject" name="subject" class="contact__input">
            <label for="message" class="contact__label">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message ici..."></textarea>
            <button class="contact__submit btn cta">Envoyer</button>
        </form>
        <p class="contact__message">
            Suite aux décisions gouvenementales pour frainer la propagation du Covid-19, nous avons pris des décisions pour
            planifier le marché en toute sécurité. Si vous chercher des informations supplémentaires, contacter-nous.
        </p>
        <dl class="contact__info">
            <div class="contact__info-wrapper">
                <dt class="sr-only contact__therm">Organisateur</dt>
                <dd class="contact__definition">c/o Philippe Vanstalle</dd>
                <dt class="sr-only contact__therm">Rue</dt>
                <dd class="contact__definition">Quai de Rome, 10/23</dd>
                <dt class="sr-only contact__therm">Ville</dt>
                <dd class="contact__definition">4000 Liège</dd>
            </div>
            <div class="contact__info-wrapper">
                <dt class="contact__therm">Téléphone</dt>
                <dd class="contact__definition"><a href="tel:003242528324" class="contact__link">+32 (0) 425 283 24</a></dd>
                <dt class="contact__therm">GSM</dt>
                <dd class="contact__definition"><a href="tel:0032475311105" class="contact__link">+32 (0) 475 311 105</a>
                </dd>
            </div>
            <div class="contact__info-wrapper">
                <dt class="contact__therm">Email</dt>
                <dd class="contact__definition"><a href="mailto:info@marchedesgourmets.be"
                       class="contact__link">info@marchedesgourmets.be</a></dd>
            </div>
            <div class="contact__info-wrapper">
                <dt class="contact__therm">Nom du propriétaire de compte</dt>
                <dd class="contact__definition">ASBL Rotary de Flémalle</dd>
                <dt class="contact__therm">IBAN</dt>
                <dd class="contact__definition">BE27 1430 8077 8873</dd>
                <dt class="contact__therm">BIC</dt>
                <dd class="contact__definition">GEBABEBB</dd>
            </div>
        </dl>
        <a href="{{ route('practical-information') }}" class="contact__cta cta btn">Vous cherchez plus d'informaitons</a>
    </div>

@endsection
