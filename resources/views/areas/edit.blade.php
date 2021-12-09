@extends('layouts.adminlayout')
@section('content')
<div class=".xl-container">
	<br>
	<h4><b>Modificar Área de Conocimiento:</b></h4>
	<hr>

	<form method="POST" action="/admin/areas/{{$areas->id}}" enctype="multipart/form-data">
		<!--Español-->
        <input type="hidden" name="_method" value="PUT">
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
                        <input id="texto" type="text" required id="area_es" name="area_es" value="{{$areas->area_es}}">
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
                        <input id="texto" type="text" required id="area_en" name="area_en" value="{{$areas->area_en}}">
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

