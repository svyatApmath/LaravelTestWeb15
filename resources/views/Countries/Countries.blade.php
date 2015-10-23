@extends('layouts.master')

@section('title', 'Main')

@section('content')
    
    <p>  All what you can do with countries!</p>
    {!!Form::open(['route' => 'create','method' => 'GET'])!!}
    {!!Form::submit('Create')!!}
    {!!Form::close()!!}
    
    {!!Form::open(['route' => 'store','method'=>'POST'])!!}
    {!!Form::submit('Store')!!}
    {!!Form::close()!!}
    
    {!!Form::open(['route' => 'show','method'=>'GET'])!!}
    {!!Form::submit('Show')!!}
    {!!Form::close()!!}
    
    {!!Form::open(['route' => 'edit','method'=>'GET'])!!}
    {!!Form::submit('Edit')!!}
    {!!Form::close()!!}
    
    {!!Form::open(['route' => 'update','method'=>'POST'])!!}
    {!!Form::submit('Update')!!}
    {!!Form::close()!!}
    
    {!!Form::open(['route' => 'destroy','method'=>'DELETE'])!!}
    {!!Form::submit('Destroy')!!}
    {!!Form::close()!!}
    
    
@stop

