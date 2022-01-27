@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
	<div class=".xl-container">
	<br>

		<div class="title-color">
			<h5><b>Nueva Información</b></h5>
		</div>

		<br>

		<form method="POST" action="/admin/information" enctype="multipart/form-data">
			
			<!--Español-->

			<div class="title-color-languaje">
				<h5><b>Información en Español</b></h5>
			</div>

			<!--Titulo informativo en español-->
			<div class="general-input">
				<h6><b>Título:</b></h6>
				<input type="text" required id="information_title" name="information_title" placeholder="Título de la Información">
			</div>

			<!--Texto del articulo en español-->
			<div class="general-input">
				<h6><b>Texto Informativo:</b></h6>
				<textarea id="summernote_information" name="information_text"></textarea>
			</div>

			<!--PDF de la informacion-->
			<div class="general-input">
				<h6><b>Archivo PDF:</b></h6>
				<input id="button-add" accept="file/*" type="file" name="info_file" value="info_file">
			</div>

			<br>
			<!--English-->

			<div class="title-color-languaje">
				<h5><b>Information in English</b></h5>
			</div>

			<!--information title in english-->
			<div class="general-input">
				<h6><b>Title:</b></h6>
				<input type="text" required id="en_information_title" name="en_information_title" placeholder="Information's title">
			</div>

			<!--information text in english-->
			<div class="general-input">
				<h6><b>Information's Text</b></h6>
				<textarea id="summernote_information_english" name="en_information_text"></textarea>
			</div>

				<!--Information PDF in english-->
			<div class="general-input">
				<h6><b>Archivo PDF:</b></h6>
				<input id="button-add" accept="file/*" type="file" name="info_en_file" value="info_en_file">
			</div>

			<br>

			@csrf
			<div>
				<input id="send" type="submit" name="enviar" value="Publicar">
			</div>
			<br>
		</form>
	</div>
</div>

@endsection
