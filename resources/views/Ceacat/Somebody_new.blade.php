@extends('layouts.master')
@section('title','Create')
@section('content')
<h1> Add something <strong>cool</strong></h1>
{!! Form::open(['route' => 'ceacat.index','method' => 'get'])!!}
{!!Form::submit('Back to Index', ['class' => 'btn btn-primary ']) !!}
{!!Form::close()!!}
@stop