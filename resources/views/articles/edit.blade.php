@extends('layouts.adminlayout')
@section('content')

<div class="container">
    <br>
  <form method="post" action="/admin/article/{{$article->id}}" enctype="multipart/form-data">
  @csrf
  @method('put')
      <h4><b>Modificar el Artículo</b></h4>
    <hr>
    <input type="hidden" name="_method" value="PUT">

		<div class="row">
			<div class="col-3" id="title-info">
				<p>Número de la edición:</p>
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
				<p>Área:</p>
			</div>
			<div class="col-9">
				<div class="form-group">
					<select class="form-control" id="area"  value="{{$article->area_id}}">
						@foreach ($areas as $area)
							<option value="{{$area->id}}"> {{$area->area_es}} </option>
						@endforeach
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
					<div class="input-texto">
						<input type="text" required id="title" value="{{$article->title}}">
					</div>
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
					<p>Abstracto del Artículo:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_spanish" name="text">{!! $article->text !!}</textarea>
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
			<h5><b>Article in English</b></h5>
			<hr>

			<!--Titulo del articulo en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Title:</p>
				</div>
				<div class="col-9">
					<div class="input-texto">
						<input type="text" required id="en_title" value="{{$article->en_title}}">
					</div>
				</div>
			</div>

			<!--Astra del articulo en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Article resume:</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_english" required name="en_text">{!! $article->en_text  !!}</textarea>
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

