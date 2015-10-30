@extends('layouts.master')

@section('title', 'Show')

@section('content')
    
<h1>{!! $country['id'] !!}</h1>
<h1>{!! $country['identity'] !!}</h1>
<h1>{!! $country['name'] !!}</h1>
<h1>{!! $country['nameanime'] !!}</h1>
<h1>{!! $country['language'] !!}</h1>
<h1>{!! $country['area'] !!}</h1>
{!! link_to_route('index','Back')!!}
@stop
