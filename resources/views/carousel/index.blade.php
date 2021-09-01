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
			<th scope="col">Descripción</th>
			<th scope="col">Description</th>
			<th scope="col">Eliminar</th>
		</tr>
		</thead>

		<tbody>
		@foreach($carousel as $carousel)
		<tr>
			<td><p>{{ $carousel->title_carousel }}</p></td>
			<td><p>{{ $carousel->en_title_carousel }}</p></td>
			<td>
				<form action="{{route('carousel.destroy', $carousel->id)}}" method="post">
					@csrf
					@method('delete')
					<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
				</form>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>

</div>

@endsection