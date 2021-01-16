@extends('layout.app')

@section('title', 'Payement - Marché des gourmets')
@section('main-heading', 'Payement')
@section('map-css')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/client.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endsection

@section('content')
    <form id="payment-form" data-secret="{{ $intent->client_secret }}">
        <div id="card-element">
            <!-- Elements will create input elements here -->
        </div>

        <!-- We'll put the error messages in this element -->
        <div id="card-errors" role="alert"></div>

        <button id="submit">Pay</button>
    </form>

    <form method="post" action="/success" id="redirect-form" class="hidden">
        @csrf
    </form>
@endsection
