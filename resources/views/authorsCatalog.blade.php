@extends('layouts.applayout')
@section('content')

<div class="main">
    <br>
    <div class="container">
        <div class="title-author">
            <h4><b>@lang('data.catalogo')</b></h4>
        </div>
        <hr>
        <div class="list-group">
            @foreach($authors as $author)
                <div class="contenido-popular-bar">
                    <li class="list-group-item">
                        <button class="btn btn-block text-left" type="button" href="#" data-toggle="modal" data-target="#authorsModal">
                            <h6><b>{{ $author->name_author }}</b></h6>
                        </button> 
                    </li>
                </div>
            @endforeach
        </div>
    </div>
    <br>
</div>
@include('modalAuthors')
@endsection


<!-- <div class="col-sm-6">

                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="/images/{{ $author->route_image_author }}" style="width: 100%; height: 100%">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body" style="margin-left: 25px">
                                            <h5 class="card-title"><b>{{ $author->name_author}}</b></h5>
                                            <p class="card-text"><small class="text-muted">{{ $author->email_author}}</small></p>
                                            <p class="card-text">{{ $author->grades_author}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                endforeach
                </div>-->
