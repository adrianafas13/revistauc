@extends('layouts.adminlayout')

@section('content')

<div class=".xl-container">
	<br>
	<h4>Carousel de Imagenes e Información</h4>
	<hr>

	<form method="POST" action="/admin/carousel/{{$carousel->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
    <!--Español-->
		<div class="spanish-backgorund">
			<h5><b>Carousel en Español</b></h5>
			<hr>

            <!--Imagen del carousel en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Imagen:</p>
				</div>
				<div class="col-9">
					<input accept="image/*" required type="file" name="es_image_carousel" value="es_image_carousel">
				</div>
			</div>

			<!--Titulo del articulo en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Título:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="title_carousel" name="title_carousel" value="{{$carousel->title_carousel}}">
				</div>
			</div>

        </div>

        <br>
        <!--English-->
		<div class="english-backgorund">
			<h5><b>Carousel in English</b></h5>
			<hr>

            <!--Imagen del carousel en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Image:</p>
				</div>
				<div class="col-9">
					<input accept="image/*" required type="file" name="en_image_carousel" value="{{$carousel->en_title_carousel}}>
				</div>
			</div>

			<!--Titulo del articulo en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Title:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="en_title_carousel" name="en_title_carousel" placeholder="Título del Carousel">
				</div>
			</div>

        </div>
		@csrf
		<div>
			<input type="submit" name="enviar" value="Guardar">
		</div>

	</form>
    <br>
</div>

@endsection