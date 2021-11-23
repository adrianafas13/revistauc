@extends('layouts.applayout')
@section('content')
<div class="main">
<br>
    <div class="container" >
        <div class="title-sections">
            <h4><b>@lang('data.ediciones')</b></h4>
        </div>
        <hr>

        <div class="container mt-5">
        <!-- articulo -->
        @foreach($editions as $edition)
        <div class="card mb-3">
            <div class="row no-gutters">

                <div class="col-md-4">
                    <img src="/images/{{ $edition->edition_route_image }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5><b>{{ App::isLocale('es')?$edition->edition_title:$edition->edition_title_en }}</b></h5>
                        <p><b> @lang('data.fechap') </b> {{ $edition->edition_date }}</p>
                        <p>{!! App::isLocale('es')?$edition->edition_description:$edition->edition_description_en !!}</p>



                        <a href="#" type="button" class="btn btn-outline-dark">@lang('data.full_edition')</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <br>
    </div>


        <br>
    </div>
</div>
@endsection
