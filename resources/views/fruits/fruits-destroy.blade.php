@extends('Fruits.layout')

@section('title', 'Fruits destroy')
@section('body')
<p>Fruits destroy:(</p> 
{!! Form::open(array('action' => 'Fruits@index', 'method'=>'GET')) !!}
{!! Form::submit('back')!!}
{!! Form::close()!!}
@endsection
    