


@extends('layouts.adminlayout')
@section('content')
<div class=".xl-container">
	<br>
	<h4>Nuevo Artículo</h4>
	<hr>

	<form method="post" action="/admin/article" enctype="multipart/form-data">
		<h5><i>Información General:</i></h5>
		<hr>

		<div class="row">
			<div class="col-4">
				<p>Autor:</p>
			</div>	
			<div class="col-8"></div>
		</div>

		<div class="row">
			<div class="col-4">
				<p>Sección:</p>
			</div>
			<div class="col-8">
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
		<div class="spanish-backgorund" style="background-color:#FEFA4957;">
			<h5><i>Artículo en Español</i></h5>
			<hr>

			<!--Titulo del articulo en español-->
			<div class="row">
				<div class="col-4">
					<p>Título:</p>
				</div>
				<div class="col-8">
					<input type="text" required id="title" name="title" placeholder="Título del Artículo">
				</div>
			</div>

			<!--Imagen del articulo en español-->
			<div class="row">
				<div class="col-4">
					<p>Imagen:</p>
				</div>
				<div class="col-8">
					<input accept="image/*" required type="file" name="image" value="image">
				</div>
			</div>

			<!--Astra del articulo en español-->
			<div class="row">
				<div class="col-4">
					<p>Astra del Artículo:</p>
				</div>
				<div class="col-8">
					<textarea id="text" name="text" required placeholder="Resumen del Artículo" style="width:400px; height:200px"></textarea>
				</div>
			</div>

			<!--PDF del articulo en español-->
			<div class="row">
				<div class="col-4">
					<p>Archivo PDF del artículo:</p>
				</div>
				<div class="col-8">
					<input accept="file/*" required type="file" name="file" value="file">
				</div>	
			</div>
		</div>

		<br>
		<!--English-->
		<div class="english-backgorund">
			<h5><i>Article on English</i></h5>
			<hr>

			<!--Titulo del articulo en ingles-->
			<div class="row">
				<div class="col-4">
					<p>Title:</p>
				</div>
				<div class="col-8">
					<input type="text" required id="en_title" name="en_title" placeholder="Title of Article">
				</div>
			</div>

			<!--Imagen del articulo en ingles-->
			<div class="row">
				<div class="col-4">
					<p>Image:</p>
				</div>
				<div class="col-8">
					<input accept="image/*" required type="file" name="en_image" value="en_image">
				</div>
			</div>

			<!--Astra del articulo en ingles-->
			<div class="row">
				<div class="col-4">
					<p>Article resume:</p>
				</div>
				<div class="col-8">
					<textarea id="en_text" required name="en_text" placeholder="Resume of the Article" style="width:400px; height:200px"></textarea>
				</div>
			</div>

			<!--PDF del articulo en ingles-->
			<div class="row">
				<div class="col-4">
					<p>PFD File:</p>
				</div>
				<div class="col-8">
					<input accept="file/*" required type="file" name="en_file" value="en_file">
				</div>
			</div>
		</div>

		<br>
		<!--Italian-->
		<div class="italian-backgorund">
			<h5><i>Articolo in Italiano</i></h5>
			<hr>

			<!--Titulo del articulo en italiano-->
			<div class="row">
				<div class="col-4">
					<p>Titolo:</p>
				</div>
				<div class="col-8">
					<input type="text" required id="it_title" name="it_title" placeholder="Title of Article">
				</div>
			</div>

			<!--Imagen del articulo en italiano-->
			<div class="row">
				<div class="col-4">
					<p>Imamagine:</p>
				</div>
				<div class="col-8">
					<input accept="image/*" required type="file" name="it_image" value="it_image">
				</div>
			</div>

			<!--Astra del articulo en italiano-->
			<div class="row">
				<div class="col-4">
					<p>Curriculum Dell'Articolo:</p>
				</div>
				<div class="col-8">
					<textarea id="it_text" required name="it_text" placeholder="Resume of the Article" style="width:400px; height:200px"></textarea>
				</div>
			</div>

			<!--PDF del articulo en italiano-->
			<div class="row">
				<div class="col-4">
					<p>PFD Archivo:</p>
				</div>
				<div class="col-8">
					<input accept="file/*" required type="file" name="it_file" value="it_file">
				</div>
			</div>
		</div>

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




