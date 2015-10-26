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
    
    {!!Form::open(['route' => array('show','id'=>1),'method'=>'GET'])!!}
    {!!Form::submit('Show')!!}
    {!!Form::close()!!}
    
    {!!Form::open(['route' => array('edit','id'=>1),'method'=>'GET'])!!}
    {!!Form::submit('Edit')!!}
    {!!Form::close()!!}
    
    {!!Form::open(['route' => array('update','id'=>1),'method'=>'POST'])!!}
    {!!Form::submit('Update')!!}
    {!!Form::close()!!}
    
    {!!Form::open(['route' => array('destroy','id'=>1),'method'=>'DELETE'])!!}
    {!!Form::submit('Destroy')!!}
    {!!Form::close()!!}
    
    
@stop

