@extends('layouts.applayout')
@section('content')
<br>
<div class="main">
    <div class="container" >
        <div class="title-sections">
            <h2><b>EDICIONES PUBLICADAS</b></h2>
        </div>
        <hr>

        <div class="row" id="edicion">
            <div class="col-sm">
                <div class="card">
                <img src="images/uni1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">EDICIÓN: <b>ENERO 2021</b></h5>
                        
                        <a href="#" class="btn btn-outline-secondary">Ver edición</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
            <div class="card">
                <img src="images/uni2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">EDICIÓN: <b>ENERO 2021</b></h5>
                        
                        <a href="#" class="btn btn-outline-secondary">Ver edición</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
            <div class="card">
                <img src="images/uni3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">EDICIÓN: <b>ENERO 2021</b></h5>
                        <a href="#" class="btn btn-outline-secondary">Ver edición</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection