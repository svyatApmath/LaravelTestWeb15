@extends('Fruits.layout')

@section('title', 'Fruits create!')
@section('body')
<p>Fruits create</p> 
{!! Form::open(array('action' => 'Fruits@index', 'method'=>'GET')) !!}
{!! Form::submit('back')!!}
{!! Form::close()!!}
@endsection
    