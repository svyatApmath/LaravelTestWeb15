@extends('fruits.layout')

@section('title', 'Fruits update')

@section('body')
<h2>Fruits update</h2>
{!! link_to_action('Fruits@index', 'back', [], ['class' => 'btn btn-default']) !!}
@endsection
    
