@extends('fruits.layout')

@section('title', 'Fruits destroy')

@section('body')
<h1>Fruits destroy:(</h1>
{!! link_to_action('Fruits@index', 'back', [], ['class' => 'btn btn-default']) !!}
@endsection
    
