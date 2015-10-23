@extends('Fruits.layout')

@section('title', 'Fruits edit')
@section('body')
<p>Fruits edit</p> 
{!! Form::open(array('action' => 'Fruits@index', 'method'=>'GET')) !!}
{!! Form::submit('back')!!}
{!! Form::close()!!}
@endsection