@extends('layouts.applayout')
@section('content')
<br>
    <div class="container">
        <div class="title-author">
            <h4><b>CATÁLOGO DE AUTORES:</b></h4>
        </div>
        <hr>
        <div class="overflow-hidden">
            <div class="row">
                @foreach($authors as $author)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="$author->route_image_author }}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $author->name_author}}</h5>
                                    <p class="card-text">{{ $author->name_author}}</p>
                                    <p class="card-text"><small class="text-muted">{{ $author->name_author}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
<br>
@include('modalAuthors')
@endsection
