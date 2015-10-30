@extends("games.template")

@section("content")

    <h1>WIKI: games</h1>

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

    <div class = 'container'>
            <table class='table table-bordered table-striped'>
                <tbody>

                    <tr>
                        <td>
                            <h4><b> Title </b></h4>
                        </td>
                        <td>
                            <h4><b> Description </b></h4>
                        </td>
                    </tr>

                     @foreach ($games as $game)
                        <tr>
                            <td>
                               <!-- {{$game->title}} -->

                                {!! HTML::linkAction('GamesController@show', 
                                    $game->title, ['id' => $game->id] )
                                !!}
                                
                            </td>
                            <td>{{$game->description}}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>   
        </div>
@stop
