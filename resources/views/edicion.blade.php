@extends('layouts.applayout')
@section('content')
<div class="main">
<br>
    <div class="container" >
        <div class="title-sections">
            <h4><b>EDICIONES PUBLICADAS</b></h4>
        </div>
        <hr>

        <div class="container mt-5">
        <!-- articulo --> 
        @foreach($editions as $edition)
        <div class="card mb-3">
            <div class="row no-gutters">  
            
                <div class="col-md-4">
                    <img src="/images/portada01.png" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5><b>{{ App::isLocale('es')?$edition->edition_title:$edition->edition_title_en }}</b></h5>
                        <p><b>FECHA DE PUBLICACIÓN: </b> 01/11/2021</p>
                        <p>{!! $edition->edition_description !!}</p>

                            

                        <a href="/files/fulledition.pdf" type="button" class="btn btn-outline-dark">Edición Completa</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach  
        <br>
    </div>

        
        <br>
    </div>
</div>
@endsection