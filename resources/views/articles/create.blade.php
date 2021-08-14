
@extends('layouts.adminlayout')

@section('content')
<div class=".xl-container">
	<br>
	<h4>Nuevo Artículo</h4>
	<hr>

	<form method="post" action="/admin/article" enctype="multipart/form-data">
		<h5>Información General:</h5>
		<hr>

		<div class="row">
			<div class="col-3" id="title-info">
				<p>Autor:</p>
			</div>	
			<div class="col-9">
				<input type="text" required id="author" name="author" placeholder="Autor del Artículo">
			</div>
		</div>

		<div class="row">
			<div class="col-3" id="title-info">
				<p>Sección:</p>
			</div>
			<div class="col-9">
				<select id="section"  name="section">
					<option value="administracion">Administracion</option>
					<option value="arte">Arte</option>
					<option value="idiomas">Idiomas</option>
					<option value="informatica">Informatica</option>
					<option value="derecho">Derecho</option>
					<option value="gerencia">Gerencia</option>
					<option value="historia">Historia</option>
					<option value="salud">Salud</option>
				</select>
			</div>
		</div>

		<br>
		<!--Español-->
		<div class="spanish-backgorund">
			<h5><b>Artículo en Español</b></h5>
			<hr>

			<!--Titulo del articulo en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Título:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="title" name="title" placeholder="Título del Artículo">
				</div>
			</div>

			<!--Imagen del articulo en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Imagen:</p>
				</div>
				<div class="col-9">
				
						<input accept="image/*" required type="file" name="image" value="image">
					
				</div>
			</div>

			<!--Astra del articulo en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Astra del Artículo:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_spanish" name="text"></textarea>
				</div>
			</div>

			<!--PDF del articulo en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Archivo PDF del artículo:</p>
				</div>
				<div class="col-9">
					<input accept="file/*" required type="file" name="file" value="file">
				</div>	
			</div>
		</div>

		<br>
		<!--English-->
		<div class="english-backgorund">
			<h5><b>Article on English</b></h5>
			<hr>

			<!--Titulo del articulo en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Title:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="en_title" name="en_title" placeholder="Title of Article">
				</div>
			</div>

			<!--Imagen del articulo en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Image:</p>
				</div>
				<div class="col-9">
					<input accept="image/*" required type="file" name="en_image" value="en_image">
				</div>
			</div>

			<!--Astra del articulo en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Article resume:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_english" required name="en_text"></textarea>
				</div>
			</div>

			<!--PDF del articulo en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>PFD File:</p>
				</div>
				<div class="col-9">
					<input accept="file/*" required type="file" name="en_file" value="en_file">
				</div>
			</div>
		</div>

		<br>
		<!--Italian
		<div class="italian-backgorund">
			<h5><b>Articolo in Italiano</b></h5>
			<hr>

			Titulo del articulo en italiano
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Titolo:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="it_title" name="it_title" placeholder="Title of Article">
				</div>
			</div>

			Imagen del articulo en italiano
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Imamagine:</p>
				</div>
				<div class="col-9">
					<input accept="image/*" required type="file" name="it_image" value="it_image">
				</div>
			</div>

			Astra del articulo en italiano
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Curriculum Dell'Articolo:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_italian" required name="it_text"></textarea>
				</div>
			</div>

			PDF del articulo en italiano
			<div class="row">
				<div class="col-3" id="title-info">
					<p>PFD Archivo:</p>
				</div>
				<div class="col-9">
					<input accept="file/*" required type="file" name="it_file" value="it_file">
				</div>
			</div>
		</div>
-->
	@csrf
	<div>
		<input type="submit" name="enviar" value="Publicar">
	</div>

	</form>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection


