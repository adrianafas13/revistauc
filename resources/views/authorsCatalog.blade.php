@extends('layouts.applayout')
@section('content')

<div class="main">
    <br>
    <div class="container">
        <div class="title-author">
            <h4><b>CATÁLOGO DE AUTORES:</b></h4>
        </div>
        <hr>
        <div class="overflow-hidden">
            <div class="row">
                @foreach($authors as $author)
                    <div class="col-6">

                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="/images/{{ $author->route_image_author }}" style="width: 200px; height: 200px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body" style="margin-left: 25px">
                                            <h5 class="card-title">{{ $author->name_author}}</h5>
                                            <p class="card-text">{{ $author->email_author}}</p>
                                            <p class="card-text"><small class="text-muted">{{ $author->grades_author}}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                @endforeach
                </div>

            </div>

    </div>
    <br>

</div>
@include('modalAuthors')
@endsection
