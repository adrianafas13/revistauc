
@extends('layouts.applayout')
@section('content')

    <br>
    <div class="row">
        
        <!-- Carousel -->
        <div class="col-sm-9 col-md-6 col-lg-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="images/6261.jpg" alt="First Slide" style="width:100%; height:450px;">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="images/6261.jpg" alt="Second Slide" style="width:100%; height:450px;">
                    </div>

                    <div class="carousel-item">
                        <img src="images/6261.jpg" alt="Third Slide" style="width:100%; height:450px;">
                    </div>
                </div>

                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>

                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

        </div>

        <!-- lateral bar -->
        <div class="col-sm-3 col-md-6 col-lg-4">
            <div class="popular-bar">
                <h4>@lang('data.popular')</h4>
            </div>

            @foreach($articles as $article)
                <ul class="list-group">
                    <a href="{{route('art', $article->slug)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ App::isLocale('es')?$article->title:$article->en_title }}</h5>
                            <small class="text-muted">@lang('data.'.$article->section)</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">{{ $article->author }}</small>
                    </a>
                </ul>
            @endforeach

            <div class="footer-popular-bar">
                <i class="fas fa-star"></i>
            </div>
        </div>

    </div>

    <!-- edition name -->
    <div class="container-title">
        <br>
            <hr>
                <h2>prueba</h2>
            <hr>
        <br>
    </div>
    
    <div class="row">

        <!-- articles -->
        @foreach($articles as $article)
            <div class="col-6">
                <div class="info-container">
                    <a href="{{route('art', $article->slug)}}" style="text-decoration:none">
                        <img src="/images/{{ App::isLocale('es')?$article->ruta_image:$article->ruta_en_image }}" style="width:100%; height: 350px;">
                        <div class="text-block">
                            <p><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></p> 
                            <p><i>{{ $article->author }}</i></p>
                            <p><i>{{ $article->created_at }}</i></p>  
                        </div>
                </div> 
            </div>
        @endforeach
             
    </div>

    <!-- pagination -->
    <div class="personalize-pagination" style="display:flex;justify-content:center;"> 
        {{ $articles->links() }}
    </div>

    <script>
        $(document).ready(function(){
            $("#myCarousel").carousel();
        });
    </script>

@endsection
