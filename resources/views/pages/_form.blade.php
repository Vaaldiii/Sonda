<!-- Temp -->
{!! Form::hidden('user_id', 1) !!}

<div class="form-group">
    {!! Form::label('name', 'Capacitación:', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripción:', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('hours', 'Horas de Duración:', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('number', 'hours', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('location', 'Ubicación:', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('location', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('cost', 'Costo Unitario:', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('number', 'cost', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('schedule', 'Horario:', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('schedule', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('start_date', 'Fecha de Inicio:', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('date', 'start_date', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('end_date', 'Fecha de Termino:', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('date', 'end_date', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>

