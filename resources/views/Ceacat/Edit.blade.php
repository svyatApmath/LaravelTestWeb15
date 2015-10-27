@extends('layouts.master')
@section('title','Edit')
@section('content')
<h1>Edit</h1>
{!! Form::open(['route' => 'ceacat.index','method' => 'get'])!!}
{!!Form::submit('Back to Index', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}
@stop