@extends('layout')

@section('content')

    <div class="">
        <h1>Futuras Capacitaciones</h1>
        <br>
        <div class="col-sm-10">
            <table class="table table-striped table-hover">
                <th>Capacitación</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Término</th>
                <th>Duración</th>
                <th>Ubicación</th>
                <th>Info</th>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ substr($course->start_date, 0, 10)}}</td>
                        <td>{{ substr($course->end_date, 0, 10)}}</td>
                        <td>{{ $course->hours}} Horas</td>
                        <td>{{ $course->location}}</td>
                        <td><a href="{{ url('courses', $course->id) }}">Más Info.</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@stop