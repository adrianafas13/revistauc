
@extends('layouts.userlayout')

@section('content')
<div class="w3-container">
    <div style="background-color:#fff;">
    <br>
        <div class="w3-row">
            <div class="w3-twothird">
                <img  src="images/6261.jpg" alt="foto" width="100%">      
            </div>

            <div class="w3-third">
                <div class="w3-margin-left" style="border-bottom-left-radius:20px; border-bottom-right-radius:20px;">
                    <div class="w3-center" style="background-color: #A8EA7C; padding:1px; border-top-left-radius:20px; border-top-right-radius:20px;">
                        <h4>@lang('data.popular')</h4>
                    </div>
                    @foreach($articles as $article)
                    <ul class="w3-ul w3-border w3-hover-gray">
                        <a href="{{route('art', $article->slug)}}">
                            <li class="w3-padding-6">
                                <div class="w3-row" >
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

        <div class="w3-center">
            <br>
                <hr>
                    <h2>prueba</h2>
                <hr>
            <br>
        </div>
    
        <div class="w3-row">
            <div class="w3-half">
                @foreach($articles as $article)
                    <div class="w3-margin-bottom w3-hover-opacity">
                        <a href="{{route('art', $article->slug)}}" style="text-decoration:none">
                            <div class="w3-display-container" style="font-family:'Oswald', sans-serif;font-size:24px, font-weight:400px, color: #000000;">
                            <div class="w3-display-topright w3-black w3-padding"><p>@lang('data.'.$article->section)</p></div>
                                <img src="/images/{{ App::isLocale('es')?$article->ruta_image:$article->ruta_en_image }}" style="width:100%; height: 350px;">
                                    <div class="w3-container" style="background-color: #D7DADC;">
                                        <div class="w3-center">
                                            <p><b>{{ App::isLocale('es')?$article->title:$article->en_title }}</b></p>
                                        </div>
                                        <p><i>{{ $article->author }}</i></p>
                                        <p><i>{{ $article->created_at }}</i></p>
                                          
                                    </div>
                            </div>          
                        </a>
                    </div>  
                @endforeach 
            </div> 
        </div>
    
        <div class="personalize-pagination" style="display:flex;justify-content:center;"> 
            {{ $articles->links() }}
        </div>

    </div>
</div>

@endsection
