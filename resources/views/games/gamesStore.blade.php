@extends("games.template")

@section("content")
	
	<h1>Games Store</h1>

	<hr>

	<div class="btn-group">
		<button type="button" 
			class="btn" onclick="window.location='{{ route("games") }}'">Main Menu</button>
		
	</div>
	
@stop