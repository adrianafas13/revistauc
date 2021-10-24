
@extends('layouts.applayout')

@section('content')
<div class="main">
    <div class="container-fluid">
        <div class="row">
    <!------------------------------------------------- CAROUSEL ------------------------------------------------------------>
            <div class="col-md-8">
            <br>
                <div class="edition-cover">
                    @foreach($editions as $edition)
                        <img src="/images/{{ App::isLocale('es')?$edition->edition_route_image:$edition->edition_route_image_en }}" class="d-block w-100" style="height:505px;">
                    @endforeach
                </div>
            </div>

    <!------------------------------------------------- BARRA LATERAL ------------------------------------------------------------>
            <div class="col-md-4" id="popular">
                <div class="list-group">
                    <!-- titulo -->
                    <div class="list-group-item list-group-item-action" id="popular_header_barside">
                        <div class="d-flex w-100 justify-content-between">
                            <h5><b>Indice</b></h5>
                            <i class="fas fa-list"></i>
                        </div>
                    </div>
                    <!-- articulos populares -->
                    @foreach($editions as $edition)
                        <div class="contenido-popular-bar">
                            <li class="list-group-item">
                                <p>Volumen:<b>{{ $edition->edition_number }}</b></p>
                            </li>
                            <li class="list-group-item">
                                <p>Fecha:<b>{{ $edition->edition_date }}</b></p>
                            </li>
                            <li class="list-group-item">
                                <p>Fecha:<b>{{ $edition->edition_date }}</b></p>
                            </li>
                            <li class="list-group-item">
                                <p>Descripción:<b>{!! App::isLocale('es')?$edition->edition_description:$edition->edition_description_en !!}</b></p>
                            </li>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    <!------------------------------------------------- NOMBRE DE LA EDICIÓN ------------------------------------------------------------>
        <hr>
            <div class="edition_title">
                @foreach($editions as $edition)
                    <h4><b>{{ App::isLocale('es')?$edition->edition_title:$edition->edition_title_en }}</b></h4>
                    
                @endforeach
            </div>
        <hr>
    </div>
    <!------------------------------------------------- ARTICULOS ------------------------------------------------------------>  
    <div class="container mt-5">
        <!-- articulo --> 
        
        <div class="card mb-3">
            <div class="row no-gutters">  
            @foreach($articles as $article)
                <div class="col-md-4">
                    <a href="{{route('art', $article->slug)}}">
                        <img src="/images/{{ App::isLocale('es')?$article->ruta_image:$article->ruta_en_image }}" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h6><a href="#" class="badge">{{ $article->section }}</a></h6>
                        <h5><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></h5>
                        @foreach ($authors as $author)
                            <p>{{ $author->name_author }}</p>
                        @endforeach
                        @foreach ($editions as $edition)
                            <p class="card-text"><small class="text-muted">{{ $edition->edition_date }}</small></p>
                        @endforeach
                        <br>
                        <button type="button" class="btn btn-outline-dark">Ver más</button>
                    </div>
                </div>
            @endforeach  
            </div>
        </div>
        <br>
    </div>
</div>
@endsection
