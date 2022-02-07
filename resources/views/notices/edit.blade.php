@extends('layouts.adminlayout')

@section('content')
<div class="main-admin">
	<div class=".xl-container">
	<br>

		<div class="title-color">
			<h5><b>Modificar Aviso</b></h5>
		</div>

		<br>

		<form method="POST" action="/admin/notices/{{$notices->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
            <!--Español-->

            <div class="title-color-languaje">
                <h5><b>Aviso en Español</b></h5>
            </div>

            <!--Aviso español-->
            <div class="general-input">
                <h6><b>Aviso:</b></h6>
                <textarea id="summernote_aviso" name="notice_es">{!!$notices->notice_es!!}</textarea>
            </div>

            <br>
            <!--English-->

            <div class="title-color-languaje">
                <h5><b>Notice in English</b></h5>
            </div>

            <!--Aviso in ingles-->
            <div class="general-input">
                <h6><b>Notice:</b></h6>
                <textarea id="summernote_notice" name="notice_en">{!!$notices->notice_en!!}</textarea>
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
