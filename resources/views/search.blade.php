@extends('layouts.applayout')
 
@section('content')

<div style="background-color:#EAF0F6;">
<br>
<div class="w3-center">
<h2><b><i>@lang('data.resultados')</i></b></h2>
<hr>
</div>

    <div class="w3-row-padding">
        @foreach($articles as $article)
            <div class="w3-third w3-container w3-margin-bottom w3-hover-opacity">
                <a href="{{route('art', $article->slug)}}" style="text-decoration:none">
                    <div class="w3-display-container">
                        <img src="/images/{{ App::isLocale('es')?$article->ruta_image:$article->ruta_en_image }}" style="width:100%; height: 350px;">
                        <div class="w3-container" style="background-color: #D7DADC;">
                            <div class="w3-center">
                            <p><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></p>
                        </div>
                            <p><i>{{ $article->author }}</i></p>
                            <p><i>{{ $article->created_at }}</i></p>
                        <p>@lang('data.'.$article->section)</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="personalize-pagination" style="display:flex;justify-content:center;"> 
    {{ $articles->links() }}
</div>
</div>
@endsection