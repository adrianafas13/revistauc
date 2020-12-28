@extends('layouts.adminlayout')
@section('content')
<div class="row justify-content-center">
<h2><b>Información de Contacto</b></h2>
</div>
<div class="container">
<table class="w3-table-all w3-striped w3-bordered w3-centered w3-hoverable">
	<tr class="w3-teal">

	  <th scope="col">Título / Español</th>
	  <th scope="col">Title / English</th>
	  <th scope="col">Operaciones</th>
	  <th scope="col"></th>

	</tr>

	    @foreach($contacts as $contact)
	    <tr>
		
			  <td><p>{{ $contact->contact_title }}</p></td>
			  <td><p>{{ $contact->en_contact_title }}</p></td>
			  <td style="display:flex;justify-content:center;">
			  	<a href="{{route('contact.edit', $contact->id)}}" class="w3-btn"><i class="fas fa-edit"></i></a>
			  </td>
			  <td>
				<form action="{{route('contact.destroy', $contact->id)}}" method="post">
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
{{$contacts->links()}}
</div>

@endsection

