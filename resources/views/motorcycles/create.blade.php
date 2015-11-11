@extends('motorcycles.layouts')
@section('title','Create')
@section('content')

<h1>CREATE</h1>
{!! Form::open(['route' => 'motorcycles.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-default ']) !!}
{!!Form::close()!!}
@endsection
