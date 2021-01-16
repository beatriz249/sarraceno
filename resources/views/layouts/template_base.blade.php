<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>Sarraceno</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #000000; border-right: solid 1px #FFFFFF31" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class=" d-flex align-items-center justify-content-center" style="padding-top:10px;padding-bottom:10px;" href="index.html">
        <div class="sidebar-brand-icon" >
          <img  width="150px" height="100px" src="img/logosarraceno.png"/>
        </div></a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" >

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/pedidos">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span style="font-size: 14.5px; font-weight:bold;">Ver pedidos</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     

      <!-- Nav Item - Página de cadastro de alunos -->
      <li class="nav-item">
        <a class="nav-link" href="/register">
          <i class="fas fa-user-plus"style="color:white;"></i>
          <span style="font-size: 14.5px; font-weight:bold;">Cadastro de usuário</span></a>
      </li>
  
      <!-- Nav Item - Página banco de dados dos alunos -->
      <li class="nav-item">
        <a class="nav-link" href="/usuarios">
          <i class="fas fa-users" style="color:white;"></i>
          <span style="font-size: 14.5px; font-weight:bold;">Usuários</span></a>
      </li>

      <!-- Nav Item - Consulta CNH -->
      <li class="nav-item">
        <a class="nav-link" href="/pedidos">
          <i class="fas fa-book-open" style="color:white;"></i>
          <span style="font-size: 14.5px ; font-weight:bold;">Pedidos</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pratos">
          <i class="fas fa-utensils" style="color:white;"></i>
          <span style="font-size: 14.5px ; font-weight:bold;">Pratos</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/avaliacao">
          <i class="fas fa-star-half-alt" style= "color:white;"></i>
          <span style="font-size: 14.5px ; font-weight:bold;">Avaliações</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login1">
          <i class="fas fa-sign-in-alt" style="color:white;"></i>
          <span style="font-size: 14.5px ; font-weight:bold;">Login</span></a>
      </li>

      

      <!-- Heading -->
      <div class="sidebar-heading" style="font-size: 12.5px">
        
      </div>


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

   
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column" style="background:#000000;">
      <!-- Main Content -->
      <div id="content">
      
      @yield('content')
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-black">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; CONSELT 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <script defer src="js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script defer src="js/sb-admin-2.js"></script>

</body>

</html>
