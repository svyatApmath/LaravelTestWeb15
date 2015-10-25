@extends('fruits.layout')

@section('title', 'Fruits')

@section('body')
<h1> Fruits </h1>

{!! link_to_action('Fruits@create', 'create', [], ['class' => 'btn btn-default', 'style'=>'display:inline']) !!}

{!! Form::open(['action' => 'Fruits@store', 'method' => 'POST', 'style'=>'display:inline']) !!}
{!! Form::submit('store', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

{!! link_to_action('Fruits@show', 'show', ['fruit' => 'kiwi'], ['class' => 'btn btn-success', 'style'=>'display:inline']) !!}

{!! link_to_action('Fruits@edit', 'edit', ['fruit' => 'kiwi'], ['class' => 'btn btn-info', 'style'=>'display:inline']) !!}

{!! Form::open(['action' => ['Fruits@update', 'fruit' => 'kiwi'], 'method'=>'PUT', 'style'=>'display:inline']) !!}
{!! Form::submit('update', ['class' => 'btn btn-warning']) !!}
{!! Form::close() !!}

{!! Form::open(['action' => ['Fruits@destroy', 'fruit' => 'kiwi'], 'method'=>'DELETE', 'style'=>'display:inline']) !!}
{!! Form::submit('destroy', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@endsection