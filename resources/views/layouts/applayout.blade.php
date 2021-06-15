
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Unimar Científica @yield('co-title')</title>
        <link  rel="icon" href="/images/unimar-científica.png" type="image/png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>

    <body>
        <div class=".container-xl">
            <!------------------------------------------------- NAVBAR ------------------------------------------------------------>
            <nav class="navbar navbar-expand-md sticky-top">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                   <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="collapse_target">
                <!------------------------------------------------- LOGO ------------------------------------------------------------>
                    <ul class="navbar-nav">
                        <div class="logotipo">
                            <a href="{{route('welcome')}}">
                                <img src="{{ asset('images/unimar-científica-logo-white.png') }}" alt="logo" width="190px" height="auto">
                            </a>
                        </div>
                    </ul>
                    <!------------------------------------------------- ENLACES ------------------------------------------------------------>
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdown_target" href="#">
                                @lang('data.secciones')
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" id="lineas" arial-labelledby="dropdown_target">
                                <a class="dropdown-item" href="/seccion/administracion">@lang('data.administracion')</a>
                                <a class="dropdown-item" href="/seccion/arte">@lang('data.arte')</a>
                                <a class="dropdown-item" href="/seccion/idiomas">@lang('data.idiomas')</a>
                                <a class="dropdown-item" href="/seccion/informatica">@lang('data.informatica')</a>
                                <a class="dropdown-item" href="/seccion/derecho">@lang('data.derecho')</a>
                                <a class="dropdown-item" href="#">@lang('data.educacion')</a>
                                <a class="dropdown-item" href="/seccion/gerencia">@lang('data.gerencia')</a>
                                <a class="dropdown-item" href="/seccion/historia">@lang('data.historia')</a>
                                <a class="dropdown-item" href="/seccion/salud">@lang('data.salud')</a>
                                <a class="dropdown-item" href="#">@lang('data.turismo')</a>
                            </div>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link"  href="{{route('autores')}}">@lang('data.autores')</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="{{route('articulos')}}">@lang('data.ediciones')</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="{{route('contacto')}}">@lang('data.contacto')</a>
                        </li>
                        <!------------------------------------------------- BUSCADOR ------------------------------------------------------------>
                        <li class="navbar-item dropdown" id="icons">
                            <button class="btn dropdown-toggle" type="button" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-search fa-fw"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownSearch">
                                <form class="px-4 py-3" type="get" action=" {{route('search')}} ">
                                    <input class="input" type="text" name="query" placeholder="@lang('data.buscar')...">
                                    <button type="submit" class="btn btn-success">@lang('data.buscar')</button>
                                </form>
                            </div>
                        </li>
                        <!------------------------------------------------- ICONOS DE IDIOMAS ------------------------------------------------------------>                            
                        <li class="navbar-item dropdown" id="icons"> 
                            <button class="btn dropdown-toggle" type="button" id="dropdownLanguajeButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe fa-fw">{{ App::getLocale() }}</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownLanguajeButton">
                                <a class="dropdown-item" href="/lang/es"> <img src="{{ asset('images/spanish.png') }}" alt="lang" width="16px" height="auto"> @lang('data.español')</a>
                                <a class="dropdown-item" href="/lang/en"> <img src="{{ asset('images/english.png') }}" alt="lang" width="16px" height="auto"> @lang('data.ingles')</a>
                                <a class="dropdown-item" href="/lang/it"> <img src="{{ asset('images/italy.png') }}" alt="lang" width="16px" height="auto"> @lang('data.italiano')</a>
                            </div>
                        </li>
                        <!------------------------------------------------- USUARIO ------------------------------------------------------------>
                        @guest
                        <li class="nav-item dropdown" id="icons">
                            <button class="btn dropdown-toggle" type="button" id="dropdownSingin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle fa-fw"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownSingin">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal">@lang('data.iniciar_sesion')</a>
                                    @if (Route::has('register'))
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#singinModal">@lang('data.registro')</a>
                                    @endif
                            </div>
                        </li>

                        @else
                        <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownSingUp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} 
                                <span class="caret">
                            </button>

                            <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownSingUp">

                                @hasrole('Admin')
                                    <a class="dropdown-item" href="{{ route('admin') }}">Panel de Administrador</a>
                                @endhasrole

                                @hasrole('comment_admin')
                                    <a class="dropdown-item" href="{{ route('admin') }}">Panel de Administrador</a>
                                @endhasrole

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                            </div>

                        </li>
                        @endguest

                    </ul>

                </div>

            </nav>

       
            <!------------------------------------------------- CONTENIDO ------------------------------------------------------------>       
            <main>
                @yield('content')
            </main>
            <!------------------------------------------------- FOOTER ------------------------------------------------------------>

            <div class="footer col-sm-12">
                <div class="row">
                    <!------------------------------------------------- ENLACE DE UNIMAR ------------------------------------------------------------>
                    <div class="col-sm">
                        <div class="unimar-link">
                            <a href="http://www.unimar.edu.ve/unimarportal/index.php">
                                <img src="{{ asset('images/white-logo.png') }}" alt="logo blanco" width="150px" height="auto">
                            </a>
                        </div>
                    </div>
                    <!------------------------------------------------- INFORMACÍON ------------------------------------------------------------>
                    <div class="col-sm">
                        <div class="info-contact">
                            <p><b>@lang('data.info_contacto')</p></b>
                            <p>@lang('data.telefono'): 0295 - 2870101<br>
                            @lang('data.correo'): revista.cientifica@unimar.edu.ve<br>
                            @lang('data.postgrado')</p>
                            <p><b>2021 &copy Universidad de Margarita</b></p>
                        </div>
                    </div>
                    <!------------------------------------------------- REDES SOCIALES ------------------------------------------------------------>
                    <div class="col-sm">
                        <ul id="social-media">
                            <p><b>@lang('data.redes_sociales')</p></b>
                            <li class="nav-item">
                                <a href=#facebook>
                                    <img src="{{ asset('images/fb-white.png') }}" alt="logo blanco" width="40px" height="auto">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=#twitter>
                                    <img src="{{ asset('images/tw-white.png') }}" alt="logo blanco" width="40px" height="auto">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=#instagram>
                                    <img src="{{ asset('images/ig-white.png') }}" alt="logo blanco" width="40px" height="auto">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    <!------------------------------------------------- SCRIPTS ------------------------------------------------------------>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @include('auth.login')
    @include('auth.register')
    </body>
</html>