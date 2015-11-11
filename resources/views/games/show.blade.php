@extends("games.template")


@section("content")

    <h2> <span class="label label-default">{{ $game->title }}</span></h2>

    <hr>

    <div class="panel panel-default">
	  <div class="panel-heading">Description</div>
	  <div class="panel-body">
	    {{$game->description}}
	  </div>
	</div>

    {!! HTML::linkAction('GamesController@index', 'Back', array(), array('class' => 'btn btn-default')) !!}
@stop
