@extends('layouts.adminlayout')
@section('content')
<br>
<div class="container">
	<br>
	<div class="row">
		<div class="col-8">
		<br><br>
			<h4>Lista de artículos publicados:</h4>
		</div>
		<div class="col-4">
		<br><br>
			<div class="input-group">
				
				<input type="text" class="form-control" placeholder="Buscar..." aria-label="buscardor_usuarios" aria-describedby="btnBuscadorUsuarios">
				<div class="input-group-prepend">
					<button type="button" id="btnBuscadorUsuarios"class="btn btn-primary btn-sm"> <i class="fas fa-search"> </i></button>
				</div>
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
				<th scope="col">Autor</th>
				<th scope="col">Sección</th>
				<th scope="col">Modificar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>

		<tbody>
			@foreach($articles as $article)
			<tr>
				<td><p>{{ $article->title }}</p></td>
				<td><p>{{ $article->en_title }}</p></td>
				<td><p>italiano</p></td>
				<td><p>{{ $article->author }}</p></td>
				<td><p>{{ $article->section }}</p></td>
		  		<td>	
		  			<a href="{{route('article.edit', $article->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
		  		</td>
		  		<td>
					<form action="{{route('article.destroy', $article->id)}}" method="post">
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