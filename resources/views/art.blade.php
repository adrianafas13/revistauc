@extends('layouts.applayout')

@section('co-title')- {{ App::isLocale('es')?$article->title:$article->en_title }}@endsection
@section('content')
<br><br><br>
<div class="w3-row">
	<div class="w3-half w3-container">
		<img src="/images/{{ App::isLocale('es')?$article->ruta_image:$article->ruta_en_image }}" style="width:100%; height: 400px">
	</div>
	<div class="w3-half w3-container">
		<div class="w3-container w3-serif w3-center">
			<b><h2><i>{{ App::isLocale('es')?$article->title:$article->en_title }}</i></h2></b>
		</div>
		<div class="w3-container w3-margin-bottom w3-margin-left">
			<div class="w3-left-align"><i>
				<p><b>{{ $article->author }}</b></p>
				<p>{{ $article->section }}</p>
				<p>{{ $article->created_at }}</p>
				</i><br>
			</div>
			@auth
			<div class="w3-container w3-center">
				<a href="/files/{{ App::isLocale('es')?$article->ruta_file:$article->ruta_en_file }}" class="w3-button w3-green"><i class="fas fa-download"></i> @lang('data.descarga')</a>	
			</div>
			@endauth
		</div>
	</div>
</div>
<div class="w3-container w3-light-gray w3-serif w3-margin">
	<div class="w3-center">
		<h4><b><i>@lang('data.resumen')</i></b></h4>
	</div>
	<div class="w3-margin">
		<p align="justify" style="text-indent:20px" >{{ App::isLocale('es')?$article->text:$article->en_text }}</p>
	</div>
</div>
@auth
<div class="w3-container">
	<div class="w3-row" style="margin-top: 20px;">
		<div class="col-12" style="text-indent: 20px">
			<h4><b>@lang('data.escribe_comentario')</b></h4>
		</div>
		<form action="/comment/{{ $article->id }}" method="POST">
			@csrf
			<div class="w3-row">
			  <div class="w3-col" style="width:95%">
			  	<textarea type="text" class="form-control" name="comment" placeholder="@lang('data.escribe_comentario')" style="height:70px; width:99%;"></textarea>
			  </div>
			  <div class="w3-col" style="width:5%">
			  	<input class="w3-button w3-blue" style="height:70px;" type="submit" value="@lang('data.enviar')">
			  </div>
			</div>
				
			
		</div>
		</form>
	</div>
</div>
<hr>
@endauth
<div class="w3-container px-4">
	<div class="w3-row" style="margin-top: 20px;">
		<div class="col-12" style="text-indent: 20px">
			<h4><b>@lang('data.seccion_comentarios')</b></h4>
		</div>
    	@foreach($article->comment as $comment)
		<div class="col-12" style="padding-left: 20px;">
			<h6 style="font-size: 17px; text-indent: 30px;"><i>{{ $comment->user->name }}</i></h6>
			<p style="padding-left: 18px; text-indent: 35px;">
			{{ $comment->comment }}
			<hr>
			</p>
		</div>
		@endforeach
	</div>
</div>
@endsection
