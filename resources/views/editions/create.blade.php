@extends('layouts.adminlayout')

@section('content')
<div class=".xl-container">
	<br>
	<h4>Nueva Edición:</h4>
	<hr>
    <!--Español-->
    <br>
    <form method="POST" action="/admin/editions" enctype="multipart/form-data">
        <div class="row">
            <div class="col-3" id="title-info">
                <p>Número de la Edicion:</p>
            </div>
            <div class="col-9">
                <input type="text" required id="number_edition" name="number_edition" placeholder="Número de la Edición">
            </div>
        </div>
        <div class="spanish-backgorund">
            <h5><b>Edición en Español</b></h5>
            <hr>
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
        
        @csrf
		<div>
			<input type="submit" name="enviar" value="Guardar">
		</div>

	</form>
</div>

@endsection