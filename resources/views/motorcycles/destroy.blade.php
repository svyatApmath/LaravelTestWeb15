@extends('motorcycles.layouts')
@section('title','Destroy')
@section('content')

<h1>DESTROY</h1>
{!! Form::open(['route' => 'motorcycles.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-danger']) !!}
{!!Form::close()!!}
@endsection