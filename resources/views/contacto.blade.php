@extends('principal')
@section('contenido')
    <div class="panel panel-body">
        <div class="pelicula">
            <div class="text-center">
                <h1>Contacta con nosotros!</h1>
            </div>
            <div class="container container-fluid">
                <div class="panel-default">
                <form action="{{route('mail.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row form-group">
                        <div class="col-sm-2 center-block">
                            <h4>Nombre:</h4>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="input-sm" name="nombre">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-2">
                            <h4>Apellidos:</h4>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="input-sm" name="apellidos">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-2">
                            <h4>Correo:</h4>
                        </div>
                        <div class="col-sm-1">
                            <input type="email" class="input-sm" name="correo">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-2">
                            <h4>Contenido:</h4>
                        </div>
                    </div>
                    <div class="row form-group">
                        <textarea class="form-control" rows="10" id="comment" name="contenido"></textarea>
                    </div>
                    <div class="row form-group text-center">
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                </form>
                </div>
            </div>

        </div>
    </div>
@endsection