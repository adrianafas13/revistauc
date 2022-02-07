@extends('layouts.applayout')
    @section('content')
        <div class="main">
        <br>
            <div class="container">
                <div class="title-sections">
                    <h4><b>@lang('data.area')</b></h4>
                </div>
                <hr>
                <div class="container mt-5">
                    <!-- ciclo de recorrido para la visualizacion de los articulos -->

                    @foreach($articles as $article)
                    <div class="articulos-card">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" id="articulos-card-img">
                                    <a href="{{route('art', $article->slug)}}">
                                        <img src="/images/{{$article->ruta_image}}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body" id="articulos-card-informacion">
                                        <h6><a href="#" class="badge">{{ App::isLocale('es')?$article->area->area_es:$article->area->area_en }}</a></h6>
                                        <h5><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></h5>
                                        <p>{{ $article->author->name_author }}</p>
                                        <a type="button" class="btn btn-outline-dark" href="{{route('art', $article->slug)}}">@lang('data.ver_mas')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <br>
                </div>
            </div>
        </div>
@endsection