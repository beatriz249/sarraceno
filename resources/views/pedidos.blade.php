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
                    Número do pedido
                </th>
                <th scope="col-" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >Endereço de Entrega</th>
              <!--  <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >Valor</th>
                <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                    Horário
                </th> -->
                <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                    Forma de pagamento
                </th>
                <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                    Nome do cliente
                </th>
                <th scope="col"style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                    Status
                </th>
                <th scope="col" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                    Detalhes do pedido
                </th>
              </tr>
            </thead>
            <tbody>
               
                @foreach($pedidos as $pedido)
              <tr style="text-align: center; color: #fff;">
               
                <th scope="row"style="height:60px; vertical-align:middle!important; ">{{$pedido->id}}</th>
                <td style="height:60px; vertical-align:middle!important;" >{{$pedido->Endereco}}</td>
                <!--<td style="height:60px; vertical-align:middle!important;">{{$pedido->Valor}}</td>
                <td style="height:60px; vertical-align:middle!important;">{{$pedido->created_at->toTimeString()}}</td> -->
                <td style="height:60px; vertical-align:middle!important;">{{$pedido->FormaPagamento}}</td>
                <td style="height:60px; vertical-align:middle!important;">{{$pedido->Cliente}}</td>
                <td style="height:60px; vertical-align:middle!important;">{{$pedido->Status}}</td>
                <td style="height:60px; vertical-align:middle!important;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                    Ver detalhes
                  </button>
                </td>

                   <!-- ABERTURA DO MODAL -->
                   <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Detalhes do pedido</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <h5>NÚMERO DO PEDIDO:</h5>
                          <p>{{$pedido->id}}</p>
                          <h5>PRATOS CONTIDOS</h5>
                          <ol>
                            <li>Macarrão à bolonhesa</li>
                            <li>Rizzotto</li>
                          </ol>
                          <h5>TOTAL</h5>
                          <p> 59,90</p>
                          <h5>STATUS</h5>
                          <button type="button" class="btn btn-warning">Em progresso</button>
  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary">Salvar mudanças</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!--FIM DO MODAL -->
              </tr>
            
            
             
                  @endforeach
               
              </tr>
            </tbody>
          </table>
          
    </body>
</html>
@endsection