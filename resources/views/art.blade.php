<style>
/*------------------ARTICLE STRUCTURE-------------------------*/
.col-3 h2{
	text-align:right;
}
.title-article{
	text-align:center;
}
.img-article{
	display:flex;
	margin-left:auto;
	margin-right:auto;
	width:85%;
	height: 500px;
}
.info-img{
	text-align:right;
	padding-right: 80px;
}
.resume-article{
	padding-top: 50px;
	padding-right: 100px;
	padding-left: 100px;
	padding-bottom: 20px;

}
.full-article{
	padding-left: 40%;
	padding-bottom: 35px;
}
.info-article{
	background-color:#EBE9E8;
	padding-top: 20px;
	padding-right: 20px;
	padding-bottom: 195px;
	text-align:right;
}

.background-comment{
	background-color:#EBE9E8;
	padding-top: 20px;
}
.comment-area input{
	float:right;
	margin-right: 9px;
	margin-top: 5px;
}

.posted-comment-area p{
	margin-left:15px;
}

</style>


@extends('layouts.applayout')
@section('co-title')- {{ App::isLocale('es')?$article->title:$article->en_title }}@endsection
@section('content')

<br>
	<div class="row">

  		<div class="col-3">
			  <b><h2>►</h2></b>
		</div>

		<div class="col-9">
			<div class="title-article">
				<b><h2>{{ App::isLocale('es')?$article->title:$article->en_title }}</h2></b>
			</div>
			<br>
		</div>

	</div>



	<div class="row">
  		<div class="col-3">
			<div class="info-article">
				<ul class="date-article">
					<p><b>Fecha</b></p>
					<p>{{ $article->created_at }}</p>
				</ul>
				<br>
				<ul class="section-article">
					<p><b>Sección</b></p>
					<p>{{ $article->section }}</p>
				</ul>
				<br>
				<ul class="author-article">
					<p><b>Autor</b></p>
					<p>{{ $article->author }}</p>
				</ul>
				<br>
			</div>	
  		</div>


		<div class="col-9">

			<div class="img-article">
				<img src="/images/{{ App::isLocale('es')?$article->ruta_image:$article->ruta_en_image }}">
			</div>

			<div class="info-img">
				<i><small class="text-muted">información de la imagen</small></i>
			</div>
			
			<div class="resume-article">
				<h4><b><i>@lang('data.resumen')</i></b></h4>
				<p style="text-indent:20px; align=justify" >{{ App::isLocale('es')?$article->text:$article->en_text }}</p>
			</div>

			@auth
			<div class="full-article">
				<button type="button" class="btn btn-success" href="/files/{{ App::isLocale('es')?$article->ruta_file:$article->ruta_en_file }}"><i class="fas fa-download"></i> @lang('data.descarga')</button>
			</div>
			@endauth
			
		</div>

	</div>


<div class="container-fluid">
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


