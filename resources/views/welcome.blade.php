
@extends('layouts.userlayout')

@section('content')
<div style="background-color:#EAF0F6;">
<br>
<div class="w3-row">
    <div class="w3-twothird">
    @foreach($articles as $article)
        <div class="w3-half w3-container w3-margin-bottom w3-hover-opacity">
            <a href="{{route('art', $article->slug)}}" style="text-decoration:none">
                <div class="w3-display-container" style="font-family:'Oswald', sans-serif;font-size:24px, font-weight:400px, color: #000000;">
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
   <div class="w3-third">
        <div class="w3-card w3-margin-left w3-margin-right w3-margin-bottom">
            <div class="w3-container w3-padding" style="background-color: #386685;">
                <h4>@lang('data.popular')</h4>
            </div>
            @foreach($articles as $article)
            <ul class="w3-ul w3-white w3-border w3-hover-gray">
                <a href="{{route('art', $article->slug)}}">
                <li class="w3-padding-12">
                    <div class="w3-row">
                        <div class="w3-margin" style="font-family:'Oswald', sans-serif;font-size:14px, font-weight:400px, color: #000000;">
                            <span><p><b>{{ App::isLocale('es')?$article->title:$article->en_title }}
                            </b></p></span>
                            <span ><p>{{ $article->author }}</p></span>
                            <span><p>@lang('data.'.$article->section)</p></span> 
                        </div>
                    </div>  
                </li>
            </a>
            </ul>
            @endforeach
        </div>
    </div>
    
  </div>

</div>
</div>
<div class="personalize-pagination" style="display:flex;justify-content:center;"> 
    {{ $articles->links() }}
</div>
</div>
@endsection