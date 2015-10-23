@extends('Fruits.layout')

@section('title', 'Fruits show')
@section('body')
<p>Fruits show</p> 
{!! Form::open(array('action' => 'Fruits@index', 'method'=>'GET')) !!}
{!! Form::submit('back')!!}
{!! Form::close()!!}
@endsection