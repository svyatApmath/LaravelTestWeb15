@extends('layouts.master')

@section('title', 'Create')

@section('content')
    
    <p>  Russia =J=  - Create countries!</p>
    {!!Form::open(['route' => 'index','method'=>'GET'])!!}
    {!!Form::submit('Back')!!}
    {!!Form::close()!!}
    
    
@stop