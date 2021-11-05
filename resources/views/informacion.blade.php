@extends('layouts.applayout')
@section('content')

  <div class="container" >
  <br>
    <h4><b>INFORMACÍON</b></h4>
    <hr>
    <div class="row">

    <div class="col-md-6">
    <br>
        <h6><b>SOBRE LA REVISTA</b></h6>
        <hr>
        <p align="justify">La Revista UNIMAR CIENTÍFICA, será una publicación arbitrada, con proyección de ser indexada, adscrita al Vicerrectorado académico y al  Subsistema de Investigación y Posgrado de la Universidad de Margarita. Difundirá trabajos científicos originales relacionados con las diferentes áreas del conocimiento, con la finalidad de fortalecer la divulgación de saberes,  posibilitar el intercambio entre pares y estimular la producción científica de la región.  Su aparición será semestral.</p>
        <div class="button-article">
					<a href="/files/resena.pdf" type="button" class="btn btn-outline-dark"></i>Reseña Historica</a>
				</div>
        <br>
      </div>
    @foreach ($information as $info)

      <div class="col-md-6">
      <br>
        <h6><b>{{ $info->information_title }}</b></h6>
        <hr>
        <p>{!! $info->information_text !!}</p>

      </div>
      <br>
      @endforeach

      <div class="col-md-6">
      <br>
        <h6><b>NORMATIVAS DE PUBLICACIÓN</b></h6>
        <hr>
        <div class="button-article">
					<a href="/files/resena.pdf" type="button" class="btn btn-outline-dark"></i>Normativas</a>
				</div>
        <br>
      </div>
  </div>
  <br>
</div>
@endsection
