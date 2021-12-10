@extends('layouts.adminlayout')
@section('content')
<div class="container">
<br>
	<div class="row">
	<div class="col-8">
			<h4><b>Áreas de Investigación disponible:</b></h4>
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
				<th scope="col">Área / Español</th>
				<th scope="col">Area / English</th>
				<th scope="col">Modificar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>

		<tbody>
		@foreach($areas as $area)
			<tr>
				<td><p>{{ $area->area_es }}</p></td>
				<td><p>{{ $area->area_en }}</p></td>
				<td>
					<a href=" {{route('areas.edit', $area->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
				</td>
				<td>
					<form action="{{route('areas.destroy', $area->id)}}" method="post">
						@csrf
						@method('delete')
							<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>

	</table>

	<br>
</div>

@endsection