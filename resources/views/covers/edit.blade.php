@extends('layouts.adminlayout')
@section('content')

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

h3{
	background-color: #008080;
	color: white;
	text-align: center;
	padding: 12px 20px;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<div class="container">
  <form method="post" action="/cover/{{$cover->id}}">
    <h2>Editar la imagen de portada</h2>
    <br>

    <h3>Español</h3>
    <input type="hidden" name="_method" value="PUT">

  	<div class="row">
  		<div class="col-25" align="center">
  		  <label>Imagen:</label>
  		</div>
  		<div class="col-75">
  		  <input accept="image/*" id="es_cover" name="es_cover" value="{{$cover->es_cover}}">
  		</div>
  	</div>

    
    <h3>English</h3>
  	<div class="row">
      <div class="col-25" align="center">
  		  <label>Image:</label>
  		</div>
  		<div class="col-75">
  		  <input accept="image/*" id="en_cover" name="en_cover" value="{{$cover->en_cover}}">
  		</div>
  	</div>


    		@csrf

  	<div class="row">
  		<input type="submit" name="enviar" value="Actualizar Portada">
  	</div>

  </form>

  <form method="post" action="/cover/{{$cover->id}}">

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="Eliminar Portada">

	@csrf

  </form>
  
</div>

@endsection
