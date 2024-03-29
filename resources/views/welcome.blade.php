@extends('layouts.applayout')
    @section('content')
    <div class="main">
        <br>
        @if(!empty($notices))
            @foreach($notices as $notice)
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-12 .col-sm-12 col-md-12 .col-lg-12 .col-xl-12">
                            <div class="aviso">
                                <h5><b>AVISO</b></h6>
                                <p>{!! App::isLocale('es')?$notice->notice_es:$notice->notice_en !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        @if(!empty($edition))
        
            <div class="container-fluid">
                <div class="row">
                <!---- Portada de la ultima edicion ------------------------------------------------------------>
                    <div class="col-12 .col-sm-12 col-md-6 .col-lg-6 .col-xl-6">
                    <br>
                        <div class="edition-cover">
                            <img src="/images/{{ $edition->edition_route_image }}">
                        </div>
                    </div>
                    <!------------------ Indice de la ultima edicion ------------------------------------------------------------>
                    <div class="col-12 .col-sm-12 col-md-6 .col-lg-6 .col-xl-6" id="index">
                        <div class="list-group">
                            <!-- titulo -->
                            <div class="list-group-item list-group-item-action" id="index-cabecera">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5><b>@lang('data.indice')</b></h5>
                                    <i class="fas fa-list"></i>
                                </div>
                            </div>
                            <!-- lista de los articulos de la ultima edicion -->
                            @foreach($articles as $article)
                                <div class="index-contenido">
                                    <li class="list-group-item">
                                        <p>{{ App::isLocale('es')?$article->title:$article->en_title}}</p>
                                    </li>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!------------- nombre de la ultima edición ------------------------------------------------------------>
                <hr>
                    <div class="edition_title">
                        <h4><b>{{ App::isLocale('es')?$edition->edition_title:$edition->edition_title_en }}</b></h4>
                    </div>
                <hr>
            </div>
            <!-------------- artículos de la ultima edicion con imagen y enlace ------------------------------------------------------------>
            <div class="container mt-5">
                <!-- ciclo de recorrido para la visualizacion de los articulos -->
                @foreach($articles as $article)
                <div class="articulos-card">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4" id="articulos-card-img">
                                <a href="{{route('art', $article->slug)}}">
                                    <img src="images/{{$article->ruta_image}}" class="img-fluid h-100">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" id="articulos-card-informacion">
                                    <a class="badge" href="{{route('areas', $article->area->id)}}">{{ App::isLocale('es')?$article->area->area_es:$article->area->area_en }}</a>
                                    <h5><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></h5>
                                    <p>{{ $article->author->name_author }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $edition->edition_date }}</small></p>
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
        @endif
@endsection

