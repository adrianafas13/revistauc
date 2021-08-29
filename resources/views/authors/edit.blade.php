@extends('layouts.adminlayout')

@section('content')
<div class=".xl-container">
	<br>
	<h4>Modificación de registro de Autor</h4> 
	<hr>

	<form method="POST" action="/admin/authors/{{$author->id}}" enctype="multipart/form-data">
		<!--Nombre del autor-->
        <input type="hidden" name="_method" value="PUT">
		<div class="row">
			<div class="col-3" id="title-info">
				<p>Nombre:</p>
			</div>
			<div class="col-9">
				<input type="text" required id="name_author" name="name_author" value="{{$author->name_author}}">
			</div>
		</div>
		<!--Apellido del autor-->
		<div class="row">
			<div class="col-3" id="title-info">
				<p>Apellido:</p>
			</div>
			<div class="col-9">
				<input type="text" required id="lastname_author" name="lastname_author" value="{{$author->lastname_author}}">
			</div>
		</div>
		<!--Correo del autor-->
		<div class="row">
			<div class="col-3" id="title-info">
				<p>Correo Electronico:</p>
			</div>
			<div class="col-9">
				<input type="text" required id="email_author" name="email_author" value="{{$author->email_author}}">
			</div>
		</div>
		<!--Imagen del autor
		<div class="row">
			<div class="col-3" id="title-info">
				<p>Foto del Autor:</p>
			</div>
			<div class="col-9">
				<input accept="image/*" required type="file" name="route_image_author" value="route_image_author">
			</div>
		</div>-->
		<!--Español-->
		<br>
		<div class="spanish-backgorund">
			<h5><b>Info en Español</b></h5>
			<hr>
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Titulo Universitario:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="grades_author" name="grades_author" value="{{$author->grades_author}}">
				</div>
			</div>
			<!--Reseña del Autor-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Reseña del Autor:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_author_spanish" name="resume_author" value="{{$author->resume_author}}"></textarea>
				</div>
			</div>
		</div>
		<!--English-->
		<br>
		<div class="english-backgorund">
			<h5><b>Info on English</b></h5>
			<hr>
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Degree:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="en_grades_author" name="en_grades_author" value="{{$author->en_grades_author}}">
				</div>
			</div>
			<!--Reseña del Autor-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Resume of the Author:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_author_english" name="en_resume_author" value="{{$author->en_resume_author}}"></textarea>
				</div>
			</div>
		</div>
		<!--Italian
		<br>
		<div class="italian-backgorund">
			<h5><b>Info en Italiano</b></h5>
			<hr>
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Titulo Universitario:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="it_grades_author" name="it_grades_author" placeholder="Titulo Universitario del Autor">
				</div>
			</div>
			Reseña del Autor
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Reseña del Autorini:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_author_italian" name="it_resume_author"></textarea>
				</div>
			</div>
		</div>
		<br>-->

		@csrf
		<div>
			<input type="submit" name="enviar" value="Guardar">
		</div>

	</form>
</div>



@endsection