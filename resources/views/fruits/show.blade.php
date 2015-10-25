@extends('fruits.layout')

@section('title', 'Fruits show')

@section('body')
<h2>Fruits show~</h2>
{!! link_to_action('Fruits@index', 'back', [], array('class' => 'btn btn-default')) !!}
@endsection