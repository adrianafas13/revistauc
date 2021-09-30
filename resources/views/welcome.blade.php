
@extends('layouts.applayout')

@section('content')

<div class="container-fluid">
    <div class="row">
<!------------------------------------------------- CAROUSEL ------------------------------------------------------------>
        <div class="col-md-8">
        <br>
            @foreach($editions as $edition)
                <img src="/images/{{ App::isLocale('es')?$edition->edition_route_image:$edition->edition_route_image_en }}" class="d-block w-100" style="height:505px;">
            @endforeach
        </div>

<!------------------------------------------------- BARRA LATERAL ------------------------------------------------------------>
        <div class="col-md-4" id="popular">
            <div class="list-group">
                <!-- titulo -->
                <div class="list-group-item list-group-item-action" id="popular_header_barside">
                    <div class="d-flex w-100 justify-content-between">
                        <h5><b>Información</b></h5>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <!-- articulos populares -->
                @foreach($editions as $edition)
                    <div class="contenido-popular-bar">
                        <p>Volumen:<b>{{ $edition->edition_number }}</b></p>
                        <p>Fecha:<b>{{ $edition->edition_date }}</b></p>
                        <p>Titulo:<b>{{ App::isLocale('es')?$edition->edition_title:$edition->edition_title_en }}</b></p>
                        <p>Descripción:<b>{!! App::isLocale('es')?$edition->edition_description:$edition->edition_description_en !!}</b></p>
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
<div class="container">
    <div class="row">
        <!-- articulo -->
        @foreach($articles as $article)
            <div class="col-md-6" id="article">
                <div class="article-container">
                    <a href="{{route('art', $article->slug)}}">
                        <img src="/images/{{ App::isLocale('es')?$article->ruta_image:$article->ruta_en_image }}" style="width:100%; height: 350px;">
                        <a href="#" class="badge" id="tag">{{ $article->section }}</a>
                        <div class="article-text overlay-text">
                            <h6><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></h6> 
                            <p><i>{{ $article->author }}</i></p>  
                        </div>
                    </a>
                </div>  
            </div>
        @endforeach     
    </div>
</div>
@endsection
