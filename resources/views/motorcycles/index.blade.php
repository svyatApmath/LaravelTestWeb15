@extends('motorcycles.layouts')
@section('title','Index')
@section('content')

{!! Form::open(['route' => 'mototcycles.create','method' => 'get','style'=>'display:inline'])!!}
{!!Form::submit('Create', ['class' => 'btn btn-default']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => 'motorcycles.store','method' => 'post','style'=>'display:inline'])!!}
{!!Form::submit('Store', ['class' => 'btn btn-success']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => ['motorcycles.show','id' => 1],'method' => 'get','style'=>'display:inline'])!!}
{!!Form::submit('Show', ['class' => 'btn btn-info']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => ['motorcycles.edit', 'id' => 1], 'method' => 'get','style'=>'display:inline'])!!}
{!!Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => ['motorcycles.update', 'id' => 1], 'method' => 'put','style'=>'display:inline'])!!}
{!!Form::submit('Update', ['class' => 'btn btn-warning']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => ['motorcycles.destroy', 'id' => 1], 'method' => 'delete','style'=>'display:inline'])!!}
{!!Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!!Form::close()!!}

@endsection