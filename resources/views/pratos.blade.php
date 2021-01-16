@extends('layouts.template_base')
@section('content')
<!DOCTYPE html>
<?php use App\Prato;?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <LINK href="css/app.css" rel="stylesheet" type="text/css">
    <head>
        
  <meta charset="UTF-8">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
          html, body {
              background: #000000 !important;
              color: #ffffff  !important;
              font-family: 'Nunito', sans-serif !important;
              font-weight: 200 !important;
              height: 100vh !important;
              margin: 0 !important;
          }

          .full-height {
              height: 100vh !important;
          }

          .flex-center {
              align-items: center !important;
              display: flex !important;
              justify-content: center !important;
          }

          .position-ref {
              position: relative !important;
          }

          .top-right {
              position: absolute !important;
              right: 10px !important;
              top: 18px !important;
          }

          .content {
              text-align: center !important;
          }

          .title {
              font-size: 84px !important;
          }

          .links > a {
              color: #000000 !important;
              padding: 0 25px !important;
              font-size: 16px !important;
              font-weight: 600 !important;
              letter-spacing: .1rem !important;
              text-decoration: none !important;
              text-transform: uppercase !important;
          }

          .m-b-md {
              margin-bottom: 30px !important;
          }

          .table>tbody>tr>td, .table>tbody>tr>th {
              border-top: 1px solid #C58511 !important;
              background:#000000 !important;
          }

          .{
            max-width:45%;
          }

          .btn-primary {
              display: grid !important;
              color: #fff !important;
              width: 80% !important;
              margin: 0 auto !important;
              background-color: transparent !important;
              border-color: #C58511 !important;
              text-align: center !important;
          }
          .btn-primary:hover {
              color: #fff !important;
              background-color: #C58511 !important;
              border-color: #C58511 !important;
          }
          .btn-primary:active {
              color: #fff !important;
              background-color: transparent !important;
              border-color: #C58511 !important;
          }
          .btn-primary:focus {
              color: #fff !important;
              background-color: transparent !important;
              border-color: #C58511 !important;
              box-shadow: none !important;
          }
          .modal-content {
              background: #E6C081 !important;
          }
          .btn-secondary {
              background: #fff !important;
              color: #E6C081 !important;
              border: #C58511 !important;
          }
          .btn-secondary:hover {
              background: #C58511 !important;
              color: #fff !important;
              border: #fff !important;
          }
          .table .thead-dark th {
              background: #000000 !important;
              border-color: #C58511 !important;
              padding-bottom: 25px !important;
          }

          .botao {
             
              color: #fff !important;
              width: 39% !important;
              margin: 0 auto !important;
              background-color: transparent !important;
              border-color: #C58511 !important;
              text-align: center !important;
              align-content: center !important;
          }
          .botao:hover {
              color: #fff !important;
              background-color: #C58511 !important;
              border-color: #C58511 !important;
          }
          .botao:active {
              color: #fff !important;
              background-color: transparent !important;
              border-color: #C58511 !important;
          }
          .botao:focus {
              color: #fff !important;
              background-color: transparent !important;
              border-color: #C58511 !important;
              box-shadow: none !important;
          }
          .botao2 {
             
             color: #fff !important;
             width: 50% !important;
             margin: 0 auto !important;
             background-color: transparent !important;
             border-color: #C58511 !important;
             text-align: center !important;
             align-content: center !important;
         }
         .botao2:hover {
             color: #fff !important;
             background-color: #C58511 !important;
             border-color: #C58511 !important;
         }
         .botao2:active {
             color: #fff !important;
             background-color: transparent !important;
             border-color: #C58511 !important;
         }
         .botao2:focus {
             color: #fff !important;
             background-color: transparent !important;
             border-color: #C58511 !important;
             box-shadow: none !important;
         }

      </style>
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  
        </head>
    <body>
        

        <?php
          $cont = Prato::count();

        ?>
        <div class="container">
          @if(count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li> {{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif

          @if(\Session::has('success'))
          <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
           
          </div>
          @endif
        </div>
        
        <table id="datatable" class="table table-hover table-sm table-dark">
          <thead class="thead-dark" style="background: #000000 !important;">
            <tr>
             
              <th scope="col-3" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                  Nome do Prato
              </th>
             <th scope="col-3" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                  Descrição
              </th>
             <th scope="col-3" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                  Valor
              </th>
              
             <th scope="col-3" style="text-align: center; font-size: 16px; color: #fff;padding-top:20px;" >
                  Status
              </th>
              
              <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Novo prato</button></th>
            </tr>
          </thead>
          <tbody>
            @if($cont>0)
            @foreach($pratos as $prato)
            <tr style="text-align: center; color: #fff;">
              <th scope="row"style="height:60px; vertical-align:middle!important; font-weight:normal !important">{{$prato->Nome}}</th>
             <th scope="row"style="height:60px; vertical-align:middle!important;font-weight:normal !important ">{{$prato->Descricao}}</th>
             <th scope="row"style="height:60px; vertical-align:middle!important;font-weight:normal !important ">{{$prato->Preco}}</th>
              @if($prato->Status == 0)
              <th scope="row"style="height:60px; width = 50%; vertical-align:middle!important;font-weight:normal !important "> <a href="pratos/desabilitar/{{$prato->id}}" class="btn botao2">Desabilitar</a>
              </th>
              
              @elseif($prato->Status == 1)
              
              <th scope="row"style="height:60px; width = 50%; vertical-align:middle!important;font-weight:normal !important "> <a href="pratos/habilitar/{{$prato->id}}" class="btn botao2">Habilitar</a>
             </th>
                @else
                <th scope="row"style="height:60px; vertical-align:middle!important;font-weight:normal !important "></th>
                @endif

              
                <td class>
                  <button  class="btn botao  edit" data-toggle="modal" data-target="#editModal{{$prato->id}}">
                  Editar
                </button> <button  class="btn botao  delete" data-toggle="modal" data-target="#deleteModal{{$prato->id}}">
                  Excluir 
                </button>
               
                </td>
                
           </tr>
           <!-- Modal Edição de Pratos -->
<div class="modal fade" id="editModal{{$prato->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Prato </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=  "{!! action('PratosController@update',$prato->id) !!}" method="POST" id="editForm">
        {{ csrf_field()}}
        {{method_field('PUT')}}
      <div class="modal-body">
        
          <div class="form-group">
            <label >Nome do prato</label>
            <input type="text" id="nomedoprato" class="form-control" name="nomedoprato">
          
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <input type="text" id="Descricao" class="form-control" name="Descricao">
          </div>
          <div class="form-group">
            <label>Preço</label>
            <input type="text" id="Valor" class="form-control" name="Valor">
          </div>
         
        <!-- <p><button onclick="myFunction()"><div id="myDIV">Habilitado</div></button></p>

          <script>
            function myFunction() {
              var x = document.getElementById("myDIV");
              if (x.innerHTML === "Habilitado") {
                x.innerHTML = "Desabilitado";
               
              } else  {
                x.innerHTML = "Habilitado";
              }
            </script>
            </div>
          --}}-->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" href="/pratos/">Salvar alterações</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </form>
    </div>
  </div>
</div>
                  <!--FIM DO MODAL DE EDIÇÃO DE PRATOS -->




                           <!-- Modal Exclusão de Pratos -->
<div class="modal fade" id="deleteModal{{$prato->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=  "{!! action('PratosController@destroy',$prato->id) !!}" method="POST" id="deleteForm">
        {{ csrf_field()}}
        {{method_field('DELETE')}}
      <div class="modal-body">
        
        <input type="hidden" name="_method" value="DELETE">

        <p>Deseja excluir este prato?</p>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" href="/pratos/">Excluir</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </form>
    </div>
  </div>
</div>
                  <!--FIM DO MODAL DE EXCLUSÃO DE PRATOS -->


                     
            @endforeach
            @else
            <tr  scope="row"><td style="text-align: center"> Não há pratos cadastrados. </td><td></td><td></td><td></td> <td></td></tr>
              @endif
            
            
          </tbody>
        </table>
              


                  <!-- ABERTURA DO MODAL DE ADIÇÃO DE PRATOS -->
                
                <!-- Button trigger modal -->


<!-- Modal Adição de Pratos -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Prato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{action('PratosController@store')}}" method="POST">
        {{ csrf_field()}}
      <div class="modal-body">
        
          <div class="form-group">
            <label >Nome do prato</label>
            <input type="text" class="form-control" name="nomedoprato">
          
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" name="Descricao">
          </div>
          <div class="form-group">
            <label>Preço</label>
            <input type="text" class="form-control" name="Valor">
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control" name="Status">
          </div>
        {{-- <p><button onclick="myFunction()"><div id="myDIV">Habilitado</div></button></p>

          <script>
            function myFunction() {
              var x = document.getElementById("myDIV");
              if (x.innerHTML === "Habilitado") {
                x.innerHTML = "Desabilitado";
               
              } else  {
                x.innerHTML = "Habilitado";
              }
            </script>
            </div>
          --}}
      </div>
      <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Salvar prato</button>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </form>
    </div>
  </div>
</div>
                  <!--FIM DO MODAL ADIÇÃO DE PRATOS -->


                 
                  
               
              
         
          <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
          <script type="text/javascript">
            $(document).ready(function(){
          
              var table = $('#datatable').DataTable();
          
              //Start Edit Record
              table.on('click', '.edit', function(){
          
                  $tr = $(this).closest('tr');
                    if($($tr).hasClass('child')){
                        $tr = $tr.prev('.parent');
                    }
                    var data = table.row($tr).data();
                    console.log(data);
          
                    $('#nomedoprato').val(data[1]);
                    $('#decricao').val(data[2]);
                    $('#valor').val(data[3]);
                    $('#status').val(data[4]);
          
                    $('#editForm').attr('action', '/pratos/'+data[0]);
                    $('#editModal').modal('show');
              });
            
              //End Edit Record

               //Start Delete Record
               table.on('click', '.delete', function(){
          
          $tr = $(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();
            console.log(data);
  
            $('#deleteForm').attr('action', '/pratos/'+data[0]);
            $('#deleteModal').modal('show');
      });
    
      //End Delete Record

            });   
          </script>
@endsection   
     
    </body>
    </html>
    
