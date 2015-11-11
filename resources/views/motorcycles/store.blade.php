@extends('motorcycles.layouts')
@section('title','Store')
@section('content')

<h1>STORE</h1>
{!! Form::open(['route' => 'motorcycles.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-success']) !!}
{!!Form::close()!!}
@endsection
