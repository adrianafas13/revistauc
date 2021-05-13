@extends('layouts.applayout')
 
@section('content')
<br>
<div class="container-fluid">
    <div class="title-sections">
        <h2><b>@lang('data.resultados')</b></h2>
    </div>
    <hr>

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
  
    <div class="personalize-pagination" style="display:flex;justify-content:center;"> 
    {{ $articles->links() }}
    </div>
</div>
@endsection