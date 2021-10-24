@extends('layouts.applayout')
@section('content')
<div class="main">
<br>
    <div class="container" >
        <div class="title-sections">
            <h2><b>EDICIONES PUBLICADAS</b></h2>
        </div>
        <hr>

        <div class="row" id="edicion">
            <div class="col-6">
                @foreach ($editions as $edition)
                    <div class="card">
                    <img src="/images/{{ App::isLocale('es')?$edition->edition_route_image:$edition->edition_route_image_en }}" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">EDICIÓN: <b>{{ $edition->edition_title }}</b></h5>
                            
                            <a href="#" class="btn btn-outline-secondary">Ver edición</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
    </div>
</div>
@endsection