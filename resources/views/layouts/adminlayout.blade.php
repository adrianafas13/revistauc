<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador | Unimar Científica</title>
    <link  rel="icon" href="/images/rcu-orange-isotype.png" type="image/png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
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
            <a href="{{ route('admin')}}"> 
            <img src="{{ asset('/images/rcu-yellow-logo.png') }}" alt="logo">
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
      <ul class="nav flex-column list-group-flush" id="barra-admin">

        <li class="nav-item">  
          <a class="nav-link" type="button" href="{{ route('editions.index') }}">
            <div class="content-bar">
              <i class="far fa-newspaper fa-lg"></i>
              <p>Ediciones</p>
            </div>
          </a>  
        </li>
      
        <li class="nav-item">
          <a class="nav-link" type="button" href="{{ route('authors.index') }}">
            <div class="content-bar">
              <i class="fas fa-pencil-alt fa-lg"></i> 
              <p>Autores</p>
            </div>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" type="button" href="{{ route('areas.index') }}">
            <div class="content-bar">
              <i class="fas fa-atom"></i> 
              <p>Áreas</p>
            </div>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" type="button" href="{{ route('article.index') }}">
            <div class="content-bar">
              <i class="far fa-sticky-note fa-lg"></i> 
              <p>Artículos</p>
            </div>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" type="button" href="{{ route('notices.index') }}">
            <div class="content-bar">
              <i class="fas fa-bell"></i> 
              <p>Avisos</p>
            </div>
          </a>
        </li>

        

        <li class="nav-item">
          <a class="nav-link" type="button "href="{{ route('information.index') }}">
            <div class="content-bar">
              <i class="fas fa-info fa-lg"></i> 
              <p>Información</p>
            </div>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" type="button" href="{{ route('comments') }}">
            <div class="content-bar">
              <i class="fas fa-images fa-lg"></i> 
              <p>Comentarios</p>
            </div>
          </a>
        </li>

        @hasrole('Admin')
        <li class="nav-item">
          <a class="nav-link" type="button" href=" {{ route('user.index') }}">
            <div class="content-bar">
              <i class="fas fa-users fa-lg"></i>  
              <p>Usuarios</p>
            </div>
          </a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    
  </body>
</html>