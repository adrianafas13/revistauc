@extends('layouts.adminlayout')
@section('content')
<br><br><br>
<div class="container">
	<br>
	<h4>Nuevo Artículo</h4>
	<hr>

  	<form method="post" action="/admin/article" enctype="multipart/form-data">
	  <br>
	  	<h5><i>Información General:</i></h5>
		<hr>
		<div class="row">
    		<div class="col-4">
				<p>Autor:</p>
			</div>
    		<div class="col-8">

			</div>
  		</div>
		<div class="row">
    		<div class="col-4">
				<p>Sección:</p>
			</div>
    		<div class="col-8">
				<select id="section"  name="section">
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
		<!--Español-->
	  	<h5><i>Artículo en Español</i></h5>
		<hr>
		<!--Titulo del articulo en español-->
		<div class="row">
    		<div class="col-4">
				<p>Título:</p>
			</div>
    		<div class="col-8">
				<input type="text" required id="title" name="title" placeholder="Título del Artículo">
			</div>
  		</div>
		<!--Imagen del articulo en español-->
		<div class="row">
    		<div class="col-4">
				<p>Imagen:</p>
			</div>
    		<div class="col-8">
				<input accept="image/*" required type="file" name="image" value="image">
			</div>
  		</div>
		<!--Astra del articulo en español-->
		<div class="row">
    		<div class="col-4">
				<p>Astra del Artículo:</p>
			</div>
    		<div class="col-8">
				<textarea id="text" name="text" required placeholder="Resumen del Artículo" style="width:400px; height:200px"></textarea>
			</div>
  		</div>
		<!--PDF del articulo en español-->
		<div class="row">
    		<div class="col-4">
				<p>Archivo PDF del artículo:</p>
			</div>
    		<div class="col-8">
				<input accept="file/*" required type="file" name="file" value="file">
			</div>
  		</div>
		  <!--English-->
	  	<h5><i>Article on English</i></h5>
		<hr>
		<!--Titulo del articulo en ingles-->
		<div class="row">
    		<div class="col-4">
				<p>Title:</p>
			</div>
    		<div class="col-8">
				<input type="text" required id="en_title" name="en_title" placeholder="Title of Article">
			</div>
  		</div>
		<!--Imagen del articulo en ingles-->
		<div class="row">
    		<div class="col-4">
				<p>Image:</p>
			</div>
    		<div class="col-8">
				<input accept="image/*" required type="file" name="en_image" value="en_image">
			</div>
  		</div>
		<!--Astra del articulo en ingles-->
		<div class="row">
    		<div class="col-4">
				<p>Article resume:</p>
			</div>
    		<div class="col-8">
				<textarea id="en_text" required name="en_text" placeholder="Resume of the Article" style="width:400px; height:200px"></textarea>
			</div>
  		</div>
		<!--PDF del articulo en ingles-->
		<div class="row">
    		<div class="col-4">
				<p>PFD File:</p>
			</div>
    		<div class="col-8">
				<input accept="file/*" required type="file" name="en_file" value="en_file">
			</div>
  		</div>
		

	</form>
</div>

@endsection

<!--<style>
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



  	

  	<div class="row">
		  <div class="col-25" align="center">
		    <label>Autor:</label>
		  </div>
		  <div class="col-75">
		    <input type="text" required id="author" name="author" placeholder="Autor del Artículo">
		  </div>
		</div>

		<div class="row">
    	<div class="col-25" align="center">
      	<label>Sección:</label>
    	</div>
	    <div class="col-75">
  		  <select id="section"  name="section">
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
		    <input type="text" required id="title" name="title" placeholder="Título del Artículo">
		  </div>
  	</div>
		
		<div class="row">
		  <div class="col-25" align="center">
		    <label>Imagen:</label>
		  </div>
		  <div class="col-75">
        <input accept="image/*" required type="file" name="image" value="image">
		  </div>
		</div>

  	<div class="row">
    	<div class="col-25" align="center">
      	<label>Texto:</label>
    	</div>
    	<div class="col-75">
      	<textarea id="text" name="text" required placeholder="Resumen del Artículo" style="height:200px"></textarea>
    	</div>
  	</div>

  	<div class="row">
    	<div class="col-25" align="center">
      	<label>Archivo:</label>
    	</div>
	    <div class="col-75">
	      <input accept="file/*" required type="file" name="file" value="file">
	    </div>
  	</div>

  	<h3>Article on English</h3>
  	<div class="row">
    	<div class="col-25" align="center">
      	<label>Title:</label>
    	</div>
		  <div class="col-75">
		    <input type="text" required id="en_title" name="en_title" placeholder="Title of Article">
		  </div>
  	</div>

		<div class="row">
		  <div class="col-25" align="center">
		    <label>Image:</label>
		  </div>
		  <div class="col-75">
		    <input accept="image/*" required type="file" name="en_image" value="en_image">
		  </div>
		</div>

  	<div class="row">
      <div class="col-25" align="center">
      	<label>Text:</label>
    	</div>
    	<div class="col-75">
      	<textarea id="en_text" required name="en_text" placeholder="Resume of the Article" style="height:200px"></textarea>
    	</div>
  	</div>

  	<div class="row">
      <div class="col-25" align="center">
        <label>file:</label>
      </div>
      <div class="col-75">
        <input accept="file/*" required type="file" name="en_file" value="en_file">
      </div>
    </div>

  		@csrf

		<div class="row justify-content-center">
		    	<input type="submit" name="enviar" value="Publicar">
		</div>

  </form>

</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif-->


