@extends('ceacat.template')
@section('title','Index')
@section('content')
<h1>Alloha!</h1>
<p>Choose somebody or add <mark>new</mark></p>
{!! Form::open(['route' => 'ceacat.create','method' => 'get'])!!}
{!!Form::submit('Create', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!} 
</br>
<table class='table'>
    <tr >
        <th> # </th>
        <th> Identity </th>
        <th> Firstname </th>
        <th> Lastname </th>
        <th> Sex </th>
        <th> Edit </th>
        <th> Delete </th>
    </tr>
    @foreach($whales as $whale)
    <tr >
        <td>{!! $whale['id'] !!} </td>
        <td> {!! $whale['identity'] !!} </td>
        <td> {!! $whale['firstName'] !!} </td>
        <td> {!! $whale['lastName'] !!} </td>
        <td> {!! $whale['sex'] !!} </td>
        <td> {!! link_to_route('ceacat.edit','Edit',[$whale['id']])!!}</td>
        <td> {!! link_to_action('Ceacat@destroy','Delete',[$whale['id']])!!}</td>
    </tr>
    @endforeach
</table>
@stop