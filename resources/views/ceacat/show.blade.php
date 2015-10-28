@extends('layouts.master')
@section('title','Some page')
@section ('content')
<h1>{!! $object->id !!}</h1>

{!! Form::open(['route' => 'ceacat.index','method' => 'get'])!!}
{!!Form::submit('Back to Index', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}
@stop