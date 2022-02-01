@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
	<div class=".xl-container">
	<br>

		<div class="title-color">
			<h5><b>Modificar Área de Conocimiento</b></h5>
		</div>

		<br>

        <form method="POST" action="/admin/areas/{{$areas->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">

            <!--Español-->

            <div class="title-color-languaje">
                <h5><b>Ámbitos de Conocimiento en Español</b></h5>
            </div>

            <!--Ámbitos de Conocimiento en español-->
            <div class="general-input">
                <h6><b>Ámbitos de Conocimiento:</b></h6>
                <input type="text" required id="area_es" name="area_es" value="{{$areas->area_es}}">
            </div>

            <br>

            <!--English-->

            <div class="title-color-languaje">
                <h5><b>Areas of Knowledge in English</b></h5>
            </div>

            <!--Areas in ingles-->
            <div class="general-input">
                <h6><b>Areas of Knowledge:</b></h6>
                <input type="text" required id="area_en" name="area_en" value="{{$areas->area_en}}">
            </div>
            <br>

            @csrf
            <div>
                <input id="modify" type="submit" name="enviar" value="Modificar">
            </div>
            <br>
        </form>
    </div>
</div>
@endsection

