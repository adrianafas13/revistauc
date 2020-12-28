@extends('layouts.applayout')
  
@section('content')

@section('content')
<div style="background-color:#EAF0F6;">
<br>
<div class="w3-center">
<h2><b><i>@lang('data.contactanos')</i></b></h2>
<hr>
</div>

<br>
  <div class="w3-row">
    @foreach($contacts as $contact)
    <div class="w3-half w3-container">
      <h3 align="center"><b>{{ App::isLocale('es')?$contact->contact_title:$contact->en_contact_title }}</b></h3>
      <hr>
      <p align="justify" style = "text-indent: 20px">{{App::isLocale('es')?$contact->contact_text:$contact->en_contact_text }}</p>
    </div>
    @endforeach
  </div> 
  <br>
</div>

@endsection