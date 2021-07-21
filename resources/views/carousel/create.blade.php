@extends('layouts.adminlayout')

@section('content')

<div class=".xl-container">
	<br>
	<h4>Carousel de Imagenes e Información</h4>
	<hr>

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
					<input accept="image/*" required type="file" name="image_carousel" value="image_carousel">
				</div>
			</div>

			<!--Titulo del articulo en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Título:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="title_carousel" name="title_carousel" placeholder="Título del Carousel">
				</div>
			</div>

            <!--Texto del Carousel en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Texto del Carousel</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_carousel_spanish" name="text"></textarea>
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
					<input accept="image/*" required type="file" name="en_image_carousel" value="en_image_carousel">
				</div>
			</div>

			<!--Titulo del articulo en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Title:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="en_title_carousel" name="en_title_carousel" placeholder="Título del Carousel">
				</div>
			</div>

            <!--Texto del Carousel en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Texto del Carousel</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_carousel_english" name="en_text"></textarea>
				</div>
			</div>
        </div>
        <br>
        <!--itailian-->
		<div class="italian-backgorund">
			<h5><b>Carousel en Italiano</b></h5>
			<hr>

            <!--Imagen del carousel en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Image:</p>
				</div>
				<div class="col-9">
					<input accept="image/*" required type="file" name="it_image_carousel" value="it_image_carousel">
				</div>
			</div>

			<!--Titulo del articulo en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Title:</p>
				</div>
				<div class="col-9">
					<input type="text" required id="it_title_carousel" name="it_title_carousel" placeholder="Título del Carousel">
				</div>
			</div>

            <!--Texto del Carousel en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Texto del Carousel</p>
				</div>
				<div class="col-9">
					<textarea id="summernote_carousel_italian" name="en_text"></textarea>
				</div>
			</div>
        </div>
		<br>
</div>

@endsection