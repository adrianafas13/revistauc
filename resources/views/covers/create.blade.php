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
  <form method="post" action="/admin/cover" enctype="multipart/form-data">
    <h3>Imagen de Portada en Español</h3>
		<div class="row">
		  <div class="col-25" align="center">
		    <label>Imagen:</label>
		  </div>
		  <div class="col-75">
        <input accept="image/*" required type="file" name="es_cover" value="es_cover">
		  </div>
		</div>

  	<h3>Cover Image in English</h3>
		<div class="row">
		  <div class="col-25" align="center">
		    <label>Image:</label>
		  </div>
		  <div class="col-75">
		    <input accept="image/*" required type="file" name="en_cover" value="en_cover">
		  </div>
		</div>

  		@csrf

		<div class="row justify-content-center">
		    	<input type="submit" name="enviar" value="Guardar">
		</div>

  </form>

</div>
	
@endsection
