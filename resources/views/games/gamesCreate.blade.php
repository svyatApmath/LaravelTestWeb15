@extends("games.template")

@section("content")
	
	<h1>Create Game</h1>

	<hr>

	{!! HTML::linkAction('GamesController@index', 'Main Menu', array(), array('class' => 'btn btn-default')) !!}
	
@stop