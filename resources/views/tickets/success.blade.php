@extends('layout.app')

@section('title', 'Payement - Marché des gourmets')
@section('main-heading', 'Payement')

@section('content')
    <div class="success">
        <p class="success__message">Merci pour votre achat. A l'entrée, nous vous demanderons votre identifiant et le numéro
            de vérification.</p>
        <dl class="success__list">
            <dt class="succes__therm">Identifiant</dt>
            <dd class="success__definition">{{ $selling->id }}</dd>
            <dt class="succes__therm">Nom</dt>
            <dd class="success__definition">{{ $selling->name }}</dd>
            <dt class="succes__therm">Prénom</dt>
            <dd class="success__definition">{{ $selling['first-name'] }}</dd>
            <dt class="succes__therm">Email</dt>
            <dd class="success__definition">{{ $selling->email }}</dd>
            <dt class="succes__therm">Téléphone</dt>
            <dd class="success__definition">{{ $selling->tel }}</dd>
            <dt class="succes__therm">Adresse</dt>
            <dd class="success__definition">{{ $selling->street }} {{ $selling->number }},</dd>
            <dd class="success__definition">{{ $selling->postal }} {{ $selling->town }}</dd>
            <dd class="success__definition">{{ $selling->country }}</dd>
            <dt class="succes__therm">Tickets enfants</dt>
            <dd class="success__definition">{{ $selling->children . ' | ' . $selling->total_children }}€</dd>
            <dt class="succes__therm">Tickets Adultes</dt>
            <dd class="success__definition">{{ $selling->adults . ' | ' . $selling->total_adults }}€</dd>
            <dt class="succes__therm">Total</dt>
            <dd class="success__definition">{{ $selling->total }}€</dd>
            <dt class="succes__therm">Chaine de sécurité</dt>
            <dd class="success__definition">{{ $selling->checktoken }}</dd>
        </dl>
    </div>
@endsection
