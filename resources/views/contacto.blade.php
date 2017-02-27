@extends('principal')
@section('contenido')
    <div class="panel panel-body">
        <form action="#" method="get">
            <label>Nombre</label>
            <input type="text" class="input-lg" name="nombre">
            <label>Apellidos</label>
            <input type="text" class="input-lg" name="apellidos">
            <label>Correo</label>
            <input type="email" class="input-lg" name="correo">
            <label></label>
            <label>Contenido</label>
            <input type="text" class="input-lg" name="contenido">
        </form>
    </div>
@endsection