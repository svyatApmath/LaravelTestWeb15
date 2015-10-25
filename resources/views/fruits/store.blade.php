@extends('fruits.layout')

@section('title', 'Fruits store')

@section('body')
<h2>Fruits store+</h2>
{!! link_to_action('Fruits@index', 'back', [], array('class' => 'btn btn-default')) !!}
@endsection