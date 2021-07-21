@extends('layouts.adminlayout')

@section('content')
<div class=".xl-container">
	<br>
	<h4>Nueva Edición:</h4>
	<hr>
    <!--Español-->
    <br>
	<div class="spanish-backgorund">
		<h5><b>Edición en Español</b></h5>
		<hr>
        <!--Foto de la edición-->
        <div class="row">
            <div class="col-3" id="title-info">
                <p>Foto de la edición:</p>
            </div>
            <div class="col-9">
                <input accept="image/*" required type="file" name="route_image_edition" value="route_image_edition">
            </div>
        </div>
        <!--Titulo de la edicion-->
        <div class="row">
            <div class="col-3" id="title-info">
                <p>Titulo de la Edicion:</p>
            </div>
            <div class="col-9">
                <input type="text" required id="title_edition" name="title_edition" placeholder="Título de la Edición">
            </div>
        </div>
        
    </div>
    <br>
    <div class="english-backgorund">
		<h5><b>Edition on English</b></h5>
		<hr>
        <!--Foto de la edición-->
        <div class="row">
            <div class="col-3" id="title-info">
                <p>Cover of the edition:</p>
            </div>
            <div class="col-9">
                <input accept="image/*" required type="file" name="en_route_image_edition" value="en_route_image_edition">
            </div>
        </div>
        <!--Title of the Edition-->
        <div class="row">
            <div class="col-3" id="title-info">
                <p>Title of the Edition:</p>
            </div>
            <div class="col-9">
                <input type="text" required id="en_title_edition" name="en_title_edition" placeholder="Title of the Edition">
            </div>
        </div>
    </div>
    <br>
	<div class="italian-backgorund">
		<h5><b>Edizione en Italiano</b></h5>
		<hr>
        <!--Foto de la edición-->
        <div class="row">
            <div class="col-3" id="title-info">
                <p>Foto de la edición:</p>
            </div>
            <div class="col-9">
                <input accept="image/*" required type="file" name="it_route_image_edition" value="it_route_image_edition">
            </div>
        </div>
        <!--Titulo de la Edizione-->
        <div class="row">
            <div class="col-3" id="title-info">
                <p>Titulo de la Edizione</p>
            </div>
            <div class="col-9">
                <input type="text" required id="it_title_edition" name="it_title_edition" placeholder="Titulo de la Edizione">
            </div>
        </div>
    </div>
</div>

@endsection