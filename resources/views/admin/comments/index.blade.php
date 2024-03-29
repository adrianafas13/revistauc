@extends('layouts.adminlayout')
@section('content')
<div class="main-admin">
	<div class=".xl-container">
		<br>

		<div class="title-color">
			<h5><b>Comentarios Publicados:</b></h5>
		</div>

		<br>

		<div class="tabla">
			<table class="table table-striped table-bordered">
				<thead class="thead">
					<tr>
						<th scope="col">Comentario</th>
						<th scope="col">Usuario</th>
						<th scope="col">Articulo</th>
						<th scope="col">Aprobado</th>
						<th scope="col">Eliminar</th>
					</tr>
				</thead>

				<tbody>
					@foreach($comments as $comment)
					<tr>
						<td><p>{{ $comment->comment }}</p></td>
						<td><p>{{ $comment->user->name }}</p></td>
						<td><p>{{ $comment->article?$comment->article->title:'' }}</p></td>
						<td><p>{{ $comment->approved?'Si':'No' }}
							@if($comment->approved==0)
								<a href="/admin/comment/{{ $comment->id }}/approved" style="margin-left:10px"><i class="fas fa-check"></i></a>
							@endif
						</p></td>
						<td>
							<form action="{{route('comment.destroy', $comment->id)}}" method="post">
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

		<ul class="pagination justify-content-center">
			{{ $comments->links() }}
		</ul>
	</div>
</div>
@endsection
