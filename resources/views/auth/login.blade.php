@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style>
    html,
    body {
        font-family: 'Roboto', sans-serif;
        height: 100vh;
    }

    body {
        background-image: url("img/sarracenofundo.png");
        background-size: cover;
    }

    label {
        color: #fff;
        width: 1000px;

    }

    .formulario {
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .campos {
        display: flex;
        flex-direction: column;

    }

    .campos label {
        font-family: 'Photograph Signature', sans-serif;
        font-size: 30px;
        font-weight: bold;
        color: #C58511;
        text-align: center;
    }

    .campos input {
        font-family: Nunito, Arial;
        background: none;
        width: 95%;
        margin: auto;
        border: solid 1px #C58511;
        color: white !important;

        height: calc(1.5em + 1rem + 2px);
        padding: 0.5rem 1rem;
        font-size: 1.125rem;
        line-height: 1.5;
        border-radius: 0.3rem;
    }

    .campos input:read-write {
        background: none;
    }

    .formulario button {
        font-family: 'Photograph Signature', sans-serif;
        user-select: none;
        background-color: transparent;
        text-align: center;
        padding: 0 30px !important;
        font-size: 1.125rem;
        line-height: 1.5;
        border-radius: 0.3rem;
        font-size: 30px;
        color: #C58511;
        background-color: none;
        border: solid 1px #C58511;
        margin-top: 20px;
        max-width: 120px;
        margin-left: 43%;
    }

    .formulario button:hover {
        border-color: #fff;
        color: #fff;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .logo {
        height: 180px;
    }
</style>
<div>
    <form class="formulario" method="POST" action="{{ route('login') }}">
        @csrf
        <img src="img/logosarraceno.png" class="logo" id="logo">
        <div class="campos form-group row">
            <label for="email">{{ __('E-mail') }}</label>
            <input ID="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="password">{{ __('Senha') }}</label>
            <input type="password" id="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button type="submit">{{ __('Login') }}</button>
        </div>
    
    

</div>
@endsection