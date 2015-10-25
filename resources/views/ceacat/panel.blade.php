@extends('layouts.master')
@section('title','Index')
@section('content')
<h1>Alloha!</h1>
<p>Choose something</p>
{!! Form::open(['route' => 'ceacat.create','method' => 'get'])!!}
{!!Form::submit('Create', ['class' => 'btn btn-default']) !!}
{!!Form::close()!!}
{!! Form::open(['route' => 'ceacat.store','method' => 'post'])!!}
{!!Form::submit('Store', ['class' => 'btn btn-success']) !!}
{!!Form::close()!!}
{!! Form::open(['route' => ['ceacat.show','id' => 1],'method' => 'get'])!!}
{!!Form::submit('Show', ['class' => 'btn btn-info']) !!}
{!!Form::close()!!}
{!! Form::open(['route' => ['ceacat.edit', 'id' => 1], 'method' => 'get'])!!}
{!!Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}
{!! Form::open(['route' => ['ceacat.update', 'id' => 1], 'method' => 'put'])!!}
{!!Form::submit('Update', ['class' => 'btn btn-warning']) !!}
{!!Form::close()!!}
{!! Form::open(['route' => ['ceacat.destroy', 'id' => 1], 'method' => 'delete'])!!}
{!!Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!!Form::close()!!}
@stop