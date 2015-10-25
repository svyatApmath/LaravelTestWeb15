@extends('fruits.layout')

@section('title', 'Fruits')
@section('body')
<p> Fruits </p> 
{!! Form::open(array('action' => 'Fruits@create', 'method'=>'GET')) !!}
{!! Form::submit('create')!!}
{!! Form::close()!!}
{!! Form::open(array('action' => 'Fruits@store', 'method'=>'POST')) !!}
{!! Form::submit('store')!!}
{!! Form::close()!!}
{!! Form::open(array('action' => 'Fruits@show', 'method'=>'GET')) !!}
{!! Form::submit('show')!!}
{!! Form::close()!!}
{!! Form::open(array('action' => 'Fruits@edit', 'method'=>'GET')) !!}
{!! Form::submit('edit')!!}
{!! Form::close()!!}
{!! Form::open(array('action' => 'Fruits@update', 'method'=>'PUT')) !!}
{!! Form::submit('update')!!}
{!! Form::close()!!}
{!! Form::open(array('action' => 'Fruits@destroy', 'method'=>'DELETE')) !!}
{!! Form::submit('destroy')!!}
{!! Form::close()!!}
@endsection