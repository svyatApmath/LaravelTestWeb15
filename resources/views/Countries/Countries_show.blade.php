@extends('layouts.master')

@section('title', 'Show')

@section('content')
    
    <p>  America - Show countries!</p>
    {!!Form::open(['route' => 'index','method'=>'GET'])!!}
    {!!Form::submit('Back')!!}
    {!!Form::close()!!}
@stop