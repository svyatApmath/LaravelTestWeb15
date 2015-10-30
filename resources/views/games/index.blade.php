@extends("games.template")

@section("content")

    <h1>Test Game Panel</h1>

    <hr>

    {!! HTML::linkAction('GamesController@create', 'Create', array(), array('class' => 'btn btn-default')) !!}

    {!! Form::open(array('route' => 'games', 'style'=>'display:inline')) !!}
        {!! Form::submit('Store', array("class"=>"btn btn-default")) !!}
    {!! Form::close() !!}

    {!! HTML::linkAction('GamesController@show', 'Show', array('id' => 1), array('class' => 'btn btn-default')) !!}

    {!! HTML::linkAction('GamesController@show', 'Edit', array('id' => 1), array('class' => 'btn btn-default')) !!}

    {!! Form::open(array("route" => array("games.destroy", "id" => 1),'style'=>'display:inline')) !!}
        <button type="submit" class="btn btn-default">Update</button>
    {!! Form::close() !!}

    {!! Form::open(array("route" => array("games.destroy", "id" => 1), "method" => "delete", 'style'=>'display:inline')) !!}
        <button type="submit" class="btn btn-default">Destroy</button>
    {!! Form::close() !!}

    <hr>
@stop
