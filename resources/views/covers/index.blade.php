
	@foreach($covers as $cover)
        
            <header class="w3-display-container w3-content w3-wide" style="max-width:1300px" id="cover">
                <img src="/images/{{ $cover->ruta_es_cover }}" style="width:100%; height:600px">
            </header>
        @endforeach
		

