@extends('layout')

@section('content')
    <h1>Crear Capacitación</h1>

    <hr>

    {!! Form::open(array('url' => '/courses', 'class' => 'form-horizontal')) !!}
        @include('pages._form', ['submitButtonText' => 'Add Course'])
    {!! Form::close() !!}

    @include('errors.list')
@stop