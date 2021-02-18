
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Unimar Científica @yield('co-title')</title>
        <link  rel="icon" href="/dist/img/logo.png" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container-fluid">
            <div class="header">
                <div class="row">
                    <!-- header logo -->
                    <div class="col">
                        <div class="logotipo">
                            <img src="{{ asset('dist/img/logotipo.png') }}" alt="logo" width="180px" height="auto">
                        </div>
                    </div>
                    <!-- header icons -->
                    <div class="col">
                        <ul id="iconos">
                            <!-- languaje icon -->
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-globe fa-2x"></i>{{ App::getLocale() }}</i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/lang/es">@lang('data.español')</a>
                                        <a class="dropdown-item" href="/lang/en">@lang('data.ingles')</a>
                                    </div>
                                </div>     
                            </li>
                            <!-- login/singin icon -->
                            @guest
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-circle fa-2x"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            @if (Route::has('register'))
                                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            @endif
                                    </div>
                                </div>
                            </li>

                            @else
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

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
                                </div>
                            </li>
                            @endguest

                        </ul>
                    </div>
                </div>
            </div>
        
            <!-- navbar -->
            <div class="topnav" id="myTopnav">
                
                <div class="dropdown">
                    <button class="dropbtn">Lineas de Investigación
                        <i class="fa fa-caret-down"></i>
                    </button>

                    <div class="dropdown-content">
                        <a href="/seccion/administracion">@lang('data.administracion')</a>
                        <a href="/seccion/arte">@lang('data.arte')</a>
                        <a href="/seccion/idiomas">@lang('data.idiomas')</a>
                        <a href="/seccion/informatica">@lang('data.informatica')</a>
                        <a href="/seccion/derecho">@lang('data.derecho')</a>
                        <a href="/seccion/gerencia">@lang('data.gerencia')</a>
                        <a href="/seccion/historia">@lang('data.historia')</a>
                        <a href="/seccion/salud">@lang('data.salud')</a>
                    </div>
                </div>

                <a href="{{route('articulos')}}">@lang('data.articulos')</a>
                <a href="#contact">@lang('data.autores')</a>
                <a href="{{route('sobrenosotros')}}">@lang('data.informacion')</a>
                    
                <!--search bar -->
                <div class="search-container">
                    <form type="get" action=" {{route('search')}} ">
                        <input type="text" name="query" placeholder="Search..">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                    </form>    
                </div>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                    
            </div>

            <main>
                @yield('content')
            </main>

            <div class="footer">
                <div class="row">
                    <!-- unimar link -->
                    <div class="col-sm">
                        <div class="unimar-link">
                            <a href="http://www.unimar.edu.ve/unimarportal/index.php">
                                <img src="{{ asset('dist/img/white-logo.png') }}" alt="logo blanco" width="180px" height="auto">
                            </a>
                        </div>
                    </div>
                    <!-- contact info -->
                    <div class="col-sm">
                        <div class="info-contact">
                            <p><b>Información de Contacto</p></b>
                            <p>Telefono: 0295 - 2870101<br>
                            Correo: revista.cientifica@unimar.edu.ve<br>
                            Departamento de Postgrado</p>
                            <p><b>2021 &copy Universidad de Margarita</b></p>
                        </div>
                    </div>
                    <!-- social media -->
                    <div class="col-sm">
                        <ul id="social-media">
                            <p><b>Redes Sociales</p></b>
                            <li class="nav-item">
                                <a href=#facebook>
                                    <img src="{{ asset('dist/img/fb-white.png') }}" alt="logo blanco" width="40px" height="auto">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=#twitter>
                                    <img src="{{ asset('dist/img/tw-white.png') }}" alt="logo blanco" width="40px" height="auto">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=#instagram>
                                    <img src="{{ asset('dist/img/ig-white.png') }}" alt="logo blanco" width="40px" height="auto">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
 
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

    </body>
</html>