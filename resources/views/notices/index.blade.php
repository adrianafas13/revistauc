@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
	<div class=".xl-container">
	<br>

		<div class="row" id="index-bar">
			<div class="col-8">
				<a type="button" class="btn btn-success" href="{{ route('notices.create') }}"><b>+</b> Nuevo Aviso</a>
			</div>
			<div class="col-4">
				<!--div class="input-group">
					<input type="search" class="form-control rounded" placeholder="Buscar..." aria-label="Search"
						aria-describedby="search-addon" />
					<button type="button" class="btn btn-outline-primary"><i class="fas fa-search"></i> Buscar</button>
				</div-->
			</div>
		</div>

		<hr>

		<div class="title-color">
			<h5><b>Avisos disponibles</b></h5>
		</div>

		<br>

		@if(session('message'))
			<div class="alert alert-success">{{session('message')}}</div>
		@endif
		@if(session('message-modify'))
			<div class="alert alert-warning">{{session('message-modify')}}</div>
		@endif
		@if(session('message-delete'))
			<div class="alert alert-danger">{{session('message-delete')}}</div>
		@endif
		
		<div class="tabla">
			<table class="table table-striped table-bordered">
				<thead class="thead">
					<tr>
						<th scope="col">Aviso / Español</th>
						<th scope="col">Notice / English</th>
						<th scope="col">Modificar</th>
						<th scope="col">Eliminar</th>
					</tr>
				</thead>

				<tbody>
				@foreach($notices as $notice)
					<tr>
						<td><p>{!! $notice->notice_es !!}</p></td>
						<td><p>{!! $notice->notice_en !!}</p></td>
						<td>
							<a href=" {{route('notices.edit', $notice->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
						</td>
						<td>
							<form action="{{route('notices.destroy', $notice->id)}}" method="post">
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
	</div>
</div>

@endsection

</script>