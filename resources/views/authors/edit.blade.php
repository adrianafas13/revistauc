@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
	<div class=".xl-container">
	<br>

		<div class="title-color">
			<h5><b>Modificar al Autor</b></h5>
		</div>
		
		<br>

		<form method="POST" action="/admin/authors/{{$author->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">

			<div class="general-title">
				<h5><b>Información General:</b></h5>
			</div>
			
			<!--Nombre del autor-->
			<div class="general-input">
				<h6><b>Apellido y nombre:</b></h6>
				<input type="text" required id="name_author" name="name_author" value="{{$author->name_author}}">
			</div>
		
			<!--Correo del autor-->
			<div class="general-input">
				<h6><b>Correo Electronico:</b></h6>
				<input type="text" required id="email_author" name="email_author" value="{{$author->email_author}}">
			</div>
			
			<!--Imagen del autor-->
			<div class="general-input">
				<h6><b>Foto del Autor:</b></h6>
				<input id="button-add" accept="image/*" required type="file" name="image_author" value="{{$author->image_author}}">
			</div>
			
			<br>

			<!--Español-->

			<div class="title-color-languaje">
				<h5><b>Información del autor en Español</b></h5>
			</div>
			
			<!--Universidad ó instituto en español-->
			<div class="general-input">
				<h6><b>Universidad / Institución:</b></h6>
				<input type="text" required id="grades_author" name="grades_author" value="{{$author->grades_author}}">
			</div>

			<!--Reseña del Autor-->
			<div class="general-input">
				<h6><b>Reseña del autor:</b></h6>
				<textarea id="summernote_author_spanish" name="resume_author">{!! $author->resume_author !!}</textarea>
			</div>

			<br>
			
			<!--English-->
			<div class="title-color-languaje">
				<h5><b>Information about the autor in English</b></h5>
			</div>

			<!--College-->
			<div class="general-input">
				<h6><b>University/ College:</b></h6>
				<input type="text" required id="en_grades_author" name="en_grades_author" value="{{$author->en_grades_author}}">
			</div>

			<!--Resume of the Autor-->
			<div class="general-input">
				<h6><b>Resume of the Author:</b></h6>
				<textarea id="summernote_author_english" name="en_resume_author">{!! $author->en_resume_author!!}</textarea>
			</div>
			<br>

			@csrf
			<div>
				<input id="modify" type="submit" name="enviar" value="Modificar">
			</div>
			<br>
		</form>
	</div>
</div>



@endsection
