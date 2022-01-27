@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
	<div class=".xl-container">
	<br>

		<div class="title-color">
			<h5><b>Registro del Autor</b></h5>
		</div>
		
		<br>

		<form method="POST" action="/admin/authors" enctype="multipart/form-data">
			
			<div class="general-title">
				<h5><b>Información General:</b></h5>
			</div>
			
			<!--Nombre del autor-->
			<div class="general-input">
				<h6><b>Apellido y nombre:</b></h6>
				<input type="text" required id="name_author" name="name_author" placeholder="Apellido, Nombre">
			</div>
		
			<!--Correo del autor-->
			<div class="general-input">
				<h6><b>Correo Electronico:</b></h6>
				<input type="text" required id="email_author" name="email_author" placeholder="autor@unimar.edu.ve">
			</div>
			
			<!--Imagen del autor-->
			<div class="general-input">
				<h6><b>Foto del Autor:</b></h6>
				<input id="button-add" accept="image/*" required type="file" name="image_author" value="image">
			</div>
			
			<br>

			<!--Español-->

			<div class="title-color-languaje">
				<h5><b>Información del autor en Español</b></h5>
			</div>
			
			<!--Universidad ó instituto en español-->
			<div class="general-input">
				<h6><b>Universidad / Institución:</b></h6>
				<input type="text" required id="grades_author" name="grades_author" placeholder="Ej: Universidad de Margarita">
			</div>

			<!--Reseña del Autor-->
			<div class="general-input">
				<h6><b>Reseña del autor:</b></h6>
				<textarea id="summernote_author_spanish" name="resume_author"></textarea>
			</div>

			<br>
			<!--English-->

			<div class="title-color-languaje">
				<h5><b>Information about the autor in English</b></h5>
			</div>

			<!--College-->
			<div class="general-input">
				<h6><b>University/ College:</b></h6>
				<input type="text" required id="en_grades_author" name="en_grades_author" placeholder="Universidad de Margarita">
			</div>

			<!--Resume of the Autor-->
			<div class="general-input">
				<h6><b>Resume of the Author:</b></h6>
				<textarea id="summernote_author_english" name="en_resume_author"></textarea>
			</div>
			<br>

			@csrf
			<div>
				<input id="send" type="submit" name="enviar" value="Guardar">
			</div>
		<br>

		</form>
	</div>
</div>


@endsection
