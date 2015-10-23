@extends('layouts.master')
@section('title','Destroy')
@section('content')
<h1>Destroy</h1>
<p> <mark>Let's destroy all trash</mark> </p>
{!! Form::open(['route' => 'ceacat.index','method' => 'get'])!!}
{!!Form::submit('Back to Index', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}
@stop