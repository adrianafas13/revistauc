@extends('layouts.adminlayout')
@section('content')
<div class="container">
<br>
	<h4>Rol del usuario en el sistema:</b></h4>
	<hr>
	<div class="row">
		<div class="col-6">
			<div class="row justify-content-center">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5>Editar rol:</h5>
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
				<p>aklsndlkandlkasn alksndlkasndkl aksjdbnkjsdnk ajsdb akjsdkjb<p>
				<h6><b>Comment_admin</b></h6>
				<p>aisjbdwibedkw ajsdbh ajdbjhbdj ajshdjyavbdjb ausgdujvbdk aksudidbuhikbjdka aiusbdik<p>
				<h6><b>User</b></h6>
				<p>aisnhoasndo aksjdba aksbhdiabuka aksjbkabn ajsvyhdjasvydjvd kausbk aisdjavb asguavjkaksbd<p>
			</div>
		</div>
	</div>
</div>

@endsection 
