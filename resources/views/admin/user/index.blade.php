@extends('layouts.adminlayout')
@section('content')
<div class="row justify-content-center">
<h2><b>Lista de Usuarios</b></h2>
</div>
<div class="container">
<table class="w3-table-all w3-striped w3-bordered w3-centered w3-hoverable">
	<tr class="w3-teal">
	  
	  <th scope="col">Nombre</th>
	  <th scope="col">Correo</th>
	  <th scope="col">Rol</th>
	  <th scope="col">Operaciones</th>
	  <th scope="col"></th>
	</tr>
	@foreach($users as $user)
	<tr>
		<th>{{ $user->name }}</th>
		<th>{{ $user->email }}</th>
		<th>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</th>
		<th>
			<a href=" {{route('user.edit', $user->id )}} ">
				<button type="button" class="btn btn-primary btn-sm">Modificar</button>
			</a>
		</th>

		<th>
			<form action=" {{route('user.destroy', $user->id) }}" method="POST">
				{{method_field('DELETE') }}
				@csrf
				<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
    		</form>
    	</th>

		
	</tr>
	<tr>
		  
	 @endforeach

</table>
</tr>

@endsection 