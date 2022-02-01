@extends('layouts.adminlayout')

@section('content')
<div class="main-admin">
	<div class=".xl-container">
	<br>

		<div class="title-color">
			<h5><b>Nueva Área de Conocimiento</b></h5>
		</div>

		<br>

		<form method="POST" action="/admin/areas" enctype="multipart/form-data">
		
		<!--Español-->

        <div class="title-color-languaje">
			<h5><b>Ámbitos de Conocimiento en Español</b></h5>
		</div>

		<!--Ámbitos de Conocimiento en español-->
		<div class="general-input">
            <h6><b>Ámbitos de Conocimiento:</b></h6>
            <input type="text" required id="area_es" name="area_es" placeholder="Ámbitos de Conocimiento">
        </div>

		<br>
		<!--English-->

		<div class="title-color-languaje">
			<h5><b>Areas of Knowledge in English</b></h5>
		</div>

		<!--Areas in ingles-->
        <div class="general-input">
            <h6><b>Areas of Knowledge:</b></h6>
            <input type="text" required id="area_en" name="area_en" placeholder="Knowledge Areas">
        </div>
		<br>

		@csrf
		<div>
			<input id="save" type="submit" name="enviar" value="Guardar">
		</div>
		<br>

		</form>
	</div>
</div>

@endsection
