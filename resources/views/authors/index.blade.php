@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
	<div class="container">
	<br>

		<div class="row">
			<div class="col-8" id="index-bar">
				<a type="button" class="btn btn-success" href="{{ route('authors.create') }}"><b>+</b> Nuevo Autor</a>
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

		<div class="title-color">
			<h5><b>Autores Registrados:</b></h5>
		</div>

		<br>

		@if(session('message'))
			<div class="alert alert-success">{{session('message')}}</div>
		@endif

		<div class="tabla">
			<table class="table table-striped table-bordered">
				<thead class="thead">
				<tr>
					<th scope="col">Apellido y Nombre</th>
					<th scope="col">Modificar</th>
					<th scope="col">Eliminar</th>
				</tr>
				</thead>

				<tbody>
				@foreach($authors as $author)
				<tr>
					<td><p>{{ $author->name_author }}</p></td>
					<td>
						<a href=" {{route('authors.edit', $author->id)}} " class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
					</td>
					<td>
						<form action="{{route('authors.destroy', $author->id)}}" method="post">
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

		<br>

		<ul class="pagination justify-content-center">
			{{ $authors->links() }}
		</ul>
	</div>
</div>

@endsection
