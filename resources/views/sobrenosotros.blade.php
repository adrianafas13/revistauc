@extends('layouts.applayout')
  
@section('content')

@section('content')
<div style="background-color:#EAF0F6;">
<br>
<div class="w3-center">
<h2><b><i>@lang('data.sobre_nosotros')</i></b></h2>
<hr>
</div>
  <div class="w3-row">
    @foreach($abouts as $about)
    <div class="w3-half w3-container">
      <h3 align="center"><b>{{ App::isLocale('es')?$about->about_title:$about->en_about_title }}</b></h3>
      <hr>
      <p align="justify" style = "text-indent: 20px">{{ App::isLocale('es')?$about->about_text:$about->en_about_text }}</p>
    </div>
    @endforeach
  </div> 
  
 <br>
</div> 
@endsection