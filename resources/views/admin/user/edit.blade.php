@extends('layouts.adminlayout')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<h2><b>Editar Rol del Usuario<b></h2>
	</div>
	<div class="row justify-content-center">
	<div class="card border-primary mb-3" style="width: 18rem;">
	  <div class="card-body">
	    <form action=" {{route('user.update', ['user' => $user->id]) }} " method="POST">
			@csrf
			{{ method_field('PUT') }}
			@foreach($roles as $role)
				<div class="form-check">
					<input type="checkbox" name="roles[]" value=" {{$role->id}} "
					@if($user->hasAnyRole($role->name))
						checked
					@endif
					>
					<label> {{$role->name}} </label>
				</div>
			@endforeach
			<div class="row justify-content-center">
		<button type="submit"class="btn btn-primary">
			Modificar
		</button>
	</div>
		</form> 
	  </div>
	</div>
	</div>
</div>
@endsection