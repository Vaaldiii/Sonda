<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capacitaciones</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    <style>
        .course-info, .course-participants{
            margin-left: 5px;
        }
        .course-info dd{
            margin-left: 10px;
        }
    </style>
    @yield('styles')
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/courses">Capacitaciones</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            @if(Auth::user())
                <a href="{{ url('courses/create') }}" class="btn navbar-btn btn-success">Crear Capacitación</a>
                <a href="{{ url('auth/logout') }}" class="btn navbar-btn btn-danger">Cerrar Sesión</a>
            @else
                <a href="{{ url('auth/login') }}" class="btn navbar-btn btn-primary">Iniciar Sesión</a>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>













<div class="container">
    @yield('content')
</div>

@yield('resources')

{!! Html::script('js/jquery-1.11.3.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}

@yield('scripts')

</body>
</html>