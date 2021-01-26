@extends('layouts.app')

@section('content')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* html, body {
                
                font-family: 'Photograph Signature', sans-serif;
                font-weight: 200;
                height: 100vh;
                overflow: hidden;
            }
            body{
                background-image: url("img/sarracenofundo.png");
                background-size: cover;
            }

            /* .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #C58511;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */

            /* .inputfont {
                font-family: Nunito, Arial;
                background: none;
                width: 95%;                
                margin: auto;
                border: solid 1px white; 
                color: white;               
            } */
/* 
            .inputfont:read-write{
                background: none;
            } */

            
            /* label {
                font-size: 30px;
                color: #C58511;
                margin-left: 3%;
            }
            
            .botao {
                font-size: 30px;
                margin-left: 45%;
                margin-top: 10px;
                color: #C58511;
                background-color: none; 
                border: solid 1px #C58511;
                padding: 0 30px !important;
            }

            .botao:hover {
                color: white;
                border: solid 1px white;
            }

            form {              
                margin-top: -40px;
                height: 100vh;
                width: 100%;
            }

            .logo {
                height: 150px;
                margin-left: 545px;
                margin-bottom: -45px;         
            } */ 

    html,
    body {
        font-family: 'Photograph Signature', sans-serif;
        height: 100vh;
        /*overflow: hidden; */
    }

    body {
        background-image: url("img/sarracenofundo.png");
        background-size: cover;
        text-align:center;
    }

    label {
        color: #fff;
        width: 1000px;

    }

    .formulario {
        display: flex;
        flex-direction: column;
        align-items: center;
       /* margin-top: -85px !important;*/
    }

    .campos {
        display: flex;
        flex-direction: column;
        margin-top: -20px; 
    }

    .campos label {
        font-family: 'Photograph Signature', sans-serif;
        font-size: 30px;
        font-weight: bold;
        color: #C58511;
        margin: auto;
    }

    .campos input {
        font-family: Nunito, Arial;
        background: none;
        width: 78% !important;
        margin: auto;
        border: solid 1px #C58511;
        color: white !important;
        align-content:center;

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
        font-size: 1.125rem;
        line-height: 1.5;
        border-radius: 0.3rem;
        font-size: 30px;
        color: #C58511;
        background-color: none;
        border: solid 1px #C58511;
        margin-top: 0px;
        max-width: 120px;
        margin-left:auto;
    }

    .formulario button:hover {
        border-color: #fff;
        color: #fff;
        background-color:transparent;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .logo {
        height: 180px;
    }

        </style>
<form class="formulario" method = "POST" action = "{{ route('register') }}">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <img src="img/logosarraceno.png" class="logo" id="logo" >
    <div class="campos">

      <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name">{{ __('Nome') }}</label>

                            
                                <input id="name" type="text" class="campos input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group row">
                            <label for="cargo">{{ __('Cargo') }}</label>

                            
                                <input id="cargo" type="text" class="campos input form-control @error('cargo') is-invalid @enderror" name="cargo" value="{{ old('cargo') }}" required autocomplete="cargo" autofocus>

                                @error('cargo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>


                        <div class="form-group row">
                            <label for="email">{{ __('E-mail') }}</label>

                            
                                <input id="email" type="email" class="campos input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password">{{ __('Senha') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror  campos input" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm">{{ __('Confirmar Senha') }}</label>

                            
                                <input id="password-confirm" type="password" class="campos input form-control" name="password_confirmation" required autocomplete="new-password">
                           
                        </div>

                        <div class="formulario button">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
      

    </div>
  </form>
@endsection