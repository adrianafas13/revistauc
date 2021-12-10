@extends('layouts.adminlayout')

@section('content')

<div class=".xl-container">
	<br>
	<h4><b>Nueva Área de Conocimiento:</b></h4>
	<hr>

	<form method="POST" action="/admin/areas" enctype="multipart/form-data">
		<div class="container">
			<div class="form-group">
				<input type="text" class="form-control" id="colorPicker">
			</div>
        </div>
		<!--Español-->
		<div class="spanish-backgorund">
            <h5><b>Área de Investigación en Español</b></h5>
			<hr>
			<!--Areas en español-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Área:</p>
				</div>
				<div class="col-9">
					<div class="input-texto">
						<input type="text" required id="area_es" name="area_es" placeholder="Área de Investigación">
					</div>
				</div>
			</div>
		</div>
		<br>
		<!--English-->
		<div class="english-backgorund">
            <h5><b>Knowledge Areas in English</b></h5>
			<hr>
			<!--Areas en ingles-->
			<div class="row">
				<div class="col-3" id="title-info">
					<p>Area:</p>
				</div>
				<div class="col-9">
					<div class="input-texto">
						<input type="text" required id="area_en" name="area_en" placeholder="Knowledge Areas">
					</div>
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
