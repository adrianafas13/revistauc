@extends('layouts.applayout')
@section('content')
<br>
<div class="main">
  <div class="container" >
  <h3><b>INFORMACÍON</b></h3>
    <hr>

    <div class="row">
    <div class="col-md-6">
          <h5>¿Quienes somos?</h5>
          <hr>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <div class="col-md-6">
          <h5>Comité editor</h5>
          <hr>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>

      @foreach($contacts as $contact)
        <div class="col-md-6">
          <h5>{{ App::isLocale('es')?$contact->contact_title:$contact->en_contact_title }}</h5>
            <hr>
            <p>{{App::isLocale('es')?$contact->contact_text:$contact->en_contact_text }}</p>
        </div>
        @endforeach

        

    </div>

  </div>
</div>
@endsection