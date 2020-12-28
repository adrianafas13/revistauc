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

h2{
	background-color: red;
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
  <form method="post" action="/admin/article/{{$article->id}}" enctype="multipart/form-data">
      @csrf
      @method('put')
    <h2>Modificar el Artículo</h2>
    <br>
    <h3>Información General</h3>
    <input type="hidden" name="_method" value="PUT">

    <div class="row">
  		<div class="col-25" align="center">
  		  <label>Autor:</label>
  		</div>
  		<div class="col-75">
  		  <input type="text" required id="author" name="author" value="{{$article->author}}">
  		</div>
  	</div>

  	<div class="row">
      <div class="col-25" align="center">
        <label>Sección:</label>
      </div>
    	<div class="col-75">
    		<select id="section" name="section" value="{{$article->section}}">
    			<option value="administracion">Administracion</option>
    			<option value="arte">Arte</option>
    			<option value="idiomas">Idiomas</option>
    			<option value="informatica">Informatica</option>
    			<option value="derecho">Derecho</option>
    			<option value="gerencia">Gerencia</option>
    			<option value="historia">Historia</option>
    			<option value="salud">Salud</option>
    		</select>
    	</div>
    </div>

    <br>
    		
    <h3>Artículo en Español</h3>
    <div class="row">
      <div class="col-25" align="center">
        <label>Título:</label>
      </div>
  		<div class="col-75">
  		  <input type="text" required id="title" name="title" value="{{$article->title}}">
  		</div>
    </div>
  		
  	<div class="row">
  		<div class="col-25" align="center">
  		  <label>Imagen:</label>
  		</div>
  		<div class="col-75">
  		  <input accept="image/*"  id="image" name="image" type="file">
  		</div>
  	</div>

    <div class="row">
      <div class="col-25" align="center">
        <label>Texto:</label>
      </div>
      <div class="col-75">
        <textarea id="text" required name="text" style="height:200px">{{$article->text}}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25" align="center">
        <label>Archvo:</label>
      </div>
      <div class="col-75">
        <input accept="file/*"  id="file" name="file" type="file">
      </div>
    </div>

    <h3>Article on English</h3>
    <div class="row">
      <div class="col-25" align="center">
        <label>Title:</label>
      </div>
  		<div class="col-75">
  		  <input type="text" required id="en_title" name="en_title" value="{{$article->en_title}}">
  		</div>
    </div>

  	<div class="row">
      <div class="col-25" align="center">
  		  <label>Image:</label>
  		</div>
  		<div class="col-75">
  		  <input accept="image/*"  id="en_image" name="en_image" type="file">
  		</div>
  	</div>

    <div class="row">
      <div class="col-25" align="center">
        <label>Text:</label>
      </div>
      <div class="col-75">
        <textarea id="en_text" required name="en_text" style="height:200px">{{$article->en_text}}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25" align="center">
        <label>File:</label>
      </div>
      <div class="col-75">
        <input accept="file/*"  id="en_file" name="en_file" type="file">
      </div>
    </div>

    		@csrf

  	<div class="row justify-content-center">
  		<input type="submit" name="enviar" value="Actualizar Artículo">
  	</div>
  </form>

  
  
</div>

@endsection

