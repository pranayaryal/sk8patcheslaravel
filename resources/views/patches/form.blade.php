@extends('layouts.app')

@section('content')
    {!! Form::label('name', 'Name:')!!}

    {!! Form::text('name')!!}

    {!! Form::label('description', 'Description:')!!}

    {!! Form::textarea('description')!!}

    {!! Form::label('price', 'price:')!!}

    {!! Form::textarea('price')!!}



    {!! Form::submit($submitButtonText, ['class' => 'button'])!!}

@stop