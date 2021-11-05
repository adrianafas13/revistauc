@extends('layouts.adminlayout')
@section('content')
<div class="container">
<br>
	<h4><b>Modificación del rol del usuario en el sistema:</b></h4>
	<hr>
	<div class="row">
		<div class="col-6">
			<div class="row justify-content-center">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
                        <h5><b>Editar rol:</b></h5>
						<hr>
						<form action=" {{route('user.update', ['user' => $user->id]) }} " method="POST">
						@csrf
						{{ method_field('PUT') }}
						@foreach($roles as $role)
							<div class="form-check">
								<input type="radio" name="roles[]" value=" {{$role->id}} "
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
		<div class="col-6">
			<div class="english-backgorund">
				<h6><b>Especificacion de cada rol:</b></h6>
				<hr>
				<h6><b>Admin</b></h6>
				<p>Administrador del sistema: Este tendrá total acceso a todas las funciones dentro del panel de administrador, incuyendo la modificacion de los roles de usuario<p>
				<h6><b>Editor</b></h6>
				<p>aisjbdwibedkw ajsdbh ajdbjhbdj ajshdjyavbdjb ausgdujvbdk aksudidbuhikbjdka aiusbdik<p>
				<h6><b>User</b></h6>
				<p>aisnhoasndo aksjdba aksbhdiabuka aksjbkabn ajsvyhdjasvydjvd kausbk aisdjavb asguavjkaksbd<p>
			</div>
		</div>
	</div>
</div>

@endsection
