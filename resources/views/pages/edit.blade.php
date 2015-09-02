@extends('layout')

@section('content')
    <h1>Edit: {!! $course->name !!}</h1>

    <hr>

    {!! Form::model($course, ['method' => 'PATCH', 'action' => ['CoursesController@update', $course->id], 'class' => 'form-horizontal']) !!}
        @include('pages._form', ['submitButtonText' => 'Update Course'])
    {!! Form::close() !!}

    @include('errors.list')
@stop