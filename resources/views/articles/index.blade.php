@extends('layouts.adminlayout')
@section('content')
<div class="row justify-content-center">
<h2><b>Artículos Publicados</b></h2>
</div>
<div class="container">
<table class="w3-table-all w3-striped w3-bordered w3-centered w3-hoverable">
	<tr class="w3-teal">
	  <th scope="col">Título / Español</th>
	  <th scope="col">Title / English</th>
	  <th scope="col">Autor</th>
	  <th scope="col">Sección</th>
	  <th scope="col">Operaciones</th>
	  <th scope="col"></th>
	</tr>
	@foreach($articles as $article)
	<tr>
		
		  <td><p>{{ $article->title }}</p></td>
		  <td><p>{{ $article->en_title }}</p></td>
		  <td><p>{{ $article->author }}</p></td>
		  <td><p>{{ $article->section }}</p></td>
		  <td>
		  	<a href="{{route('article.edit', $article->id)}}"><i class="fas fa-edit"></i></a>
		  </td>
		  <td>
			<form action="{{route('article.destroy', $article->id)}}" method="post">
				@csrf
				@method('delete')
				<button type="submit" class="w3-btn"><i class="fas fa-trash"></i></button>
			</form>
		  </td>
	</tr>
	 @endforeach

</table>
</div>

@endsection