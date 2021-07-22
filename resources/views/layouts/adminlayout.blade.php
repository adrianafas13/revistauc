<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador | Unimar Científica</title>
  <link  rel="icon" href="/images/logo.png" type="image/png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
  <div class=".container-xl">
    <!------------------------------------------------- NAVBAR ------------------------------------------------------------>
    <nav class="navbar navbar-expand-md sticky-top" id="navbar-admin">
      <!------------------------------------------------- LOGO ------------------------------------------------------------>
      <ul class="navbar-nav">
        <div class="logotipo">
          <a href="{{route('welcome')}}">
            <img src="{{ asset('images/unimar-científica-logo-white.png') }}" alt="logo" width="190px" height="auto">
          </a>
        </div>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="/"><i class="far fa-arrow-alt-circle-left fa-lg"></i> Regresar</a>
        </li>
      </ul>
    </nav>
    <!------------------------------------------------- SIDEBAR ------------------------------------------------------------>
  <div class="sidebar">
    <ul class="nav flex-column">

      <li class="nav-item">
        <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseAuthor" aria-expanded="false" aria-controls="collapseExample">
          <i class="fas fa-pencil-alt fa-lg"></i> Autores
        </a>
        <div class="collapse" id="collapseAuthor">
          <div class="card card-body">
            <a class="dropdown-item" href="{{ route('authors.create') }}">Registrar</a>
            <a class="dropdown-item" href="{{ route('authors.index') }}">Ver Lista</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseArticle" aria-expanded="false" aria-controls="collapseExample">
          <i class="far fa-sticky-note fa-lg"></i> Artículos
        </a>
        <div class="collapse" id="collapseArticle">
          <div class="card card-body">
            <a class="dropdown-item" href="{{ route('article.create') }}">Crear nuevo</a>
            <a class="dropdown-item" href="{{ route('article.index') }}">Ver lista</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseCarousel" aria-expanded="false" aria-controls="collapseExample">
          <i class="fas fa-images fa-lg"></i> Carousel
        </a>
        <div class="collapse" id="collapseCarousel">
          <div class="card card-body">
            <a class="dropdown-item" href="{{ route('carousel.create') }}">Crear nuevo</a>
            <a class="dropdown-item"  href="{{ route('carousel.index') }}">Ver disponibles</a>
          </div>
        </div>
      </li>

      <!--<li class="nav-item">
        <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseSecciones" aria-expanded="false" aria-controls="collapseExample">
          <i class="far fa-newspaper fa-lg"></i> Secciones
        </a>
        <div class="collapse" id="collapseSecciones">
          <div class="card card-body">
            <a class="dropdown-item" href="#">Crear nueva</a>
            <a class="dropdown-item" href="#">Ver disponibles</a>
          </div>
        </div>
      </li>
      -->

      <li class="nav-item">
        <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseEdiciones" aria-expanded="false" aria-controls="collapseExample">
          <i class="far fa-newspaper fa-lg"></i> Ediciones
        </a>
        <div class="collapse" id="collapseEdiciones">
          <div class="card card-body">
            <a class="dropdown-item" href="{{ route('editions.create') }}">Crear nueva</a>
            <a class="dropdown-item" href="{{ route('editions.index') }}">Ver ediciones</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseInformacion" aria-expanded="false" aria-controls="collapseExample">
          <i class="fas fa-info fa-lg"></i> Información
        </a>
        <div class="collapse" id="collapseInformacion">
          <div class="card card-body">
            <a class="dropdown-item" href="#">Añadir</a>
            <a class="dropdown-item" href="{{ route('information.index') }}">Ver disponibles</a>
          </div>
        </div>
      </li>

      @hasrole('Admin')
      <li class="nav-item">
        <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseExample">
          <i class="fas fa-users fa-lg"></i>  Usuarios
        </a>
        <div class="collapse" id="collapseUsuarios">
          <div class="card card-body">
            <a class="dropdown-item" href=" {{ route('user.index') }}">Ver lista</a>
          </div>
        </div>
      </li>
      @endhasrole

    </ul>
  </div>

  <!-- Page content -->
  <div class="content">
    @yield('content')
  </div>

<!------------------------------------------------- SCRIPTS ------------------------------------------------------------>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>