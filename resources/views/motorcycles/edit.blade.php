
@extends('motorcycles.layouts')
@section('title','Edit')
@section('content')

<h1>EDIT</h1>
{!! Form::open(['route' => 'motorcycles.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}
@endsection