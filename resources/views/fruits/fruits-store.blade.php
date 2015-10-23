@extends('Fruits.layout')

@section('title', 'Fruits store')
@section('body')
<p>Fruits store</p>
{!! Form::open(array('action' => 'Fruits@index', 'method'=>'GET')) !!}
{!! Form::submit('back')!!}
{!! Form::close()!!}
@endsection