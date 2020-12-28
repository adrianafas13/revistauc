
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador | Unimar Científica</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link  rel="icon" href="/dist/img/logo.png" type="image/png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
  <link href="{{ asset('css/ftp4/admin.css') }}" rel="stylesheet">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" style="background-color:#F6F8FA;">
      <div class="p-4 pt-5">
        <div class="w3-center">
        <a href="/admin"><img src="{{ asset('dist/img/logo.png') }}" alt="logo" style="width:50%;"></a>
        </div>
        <ul class="list-unstyled components mb-5">
          <br><br>
            @hasrole('Admin')
            <li>
              <a href="{{ route('user.index') }}" class="nav-link" style="color: black;"><i class="fas fa-list fa-lg"></i> Lista de Usuarios</a>
            </li>
            @endhasrole
            <li>
              <a type="button" data-toggle="collapse" data-target="#collapseArticulo" aria-expanded="false" aria-controls="collapseArticulo" style="color: black;"><i class="far fa-newspaper fa-lg"></i>  
                Artículos
              </a>
              <div class="collapse" id="collapseArticulo">
                <div class="card card-body">
                  <a class="dropdown-item" style="color: black;" href="{{ route('article.create') }}">Crear</a>
                    <a class="dropdown-item" style="color: black;" href="{{ route('article.index') }}">Ver</a>
                </div>
              </div>
            </li>
            <li>
              <a type="button" data-toggle="collapse" data-target="#collapseCover" aria-expanded="false" aria-controls="collapseCover" style="color: black;"><i class="fas fa-plus-square fa-lg"></i> 
                Portada
              </a>
              <div class="collapse" id="collapseCover">
                <div class="card card-body">
                  <a class="dropdown-item" style="color: black;" href="{{ route('cover.create') }}">Modificar</a>
                    </div>
                  </div>
                </li>
                <li>
                  <a type="button" data-toggle="collapse" data-target="#collapseContacto" aria-expanded="false" aria-controls="collapseContacto" style="color: black;"><i class="fas fa-phone-square-alt fa-lg"></i> 
                    Contáctanos
                  </a>
                  <div class="collapse" id="collapseContacto">
                    <div class="card card-body">
                      <a class="dropdown-item" style="color: black;" href="{{ route('contact.create') }}">Crear</a>
                      <a class="dropdown-item" style="color: black;" href="{{ route('contact.index') }}">Ver</a>
                    </div>
                  </div>
                </li>
                <li>
                  <a type="button" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="false" aria-controls="collapseAbout"style="color: black;"><i class="fas fa-address-card fa-lg"></i> 
                    Nosotros
                  </a>
                  <div class="collapse" id="collapseAbout">
                    <div class="card card-body">
                      <a class="dropdown-item" style="color: black;" href="{{ route('about.create') }}">Crear</a>
                      <a class="dropdown-item" style="color: black;" href="{{ route('about.index') }}">Ver</a>
                    </div>
                  </div>
                </li>
                <li>
                    <a href="{{ route('comments') }}" class="nav-link" style="color: black;"><i class="fas fa-comment-dots fa-lg"></i> Comentarios</a>
                </li>
            </ul>
        </div>
    </nav>
  <!-- Main Sidebar Container -->
<div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid justify-content-end">
                <a href="/" style="font-size: 16px; color: black;"><i class="far fa-arrow-alt-circle-left fa-lg"></i> Regresar a la página</a>
            </div>
        </nav>
<main>
        
 @yield('content')
        </main>
    </div>
  </div>


<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
</body>
</html>