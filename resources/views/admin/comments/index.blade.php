@extends('layouts.adminlayout')
@section('content')
<div class="row justify-content-center">
<h2><b>Commentarios Publicados</b></h2>
</div>
<div class="container">
<table class="w3-table-all w3-striped w3-bordered w3-centered w3-hoverable">
	<tr class="w3-teal">
		<th scope="col">Comentario</th>
		<th scope="col">Aprobado</th>
		<th scope="col">Usuario</th>
		<th scope="col">Articulo</th>
		<th scope="col">Operaciones</th>
	</tr>
	@foreach($comments as $comment)
	<tr>	
		<td><p>{{ $comment->comment }}</p></td>
		<td><p>{{ $comment->approved?'Si':'No' }}
			@if($comment->approved==0)
			<a href="/admin/comment/{{ $comment->id }}/approved" style="margin-left:10px"><i class="fas fa-check"></i></a>
			@endif
		</p></td>
		<td><p>{{ $comment->user->name }}</p></td>
		<td><p>{{ $comment->article?$comment->article->title:'' }}</p></td>
		<td>
			<form action="{{route('comment.destroy', $comment->id)}}" method="post">
				@csrf
				@method('delete')
				<button type="submit" class="w3-btn"><i class="fas fa-trash"></i></button>
			</form>
		</td>
	</tr>
	@endforeach

</table>
</div>
<div class="d-flex justify-content-center mt-2">
{{$comments->links()}}
</div>

@endsection