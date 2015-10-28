@extends('ceacat.template')

@section('title','Some page')

@section ('content')

    <h1>Ceacat show</h1>

    <p> {!! $object['id'] !!}</p>

    <p> {!! $object['identity'] !!}</p>

    <p> {!! $object['firstname'] !!}</p>

    <p> {!! $object['lastname'] !!}</>

    <p> {!! $object['sex'] !!}</p>

    {!! HTML::link('Ceacat','Back to Ceacat', ['class'=>'btn btn-primary']) !!}

@stop