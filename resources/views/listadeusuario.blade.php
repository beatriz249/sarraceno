@extends('layouts.template_base')
@section('content')
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <LINK href="css/app.css" rel="stylesheet" type="text/css">
    <head>
        
  <meta charset="UTF-8">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: #000000 !important;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
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
                color: #000000;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .table>tbody>tr>td, .table>tbody>tr>th {
                border-top: 1px solid #C58511;
                background:#000000;
            }

            .btn-primary {
                display: grid;
                color: #fff;
                width: 80%;
                margin: 0 auto;
                background-color: transparent;
                border-color: #C58511;
                text-align: center;
            }
            .btn-primary:hover {
                color: #fff;
                background-color: #C58511;
                border-color: #C58511;
            }
            .btn-primary:active {
                color: #fff;
                background-color: transparent;
                border-color: #C58511
            }
            .btn-primary:focus {
                color: #fff;
                background-color: transparent;
                border-color: #C58511;
                box-shadow: none;
            }
            .modal-content {
                background: #FFFFFF;
                color: black;
                border: solid 2px #C58511;
            }
            .btn-secondary {
                background: #fff;
                color: #E6C081;
                border: #C58511;
            }
            .btn-secondary:hover {
                background: #C58511;
                color: #fff;
                border: #fff;
            }
            .table .thead-dark th {
                background: #000000;
                border-color: #C58511;
                padding-bottom: 25px;
            }
            
            
            
      </style>
    </head>
    <body>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
        <table class="table table-hover table-sm table-dark">
            <thead class="thead-dark">
              <tr>
               
                <th scope="col-3" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                    Número de usuário
                </th>
                <th scope="col-" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >Nome</th>
              <!--  <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >Valor</th>
                <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                    Horário
                </th> -->
                <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                   E-mail
                </th>
                <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                  Cargo
                </th>
                <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                 Data de Registro
               </th>
              </tr>
            </thead>
            <tbody>
               
                @foreach($usuarios as $usuario )
              <tr style="text-align: center; color: #fff;">
               
                <th scope="row"style="height:60px; vertical-align:middle!important; ">{{$usuario->id}}</th>
                <td style="height:60px; vertical-align:middle!important;" >{{$usuario->name}}</td>
               <td style="height:60px; vertical-align:middle!important;">{{$usuario->email}}</td>
               <td style="height:60px; vertical-align:middle!important;">{{$usuario->cargo}}</td>
                <td style="height:60px; vertical-align:middle!important;">{{$usuario->created_at->toDateString()}}</td>
                
               
               

              </tr>
            
            
             
                  @endforeach
               
              </tr>
            </tbody>
          </table>
          
    </body>
</html>
@endsection