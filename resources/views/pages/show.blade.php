@extends('layout')

@section('styles')

@stop

@section('content')

    <h1>{{ $course->name }}
        @if(Auth::user() && Auth::user()->id == $course->user_id)
            <a href="{{ $course->id }}/edit" class="btn btn-success">Editar</a>
        @endif
    </h1>
    <h3>{{ $course->description }}</h3>
    <div class="row">
        <div class="col-sm-4">
            <hr>
            <h3>Información</h3>
            <dl class="course-info">
                <dt>Fecha de inicio</dt>
                <dd>{{ substr($course->start_date, 0, 10)}}</dd>
                <dt>Fecha de término</dt>
                <dd>{{ substr($course->end_date, 0, 10)}}</dd>
                <dt>Duración</dt>
                <dd>{{ $course->hours }} horas</dd>
                <dt>Horarios</dt>
                <dd>{{ $course->schedule }}</dd>
                <dt>Ubicación</dt>
                <dd>{{ $course->location }}</dd>
            </dl>
            <hr>
        </div>
        <div class="col-sm-8">
            <hr>
            <h3>Participantes
                @if (Carbon\Carbon::now() >= $course->start_date)
                    <button class="btn btn-primary" data-toggle="modal" data-target="#asistModal">Asistir</button>
                @endif
            </h3>
            <ol class="course-participants">
                <li>Participante 1</li>
                <li>Participante 2</li>
                <li>Participante 3</li>
                <li>Participante 4</li>
                <li>Participante 5</li>
                <li>Participante 6</li>
            </ol>

            <hr>
        </div>
    </div>


@stop

@section('resources')
    <div class="modal fade" id="asistModal" tabindex="-1" role="dialog"">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Asistir a Capacitación</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-4 control-label">Contraseña</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputToken" class="col-sm-4 control-label">Clave Capacitacion</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputToken">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary btn-block">Asistir</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop