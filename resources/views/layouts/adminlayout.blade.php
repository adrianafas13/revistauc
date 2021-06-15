<style>
.navbar{
  background-color: #003366;
  font-size: 15px;
  display:flex;
  align-items:center;
  justify-content: space-between;
  height: 60px;
}
.navbar a{color:#fff;}
.navbar a:hover{color:#fff;}
#sidebar {margin-top: 60px;
  
 }
ul {
  
    display: block;
    list-style-type: disc;
    margin-block-start: 5em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;

}
#sidebar ul li a {
  
    color: #303030;

}
#sidebar ul li a:hover {
  background-color: #303030; 
    color:#fff;

}

</style>


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
        
 <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}">-->
</head>

<body>
  <nav class="navbar fixed-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0">Revista Cientifica</a>
    

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="/"><i class="far fa-arrow-alt-circle-left fa-lg"></i> Regresar</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar" id="sidebar">
        <div class="siebar-sticky">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Divisior de items</span>
          </h6>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseAuthor" aria-expanded="false" aria-controls="collapseExample">
                <i class="far fa-newspaper fa-lg"></i> Autores
              </a>
              <div class="collapse" id="collapseAuthor">
                <div class="card card-body">
                  <a class="dropdown-item" href="#">Registrar</a>
                  <a class="dropdown-item" href="#">Ver lista</a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseArticle" aria-expanded="false" aria-controls="collapseExample">
                <i class="far fa-newspaper fa-lg"></i> Artículos
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
                <i class="far fa-newspaper fa-lg"></i> Carousel
              </a>
              <div class="collapse" id="collapseCarousel">
                <div class="card card-body">
                  <a class="dropdown-item" href="#">Crear nuevo</a>
                  <a class="dropdown-item" href="#">Ver disponibles</a>
                </div>
              </div>
            </li>

            <li class="nav-item">
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

            <li class="nav-item">
              <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseEdiciones" aria-expanded="false" aria-controls="collapseExample">
                <i class="far fa-newspaper fa-lg"></i> Ediciones
              </a>
              <div class="collapse" id="collapseEdiciones">
                <div class="card card-body">
                  <a class="dropdown-item" href="#">Crear nueva</a>
                  <a class="dropdown-item" href="#">Ver ediciones</a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseInformacion" aria-expanded="false" aria-controls="collapseExample">
                <i class="far fa-newspaper fa-lg"></i> Información
              </a>
              <div class="collapse" id="collapseInformacion">
                <div class="card card-body">
                  <a class="dropdown-item" href="#">Añadir</a>
                  <a class="dropdown-item" href="#">Ver disponibles</a>
                </div>
              </div>
            </li>

            
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Permisos de la web</span>
          </h6>

          <ul class="nav flex-column mb-2">
            @hasrole('Admin')
            <li class="nav-item">
              <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseExample">
                <i class="far fa-newspaper fa-lg"></i> Usuarios
              </a>
              <div class="collapse" id="collapseUsuarios">
                <div class="card card-body">
                  <a class="dropdown-item" href="{{ route('user.index') }}">Ver lista</a>
                </div>
              </div>
            </li>
            @endhasrole
            
            <li class="nav-item">
              <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseComentarios" aria-expanded="false" aria-controls="collapseExample">
                <i class="far fa-newspaper fa-lg"></i> Comentarios
              </a>
              <div class="collapse" id="collapseComentarios">
                <div class="card card-body">
                  <a class="dropdown-item" href="{{ route('comments') }}">Revisar</a>
                </div>
              </div>
            </li>


          </ul>


        </div>
      </nav>
      <div class="col-md-10">
        @yield('content')
      </div>
    </div>
  </div>
 



<!--
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
  --- Main Sidebar Container ----
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
  -->

<!------------------------------------------------- SCRIPTS ------------------------------------------------------------>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>