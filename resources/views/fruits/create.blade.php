@extends('fruits.layout')

@section('title', 'Fruits create')

@section('body')
<h1>Fruits create!</h1>
{!! link_to_action('Fruits@index', 'back', [], ['class' => 'btn btn-default']) !!}
@endsection
    
