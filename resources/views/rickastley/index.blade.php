@extends('rickastley.template')

@section('title','When it was your last when you watch Rick Astley?')

@section('content')
    {!! link_to_action('RickastleyController@create','Create', [], ['class' => 'btn btn-default']) !!}

    {!! Form::open(['action' => 'RickastleyController@store', 'method' => 'post', 'style' => 'display:inline-block']) !!}
    {!! Form::button('Store', ['class' => 'btn btn-default']    ) !!}
    {!! Form::close() !!}

    {!! link_to_action('RickastleyController@show', 'Show', ['id' => '0'], ['class' => 'btn btn-default']) !!}

    {!! link_to_action('RickastleyController@edit', 'Edit', ['id' => '0'], ['class' => 'btn btn-default']) !!}

    {!! Form::open(['action' => 'RickastleyController@update', 'method' => 'put', 'style' => 'display:inline-block']) !!}
    {!! Form::button('Update', ['class' => 'btn btn-default']    ) !!}
    {!! Form::close() !!}

    {!! Form::open(['action' => 'RickastleyController@delete', 'method' => 'delete', 'style' => 'display:inline-block']) !!}
    {!! Form::button('Delete', ['class' => 'btn btn-default']    ) !!}
    {!! Form::close() !!}
@endsection