@extends('layouts.adminlayout')

@section('content')
<div class="container">
<br>
	<div class="row">
	
		<div class="col-8">
			<h4>Informacion del Carousel:</h4>
		</div>
		<div class="col-4">
			<div class="input-group">
				<input type="search" class="form-control rounded" placeholder="Buscar..." aria-label="Search"
					aria-describedby="search-addon" />
				<button type="button" class="btn btn-outline-primary">Buscar</button>
			</div>
		</div>
	</div>
	<hr>

	<table class="table table-striped table-bordered">
		<thead class="thead-dark">
		<tr>
			<th scope="col">Título / Español</th>
			<th scope="col">Title / English</th>
			<th scope="col">Titulo / Italiano</th>
			<th scope="col">Modificar</th>
			<th scope="col">Eliminar</th>
		</tr>
		</thead>

		<tbody>
		
		<tr>
			<td><p>Español</p></td>
			<td><p>English</p></td>
			<td><p>Italiano</p></td>
			<td>	
				<a href="#" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
			</td>
			<td>
				<form action="#" method="post">
					<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
				</form>
			</td>
		</tr>
		
		</tbody>
	</table>

</div>

@endsection