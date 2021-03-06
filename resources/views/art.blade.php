
@extends('layouts.applayout')
	@section('co-title')- {{ App::isLocale('es')?$article->title:$article->en_title }}@endsection
@section('content')

<div class=".container-xl">
	<div class="article">

		<div class="row">
			
			<div class="col-sm-9">
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
					<div class="container">
						<p><b><i>@lang('data.resumen')</i></b></p>
						<p style="text-indent:20px; align=justify" >{{ App::isLocale('es')?$article->text:$article->en_text }}</p>
					</div>
				</div>

				@auth
				<div class="button-article">
					<button type="button" class="btn btn-success" href="/files/{{ App::isLocale('es')?$article->ruta_file:$article->ruta_en_file }}"><i class="fas fa-download"></i> @lang('data.descarga')</button>
				</div>
				@endauth

				<br>
			</div>

			<div class="col-sm-3" id="content_bar_right">
				<div class="content">
					<br>

					<h6><b>Información del Autor</b></h6>
					<hr>
					<img src="/images/perfil.jpg">
					<br>

					<div class="info-container">

						<ul class="author-article" >
							<p><b>{{ $article->author }}</b></p>
							<p>Br. en Ciencias Sociales</p>
							<p><b>Contacto: </b> juan@gmail.com</p>
						</ul>

						<ul class="bio-author" >
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat".</p>
						</ul>

						<br>
						<ul class="section-article" >
							<p><b>@lang('data.seccion'): </b> {{ $article->section }}</p>
						</ul>

						<ul class="data-article" >
							<p><b>@lang('data.fecha'): </b> {{ $article->created_at }}</p>
						</ul>
									
					</div>
					
				</div>
			</div>

		</div>

	</div>
</div>


<div class=".container-xl">
	<div class="article-comments">
		<div class="background-comment">

			<div class="row">
				<div class="col-2"></div>

				<div class="col-8">
					<div class="comment-header">
						@if (Auth::check())
							<div class="comment-area">
								<p><b>@lang('data.escribe_comentario')</b></p>
								<div class="gradiente">
									<p><b>///////////////////</b></p>
								</div>
								<form action="/comment/{{ $article->id }}" method="POST">
									@csrf
									<textarea type="text" class="form-control" name="comment" placeholder="@lang('data.escribe_comentario')" style="height:70px; width:99%;"></textarea>
									<input class="btn btn-primary" type="submit" value="@lang('data.enviar')">
								</form>
							</div>
						@else
							<div class="title-comment-section">
								<p><b>@lang('data.seccion_comentarios')</b></p>
								<div class="gradiente">
									<p><b>/////////////</b></p>
								</div>
								<div class="inivtacion">
									<p>Para publicar un comentario inicia sesión</p>
								</div>
							</div>
						@endif
					</div>
					
					<div class="posted-comment-area">
						@foreach($article->comment as $comment)
							<hr>
								<div class="user-name-comment">
									<img src="/images/uni.png">
									<p><b>{{ $comment->user->name }}</b></p>
								</div>
								<div class="user-comment">
									<p>{{ $comment->comment }}</p>
								</div>
							@endforeach
						<hr>
					</div>

				</div>

				<div class="col-2"></div>
			</div>
			
		</div>
	</div>
</div>

@endsection


