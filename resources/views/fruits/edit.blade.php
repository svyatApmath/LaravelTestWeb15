@extends('fruits.layout')

@section('title', 'Fruits edit')

@section('body')
<h1>Fruits edit.</h1>
{!! link_to_action('Fruits@index', 'back', [], ['class' => 'btn btn-default']) !!}
@endsection
