@extends('cars.layout')

@section('title', 'Cars index')

@section('content')
<h1>Car index page</h1>
<a href="/cars/create"><button type="button" class="btn btn-success">Create</button></a>
{!! Form::open(array('url' => '/cars', 'method' => 'post', 'style' => 'display:inline-block')) !!}
{!! Form::submit('Store', ['class' => 'btn btn-default']) !!}
{!! Form::close() !!}
<a href="/cars/bugatti"><button type="button" class="btn btn-primary">Show</button></a>
<a href="/cars/bugatti/edit"><button type="button" class="btn btn-danger">Edit</button></a>
{!! Form::open(array('url' => '/cars/bugatti', 'method' => 'put', 'style' => 'display:inline-block')) !!}
{!! Form::submit('Update', ['class' => 'btn btn-warning']) !!}
{!! Form::close() !!}
{!! Form::open(array('url' => '/cars/bugatti', 'method' => 'delete', 'style' => 'display:inline-block')) !!}
{!! Form::submit('Destroy', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
@endsection