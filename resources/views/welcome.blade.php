
@extends('layouts.applayout')

@section('content')

<div class="container-fluid">
    <div class="row">
<!------------------------------------------------- CAROUSEL ------------------------------------------------------------>
        <div class="col-md-8" id="carousel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <div class="carousel-inner">
                    <!-- Carousel item -->
                    <div class="carousel-item active">
                        <img src="images/6261.jpg" class="d-block w-100" alt="img1" style="height:505px;">
                        <div class="carousel-caption d-md-block">
                            <h5><b>Prueba</b></h5>
                            <p>We had such a great time in LA!</p>
                        </div>
                    </div>
                     <!-- Carousel item -->
                    <div class="carousel-item">
                        <img src="images/6261.jpg" class="d-block w-100" alt="img2" style="height:505px;">
                        <div class="carousel-caption d-md-block">
                            <h5><b>Prueba 2</b></h5>
                            <p>We had such a great time in LA!</p>
                        </div>
                    </div>
                     <!-- Carousel item -->
                    <div class="carousel-item">
                        <img src="images/6261.jpg" class="d-block w-100" alt="img2" style="height:505px;">
                        <div class="carousel-caption d-md-block">
                            <h5><b>Prueba 3</b></h5>
                            <p>We had such a great time in LA!</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
<!------------------------------------------------- BARRA LATERAL ------------------------------------------------------------>
        <div class="col-md-4" id="popular">
            <div class="list-group">
                <!-- titulo -->
                <div class="list-group-item list-group-item-action" id="popular_header_barside">
                    <div class="d-flex w-100 justify-content-between">
                        <h6><b>@lang('data.popular')</b></h6>
                        <i class="fas fa-fire-alt"></i>
                    </div>
                </div>
                <!-- articulos populares -->
                @foreach($articles as $article)
                    <a href="{{route('art', $article->slug)}}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1"><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></h6>
                            <small class="text-muted">@lang('data.'.$article->section)</small>
                            <br>
                            <p class="mb-1">{{ $article->author }}</i></p>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

    </div>

<!------------------------------------------------- NOMBRE DE LA EDICIÓN ------------------------------------------------------------>
    <hr>
        <div class="edition_title">
            <h4><b>@lang('data.edicion') MAYO 2021</b></h4>
        </div>
    <hr>
<!------------------------------------------------- ARTICULOS ------------------------------------------------------------>  
    <div class="row">
        <!-- articulo -->
        @foreach($articles as $article)
            <div class="col-md-6" id="article">
                <div class="article-container">
                    <a href="{{route('art', $article->slug)}}" style="text-decoration:none">
                        <img src="/images/{{ App::isLocale('es')?$article->ruta_image:$article->ruta_en_image }}" style="width:100%; height: 350px;">
                        <a href="#" class="badge badge-success" id="tag">{{ $article->section }}</a>
                        <div class="article-text overlay-text">
                            <p><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></p> 
                            <p><i>{{ $article->author }}</i></p>  
                        </div>
                    </a>
                </div>  
            </div>
        @endforeach     
    </div>
@endsection
