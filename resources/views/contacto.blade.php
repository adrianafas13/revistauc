@extends('layouts.applayout')
@section('content')
<br>
<div class="main">
  <div class="container" >
    <h3>@lang('data.contacto')</h3>
    <hr>

    <div class="row">

      @foreach($contacts as $contact)
        <div class="col-md-6">
          <h5>{{ App::isLocale('es')?$contact->contact_title:$contact->en_contact_title }}</h5>
            <hr>
            <p>{{App::isLocale('es')?$contact->contact_text:$contact->en_contact_text }}</p>
        </div>
        @endforeach

        <div class="col-md-6">
          
        </div>

    </div>

  </div>
</div>
@endsection