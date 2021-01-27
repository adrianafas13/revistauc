<style>
/* Add a black background color to the top navigation */
.topnav {
  background-color: #336699;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: right;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
.topnav .search-container {
  float: right;
  background-color:white;
  border-radius:55px;
  width:282px;
  height:38px;
  margin-right: 16px;
  margin-top: 7px;
}

.topnav input[type=text] {
  padding: 7px 25px;
  margin-top: 1px;
  margin-right: 2px;
  font-size: 15px;
  border-radius: 55px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 12px 12px;
  background: #A8EA7C;
  font-size: 14px;
  border-radius: 18px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #303030;
  color: #fff;
}

.w3-bar .icon a { 
    color:#303030;
    background-color: white;
}

.w3-bar .icon a:hover { 
    color:#336699;
    background-color:red;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 8px;
  }

}
</style>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Unimar Científica @yield('co-title')</title>

  <link  rel="icon" href="/dist/img/logo.png" type="image/png" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="{{ asset('js/app.js') }}" defer></script>

  <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

   <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

</head>
<body>

    <div class="w3-bar">
        <div class="w3-margin">
            <div class="w3-left">
                <div class="icon">
                    <a class="w3-button" style="margin-top:10px;">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a class="w3-button" style="margin-top:10px;">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a class="w3-button" style="margin-top:10px;">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>  
                </div>
            </div>

            <div class="w3-center">
                <img src="{{ asset('dist/img/logotipo.png') }}" alt="logo" style="width:13%; align=center;">

            <div class="w3-right">
            <div class="icon">
            @guest

                <div class="w3-dropdown-hover" style="margin-top:10px;">
                    <button class="w3-button"><i class="fas fa-user-circle fa-2x"></i></button>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                            <a class="w3-bar-item w3-button" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="w3-bar-item w3-button" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                        </div>
                </div>

                @else
                <div class="w3-dropdown-hover w3-right" style="margin-top:24px;">   
                    <button class="w3-button">{{ Auth::user()->name }} <span class="caret"></span></button>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">

                            @hasrole('Admin')
                                <a class="w3-bar-item w3-button" href="{{ route('admin') }}">Panel de Administrador</a>
                            @endhasrole

                            @hasrole('comment_admin')
                                <a class="w3-bar-item w3-button" href="{{ route('admin') }}">Panel de Administrador</a>
                            @endhasrole

                                <a class="w3-bar-item w3-button" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                        </div>
                </div>
            @endguest

            <div class="dropdown" style="margin-top:7px;">
                <button class="dropbtn" style="color:black;"><i class="fa fa-globe fa-lg"></i>{{ App::getLocale() }}</i></button>
                    <div class="dropdown-content w3-bar-block w3-card-4">
                        <a href="/lang/es">@lang('data.español')</a>
                        <a href="/lang/en">@lang('data.ingles')</a>
                    </div>
            </div>
        </div>
        </div>

        </div> 

    </div>

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

        <a href="#news">Ediciones</a>
        <a href="#contact">Autores</a>
        <a href="#about">Información</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>

        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
            </form>    
        </div>
        
    </div>

    <main>
    @yield('content')
    </main>

    <div class="footer" style="padding:3px; background-color:#336699;">
        <div class="w3-center">
            <p><b>Derechos Reservados &copy 2020. Revista Científica. Universidad de Margarita</b></p>
        </div>
    </div>


<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
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