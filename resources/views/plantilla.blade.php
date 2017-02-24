@extends('principal')
@section('contenido')
    <div class="panel panel-body">
        <div class="panel panel-default plantilla">
            <h1 class="titulo">@yield('titulo')</h1>
            @yield('texto')
        </div>
    </div>
@stop
