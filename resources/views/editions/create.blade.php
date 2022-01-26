
@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
    <div class=".xl-container">
        <br>

        <div class="title-color">
			<h5><b>Nueva Edicion</b></h5>
		</div>

        <br>

        <form method="POST" action="/admin/editions" enctype="multipart/form-data">

        <div class="general-title">
            <h5><b>Información General:</b></h5>
        </div>
        <div class="general-input">
            <h6><b>Número de la Edición:</b></h6>
            <input type="text" required id="edition_number" name="edition_number" placeholder="Ejemplo: 1, 2, 3...">
        </div>

        <div class="general-input">
            <h6><b>Fecha de la Edición:</b></h6>
            <div class="input-group date" data-date-format="dd-mm-yyyy" id="datepicker">
                <span class="input-group-append">
                    <span class="input-group-text">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
                <input type="text" class="form-control" required id="edition_date" name="edition_date" placeholder="DD/MM/YYYY">
            </div>
        </div>

        <br>
        <!--Español-->

        <div class="title-color-languaje">
			<h5><b>Información de la edición en Español</b></h5>
		</div>

        <div class="general-input">
            <h6><b>Título de la Edición:</b></h6>
            <input type="text" required id="edition_title" name="edition_title" placeholder="Título de la Edición">
        </div>

        <div class="general-input">
            <h6><b>Descripción de la Edición:</b></h6>
            <textarea id="summernote_edition_description" name="edition_description"></textarea>
        </div>

        <div class="general-input">
            <div class="row">
				<div class="col-6">
                    <h6><b>Carátula de la Edición:</b></h6>
                    <input id="button-add" accept="image/*" required type="file" name="edition_image" value="edition_image">
				</div>
				<div class="col-6">
                    <h6><b>Archivo PDF de la edición completa:</b></h6>
					<input id="button-add" accept="file/*" required type="file" name="edition_full_file" value="edition_full_file">
				</div>
			</div>
        </div>
        <br>
        <div class="title-color-languaje">
			<h5><b>Information of the edition in English</b></h5>
		</div>

        <div class="general-input">
            <h6><b>Title of the Edition:</b></h6>
            <input type="text" required id="edition_title_en" name="edition_title_en" placeholder="Title of the Edition">
        </div>

        <div class="general-input">
            <h6><b>Description of the Edition:</b></h6>
            <textarea id="summernote_edition_description_en" name="edition_description_en"></textarea>
        </div>
        <br>
        @csrf
		<div>
			<input id="send" type="submit" name="enviar" value="Guardar">
		</div>
        <br>

	</form>
</div>
</div>


@endsection
