@extends('layouts.master')

@section('title', 'Edit')

@section('content')
    
    <p>  Great Britain - Edit countries!</p>
        {!!Form::open(['route' => 'index','method'=>'GET'])!!}
    {!!Form::submit('Back')!!}
    {!!Form::close()!!}
@stop