@extends('layout.app')

@section('title', 'Conntact - Marché des gourmets')
@section('main-heading', 'Conntact')

@section('content')

    <div class="contact__wrapper">
        <span class="contact__heading subtitle">Contact</span>


        <form action="contact" method="post" class="contact__form">
            @if (session()->has('success'))
                <p class="contact__success">
                    {{ session()->get('success') }}
                </p>
            @endif
            @csrf
            <label for="name" class="contact__label">Nom</label>
            <input type="text" id="name" name="name" class="contact__input" value="{{ old('name') }}"
                   placeholder="Max Mustermann" required>
            @error('name')
                <label for="name" class="contact__label error">{{ $message }}</label>
            @enderror
            <label for="mail" class="contact__label">Mail</label>
            <input type="mail" id="mail" name="email" class="contact__input" value="{{ old('mail') }}"
                   placeholder="exemple@mail.com" required>
            @error('email')
                <label for="mail" class="contact__label error">{{ $message }}</label>
            @enderror
            <label for="subject" class="contact__label">Sujet</label>
            <input type="text" id="subject" name="subject" class="contact__input" value="{{ old('subject') }}"
                   placeholder="Max Mustermann" required>
            @error('subject')
                <label for="subject" class="contact__label error">{{ $message }}</label>
            @enderror
            <label for="message" class="contact__label">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message ici..."
                      class="contact__input" required>{{ old('message') }}</textarea>
            @error('message')
                <label for="message" class="contact__label error">{{ $message }}</label>
            @enderror
            <button class="contact__submit btn cta" type="submit">Envoyer</button>
        </form>
        <p class="contact__message">
            {{ Page::get('contact_info_message') }}
        </p>
        <dl class="contact__info">
            <div class="contact__info-wrapper">
                <dt class="sr-only contact__therm">Organisateur</dt>
                <dd class="contact__definition">@option('Informations de contact.responsible_name')</dd>
                <dt class="sr-only contact__therm">Rue</dt>
                <dd class="contact__definition">@option('Informations de contact.responsible_address')</dd>
                <dt class="sr-only contact__therm">Ville</dt>
                <dd class="contact__definition">@option('Informations de contact.responsible_village')</dd>
            </div>
            <div class="contact__info-wrapper contact__info-wrapper--grid">
                <dt class="contact__therm contact__therm--tel">Téléphone</dt>
                <dd class="contact__definition"><a href="tel:003242528324"
                       class="contact__link">@option('Informations de contact.contact_phone')</a></dd>
                <dt class="contact__therm contact__therm--mobile">GSM</dt>
                <dd class="contact__definition"><a href="tel:0032475311105"
                       class="contact__link">@option('Informations de contact.contact_mobile')</a>
                </dd>
            </div>
            <div class="contact__info-wrapper">
                <dt class="contact__therm contact__therm--mail">Email</dt>
                <dd class="contact__definition"><a href="mailto:@option('Informations de contact.contact_email')"
                       class="contact__link">@option('Informations de contact.contact_email')</a></dd>
            </div>
            <div class="contact__info-wrapper">
                <dt class="sr-only contact__therm">Nom du propriétaire de compte</dt>
                <dd class="contact__definition">@option('Informations de contact.contact_name')</dd>
                <dt class="contact__therm">IBAN</dt>
                <dd class="contact__definition">@option('Informations de contact.contact_iban')</dd>
                <dt class="contact__therm">BIC</dt>
                <dd class="contact__definition">@option('Informations de contact.contact_bic')</dd>
            </div>
        </dl>
        <a href="{{ route('practical-information') }}" class="contact__cta cta btn">Vous cherchez plus d'informaitons</a>
    </div>

@endsection
