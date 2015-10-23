@extends('layouts.master')
@section('title','Store')
@section('content')
<h1> Store</h1>
{!! Form::open(['route' => 'ceacat.index','method' => 'get'])!!}
{!!Form::submit('Back to Index', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}
@stop
