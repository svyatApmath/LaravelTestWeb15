@extends('ceacat.template')
@section('title','Edit')
@section('content')
<h1>Edit</h1>
    {!! Form::model($whale, ['route' => 'ceacat.update',$whale['id']])!!}

        <div>
            {!!Form::label('Identity')!!}
            {!!Form::text('id',null,['class' => 'form-control'])!!}
        </div>
        <div>
            {!!Form::label('Firstname')!!}
            {!!Form::text('firstName',null,['class' => 'form-control'])!!}
        </div>
        <div>
            {!!Form::label('Lastname')!!}
            {!!Form::text('lastName',null,['class' => 'form-control'])!!}
        </div>
        <div>
            {!!Form::label('Sex')!!}
            {!!Form::select('sex',['Male' => 'male','Female' => 'female'],null,['class' => 'form-control'])!!}
        </div>
        </br>
    {!!Form::submit('Update', ['class' => 'btn btn-primary']) !!}    
    {!!Form::close()!!}
@stop