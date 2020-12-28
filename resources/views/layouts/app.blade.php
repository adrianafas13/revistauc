<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unimar Científica</title>
    <link  rel="icon"   href="dist/img/logo.png" type="image/png" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <script src="{{ asset('js/app.js') }}" defer></script>

  <link rel="stylesheet" href="{{ asset('css/w3.css') }}">

  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

   <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

</head>
<body>
<!-- Sidebar (hidden by default) -->
<div class="w3-bar">
  <div class="w3-margin">
    <div style="font-family:'Nirmala UI', sans-serif;font-size:14px, font-weight:400px, color: #707070;">
  <img src="{{ asset('dist/img/logotipo.png') }}" alt="logo" style="width:13%; margin-left: 15px;">
<div class="w3-bar-item w3-right">
  <form type="get" action=" {{route('search')}} ">
    <button class="w3-bar-item w3-button w3-green w3-right" style="margin-top:13px;"><i class="fas fa-search"></i></button>
    <input type="text" name="query" class="w3-bar-item w3-input w3-right " style="margin-top:13px;" placeholder="Buscar Artículo">
  </form>
</div>
   
  @guest
      <div class="w3-dropdown-hover w3-right" style="margin-top:20px;">
        <button class="w3-button"><i class="fa fa-user fa-lg"></i></button>
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a class="w3-bar-item w3-button" href="{{ route('login') }}">{{ __('Login') }}</a>
          @if (Route::has('register'))
            <a class="w3-bar-item w3-button" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
          </div>
      </div>
    @else
      <div class="w3-dropdown-hover w3-right" style="margin-top:20px;">   
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
  <div class="w3-dropdown-hover w3-right" style="margin-top:20px;">
    <button class="w3-button"><i class="fa fa-globe fa-lg"></i>{{ App::getLocale() }}</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a class="w3-bar-item w3-button" href="/lang/es">@lang('data.español')</a>
      <a class="w3-bar-item w3-button" href="/lang/en">@lang('data.ingles')</a>
    </div>
  </div>
  <a href="{{route('contacto')}}" class="w3-bar-item w3-button w3-right" style="margin-top:20px;">@lang('data.contactanos')</a>
  <a href="{{route('sobrenosotros')}}" class="w3-bar-item w3-button w3-right" style="margin-top:20px;">@lang('data.sobre_nosotros')</a>
   <a href="{{route('articulos')}}" class="w3-bar-item w3-button w3-right" style="margin-top:20px;">@lang('data.articulos')</a>
  <a href="/" class="w3-bar-item w3-button w3-right" style="margin-top:20px;">Home</a>
  

 </div>
  </div>
</div>


  <main>
            @yield('content')
          </main>
<!-- Footer -->
<br>
  <footer>
    <div class="w3-center">
      <p><b>Derechos Reservados &copy 2020. Revista Científica. Universidad de Margarita</b></p>
    </div>
  
</footer>
</div>


<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>