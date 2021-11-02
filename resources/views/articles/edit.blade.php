@extends('layouts.adminlayout')
@section('content')

<div class="container">
  <form method="post" action="/admin/article/{{$article->id}}" enctype="multipart/form-data">
  @csrf
  @method('put')
    <h2>Modificar el Artículo</h2>
    <br>
    <h3>Información</h3>

    <input type="hidden" name="_method" value="PUT">

    <h5>Información General:</h5>
		<hr>

		<div class="row">
			<div class="col-3" id="title-info">
				<p>Edición:</p>
			</div>	
			<div class="col-9">
				<div class="form-group">
					<select class="form-control" id="edition_id" value="{{$article->edition_id}}">
						@foreach ($editions as $edition)
							<option value="{{$edition->id}}"> {{$edition->edition_number}} </option>
						@endforeach
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-3" id="title-info">
				<p>Autor:</p>
			</div>	
			<div class="col-9">
				<div class="form-group">
					<select class="form-control" id="author" value="{{$article->author_id}}">
						@foreach ($authors as $author)
							<option value="{{$author->id}}"> {{$author->name_author}} </option>
						@endforeach
					</select>
					
				</div>
			</div>
		</div>
		

		<div class="row">
			<div class="col-3" id="title-info">
				<p>Sección:</p>
			</div>
			<div class="col-9">
				<div class="form-group">
				<select class="form-control" id="section" value="{{$article->section}}">
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
					<input type="text" required id="title" value="{{$article->title}}">
				</div>
			</div>

			<!--Imagen del articulo en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Imagen:</p>
				</div>
				<div class="col-9">
					<input accept="image/*" required type="file" value="{{$article->image}}">
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
					<input accept="file/*" required type="file" value="{{$article->file}}">
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
					<input type="text" required id="en_title" value="{{$article->en_title}}">
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

		</div>

		<br>
	@csrf

  <div class="row justify-content-center">
    <input type="submit" name="enviar" value="Actualizar Artículo">
  </div>

</form>
  
</div>

@endsection

