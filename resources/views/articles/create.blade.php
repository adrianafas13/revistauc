@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
	<div class=".xl-container">
	<br>

	<div class="title-color">
		<h5><b>Nuevo Artículo</b></h5>
	</div>
	
	<br>

	<form method="post" action="/admin/article" enctype="multipart/form-data">
		
		<div class="general-title">
            <h5><b>Información General:</b></h5>
        </div>

		<div class="general-input">
            <h6><b>Edición:</b></h6>
            <div class="form-group">
				<select class="form-control" id="edition_id" name="edition_id" placeholder="Autor del Artículo">
					@foreach ($editions as $edition)
						<option value="{{$edition->id}}"> {{$edition->edition_number}} </option>
					@endforeach
				</select>
			</div>
        </div>

		<div class="general-input">
            <h6><b>Autor:</b></h6>
            <div class="form-group">
				<select class="form-control" id="author" name="author_id" placeholder="Autor del Artículo">
					@foreach ($authors as $author)
						<option value="{{$author->id}}"> {{$author->name_author}} </option>
					@endforeach
				</select>
			</div>
        </div>

		<div class="general-input">
            <h6><b>Área:</b></h6>
            <div class="form-group">
				<select class="form-control" id="area" name="area_id" placeholder="Área de Investigación">
					@foreach ($areas as $area)
						<option value="{{$area->id}}"> {{$area->area_es}} </option>
					@endforeach
				</select>
			</div>
        </div>

		<br>
		<!--Español-->

        <div class="title-color-languaje">
			<h5><b>Información del artículo en Español</b></h5>
		</div>

		<!--Titulo del articulo en español-->
		<div class="general-input">
            <h6><b>Título:</b></h6>
            <input type="text" required id="title" name="title" placeholder="Título del Artículo">
        </div>

		<!--Abstra del articulo en español-->
		<div class="general-input">
            <h6><b>Abstracto del Artículo:</b></h6>
            <textarea id="summernote_spanish" name="text"></textarea>
        </div>

		<div class="general-input">
            <div class="row">

				<!--Imagen del articulo en español-->
				<div class="col-6">
                    <h6><b>Imágen del artículo:</b></h6>
                    <input id="button-add" accept="image/*" required type="file" name="image" value="image">
				</div>

				<!--PDF del articulo en español-->
				<div class="col-6"> 
                    <h6><b>Archivo PDF del artículo:</b></h6>
					<input id="button-add" accept="file/*" required type="file" name="file" value="file">
				</div>
			</div>
        </div>

		<br>
		<!--English-->

		<div class="title-color-languaje">
			<h5><b>Article in English</b></h5>
		</div>

		<!--Titulo del articulo en ingles-->
        <div class="general-input">
            <h6><b>Title of the Article:</b></h6>
            <input type="text" required id="en_title" name="en_title" placeholder="Title of Article">
        </div>

        <div class="general-input">
            <h6><b>Description of the Article:</b></h6>
            <textarea id="summernote_english" required name="en_text"></textarea>
        </div>
		<br>

		@csrf
		<div>
			<input id="save" type="submit" name="enviar" value="Publicar">
		</div>
		<br>

		</form>
	</div>
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


