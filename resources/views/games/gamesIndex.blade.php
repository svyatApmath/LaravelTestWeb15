@extends("games.template")

@section("content")
	
	<h1>Test Game Panel</h1>

	<hr>

	<form><button type="button" 
	class="btn btn-default" onclick="window.location='{{ route("games.create") }}'">Create</button></form>

	{!! Form::open(array('route' => 'games')) !!}
		{!! Form::submit('Store', array("class"=>"btn btn-default")) !!}
	{!! Form::close() !!}

	<form><button type="button" class="btn btn-default" onclick="window.location='{{ route("games.show", ['id' => 1]) }}'">Show</button></form>

	<form><button type="button" class="btn btn-default" onclick="window.location='{{ route("games.edit", ['id' => 1]) }}'">Edit</button></form>

	{!! Form::open(array("route" => array("games.destroy", "id" => 1))) !!}
		<button type="submit" class="btn btn-default">Update</button>
	{!! Form::close() !!}

	{!! Form::open(array("route" => array("games.destroy", "id" => 1), "method" => "delete")) !!}
		<button type="submit" class="btn btn-default">Destroy</button>
	{!! Form::close() !!}

	<hr>

	<img src="http://renotes.ru/content/public/upload/velosiped-iz-kostyley_0_o.jpg" />
	
@stop
