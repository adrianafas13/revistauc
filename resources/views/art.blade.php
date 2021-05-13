
@extends('layouts.applayout')
	@section('co-title')- {{ App::isLocale('es')?$article->title:$article->en_title }}@endsection
@section('content')

<div class="container-fluid">
	<div class="article">

		<div class="row">
			<div class="col-md-2 col-sm-3 text-right" id="content_bar_left">
				<div class="flecha">
					<br>
					<b><h2>▶</h2></b>
				</div>	
				<br>

				<div class="info-container">
					<br>
					<div class="info-article">
					<ul class="section-article" id="container_color">
							<p><b>Sección:</b></p>
							<p>{{ $article->section }}</p>
						</ul>
						<ul class="author-article" id="container_color">
							<p><b>Autor:</b></p>
							<p>{{ $article->author }}</p>
						</ul>
						<ul class="data-article" id="container_color">
							<p><b>Fecha:</b></p>
							<p>{{ $article->created_at }}</p>
						</ul>
							<br>
						
							<br>
					</div>
					<br>
				</div>
			</div>

			<div class="col-md-9 col-sm-3">
				<br>
				<div class="title-article">
					<h2><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></h2>
					<br>
				</div>

				<div class="img-article">
					<img src="/images/{{ App::isLocale('es')?$article->ruta_image:$article->ruta_en_image }}">
				</div>

				<div class="info-img">
					<i><small class="text-muted">información de la imagen</small></i>
				</div>
				<br>
				<div class="resume-article">
					<p><b><i>@lang('data.resumen')</i></b></p>
					<p style="text-indent:20px; align=justify" >{{ App::isLocale('es')?$article->text:$article->en_text }}</p>
				</div>

				@auth
				<div class="full-article">
					<button type="button" class="btn btn-success" href="/files/{{ App::isLocale('es')?$article->ruta_file:$article->ruta_en_file }}"><i class="fas fa-download"></i> @lang('data.descarga')</button>
				</div>
				@endauth
				
			</div>

		</div>

	</div>
</div>


<div class=".container-xl">
	<div class="background-comment">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				@auth
				<div class="comment-area">
					<h5>@lang('data.escribe_comentario')</h5>
					<form action="/comment/{{ $article->id }}" method="POST">
						@csrf
						<textarea type="text" class="form-control" name="comment" placeholder="@lang('data.escribe_comentario')" style="height:70px; width:99%;"></textarea>
						<input class="btn btn-primary" type="submit" value="@lang('data.enviar')">
					</form>
				</div>
				@endauth
				<br>
				<div class="posted-comment-area">

						<h5>@lang('data.seccion_comentarios')</h5>
						<br>
						@foreach($article->comment as $comment)
							<hr>
							<h6>{{ $comment->user->name }}</h6>
							<p><i>{{ $comment->comment }}</i></p>
						@endforeach
				</div>
			</div>
			<div class="col-1"></div>
		</div>
	</div>
</div>

@endsection


