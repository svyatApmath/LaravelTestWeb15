
@extends('motorcycles.layouts')
@section('title','Update')
@section('content')

<h1>UPDATE</h1>
{!! Form::open(['route' => 'motorcycles.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-warning']) !!}
{!!Form::close()!!}
@endsection