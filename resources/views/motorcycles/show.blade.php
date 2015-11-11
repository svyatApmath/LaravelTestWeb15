
@extends('motorcycles.layouts')
@section('title','Show')
@section ('content')

<h1>SHOW</h1>
{!! Form::open(['route' => 'motorcycles.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-info']) !!}
{!!Form::close()!!}
@endsection
