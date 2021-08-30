@extends('layouts.adminlayout')

@section('content')

<div class=".xl-container">
	<br>
	<h4><b>Nueva Información:</b></h4>
	<hr>

	<form method="POST" action="/admin/information" enctype="multipart/form-data">
		<!--Español-->
		<div class="spanish-backgorund">
			<h5>Información en Español</h5>
			<hr>
			<!--Titulo de la informacion en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Título:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="information_title" name="information_title" placeholder="Título de la Información">
				</div>
			</div>

			<!--Texto de la informacion en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Texto de la Información</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_information" name="information_text"></textarea>
				</div>
			</div>
		</div>
		<br>
		<!--English-->
		<div class="english-backgorund">
			<h5>Information on English</h5>
			<hr>
			<!--Titulo de la informacion en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Title:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="en_information_title" name="en_information_title" placeholder="Título de la Información">
				</div>
			</div>

			<!--Texto de la informacion en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Text:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_information_english" name="en_information_text"></textarea>
				</div>
			</div>
		</div>
		<br>
		<!--itailian
		<div class="italian-backgorund">
			<h5>Informazione en Italiano</h5>
			<hr>
			<!-Titulo de la informacion en italiano
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Titulo:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="it_information_title" name="it_information_title" placeholder="Título de la Información">
				</div>
			</div>

			<!-Texto de la informacion en italiano
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Texto:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_information_italian" name="it_information_text"></textarea>
				</div>
			</div>
		</div>
		<br>
		-->
		@csrf
		<div>
			<input type="submit" name="enviar" value="Guardar">
		</div>

	</form>
</div>

@endsection