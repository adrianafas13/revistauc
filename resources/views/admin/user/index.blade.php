@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
	<div class="container">
	<br>
		<div class="row" id="index-bar">
			<div class="col-8"></div>
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
			<h5><b>Usuarios Registrados:</b></h5>
		</div>

		<br>

		<div class="tabla">
			<table class="table table-striped table-bordered">

				<thead class="thead">
					<tr>
						<th scope="col">Nombre</th>
						<th scope="col">Correo</th>
						<th scope="col">Rol</th>
						<th scope="col">Modificar</th>
						<th scope="col">Eliminar</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
					<tr>
						<th>{{ $user->name }}</th>
						<th>{{ $user->email }}</th>
						<th>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</th>
						<th>
							<a href=" {{route('user.edit', $user->id )}} ">
								<button type="button" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
							</a>
						</th>

						<th>
							<form action=" {{route('user.destroy', $user->id) }}" method="POST">
								{{method_field('DELETE') }}
								@csrf
								<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
							</form>
						</th>
					</tr>
					@endforeach
				</tbody>

			</table>

		</div>

		<br>

		<ul class="pagination justify-content-center">
			{{ $users->links() }}
		</ul>
	</div>
</div>

@endsection
