@extends('layouts.master')
@section('title','Update')
@section('content')
<h1>Update</h1>
{!! Form::open(['route' => 'ceacat.index','method' => 'get'])!!}
{!!Form::submit('Back to Index', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}
@stop