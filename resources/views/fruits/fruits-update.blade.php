@extends('fruits.layout')

@section('title', 'Fruits update')
@section('body')
<p>Fruits update</p> 
{!! Form::open(array('action' => 'Fruits@index', 'method'=>'GET')) !!}
{!! Form::submit('back')!!}
{!! Form::close()!!}
@endsection
    