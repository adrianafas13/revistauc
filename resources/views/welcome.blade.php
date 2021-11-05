
@extends('layouts.applayout')

@section('content')
<div class="main">
    <div class="container-fluid">
        <div class="row">
    <!------------------------------------------------- portada ------------------------------------------------------------>
            <div class="col-md-6">
            <br>
                <div class="edition-cover">
                    <img src="/images/{{ $edition->edition_route_image }}" style="display:block; width: 92%; margin:0 auto;">
                </div>
            </div>

    <!------------------------------------------------- BARRA LATERAL ------------------------------------------------------------>
            <div class="col-md-6" id="popular">
                <div class="list-group">
                    <!-- titulo -->
                    <div class="list-group-item list-group-item-action" id="popular_header_barside">
                        <div class="d-flex w-100 justify-content-between">
                            <h5><b>Indice</b></h5>
                            <i class="fas fa-list"></i>
                        </div>
                    </div>
                    <!-- articulos populares -->
                    @foreach($articles as $article)
                        <div class="contenido-popular-bar">
                            <li class="list-group-item">
                                <p>{{ App::isLocale('es')?$article->title:$article->en_title}}</p>
                            </li>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    <!------------------------------------------------- NOMBRE DE LA EDICIÓN ------------------------------------------------------------>
        <hr>
            <div class="edition_title">
                <h4><b>{{ App::isLocale('es')?$edition->edition_title:$edition->edition_title_en }}</b></h4>
            </div>
        <hr>
    </div>
    <!------------------------------------------------- ARTICULOS ------------------------------------------------------------>
    <div class="container mt-5">
        <!-- articulo -->
        @foreach($articles as $article)
        <div class="card mb-3">
            <div class="row no-gutters">

                <div class="col-md-4">
                    <a href="{{route('art', $article->slug)}}">
                        <img src="images/{{$article->ruta_image}}" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h6><a href="#" class="badge">{{ $article->section }}</a></h6>
                        <h5><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></h5>
                        <p>{{ $article->author->name_author }}</p>
                        <p class="card-text"><small class="text-muted">{{ $edition->edition_date }}</small></p>
                        <a type="button" class="btn btn-outline-dark" href="{{route('art', $article->slug)}}">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <br>
    </div>
</div>
@endsection
