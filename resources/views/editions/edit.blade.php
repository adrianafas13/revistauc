@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
    <div class=".xl-container">
	<br>

        <div class="title-color">
			<h5><b>Modificar Edición</b></h5>
		</div>

        <br>

        <form method="POST" action="/admin/editions/{{$editions->id}}" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <!--General-->

            <div class="general-title">
                <h5><b>Información General:</b></h5>
            </div>
            <div class="general-input">
                <h6><b>Número de la Edición:</b></h6>
                <input type="text" required id="edition_number" name="edition_number" value="{{$editions->edition_number}}">
            </div>

            <div class="general-input">
                <h6><b>Fecha de la Edición:</b></h6>
                <div class="input-group date" data-date-format="dd-mm-yyyy" id="datepicker">
                    <span class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                    <input type="text" class="form-control" required id="edition_date" name="edition_date" value="{{$editions->edition_date}}">
                </div>
            </div>

            <br>

            <!--Español-->
            <div class="title-color-languaje">
                <h5><b>Información de la edición en Español</b></h5>
            </div>

            <div class="general-input">
                <h6><b>Título de la Edición:</b></h6>
                <input type="text" required id="edition_title" name="edition_title" value="{{$editions->edition_title}}">
            </div>

            <div class="general-input">
                <h6><b>Descripción de la Edición:</b></h6>
                <textarea id="summernote_edition_description" name="edition_description">{!! $editions->edition_description !!}</textarea>
            </div>

            <div class="general-input">
                <h6><b>Editorial:</b></h6>
                <textarea id="summernote_edition_editorial_es" name="editorial_es">{!! $editions->editorial_es !!}</textarea>
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

            <!--English-->
            <div class="title-color-languaje">
                <h5><b>Information of the edition in English</b></h5>
            </div>

            <div class="general-input">
                <h6><b>Title of the Edition:</b></h6>
                <input type="text" required id="edition_title_en" name="edition_title_en" value="{{$editions->edition_title_en}}">
            </div>

            <div class="general-input">
                <h6><b>Description of the Edition:</b></h6>
                <textarea id="summernote_edition_description_en" name="edition_description_en">{!! $editions->edition_description_en !!}</textarea>
            </div>

            <div class="general-input">
                <h6><b>Editorial:</b></h6>
                <textarea id="summernote_edition_editorial_en" name="editorial_en">{!! $editions->editorial_en !!}</textarea>
            </div>
            <br>
            @csrf
            <div>
                <input id="modify" type="submit" name="enviar" value="Guardar">
            </div>
            <br>

        </form>
    </div>
</div>

@endsection
