@extends('principal')
@section('contenido')
    @foreach($peliculas as $pelicula)
    <div class="panel panel-body">
        <div class="panel panel-default pelicula">
            <div class="portada">
                <img src='{{$pelicula->img}}' alt="Rogue One" class="img-thumbnail">
            </div>
            <div class="panel panel-warning sinopsis">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$pelicula->titulo}}</h3>
                    <h7>{{$pelicula->anio}}</h7>
                </div>
                <div class="panel-content sinopsis-texto">
                    <p class="text-justify">{{$pelicula->contenido}}</p>

                    <button type="button" class="btn btn-primary btn-warning boton-trailer" data-toggle="modal" data-target="#myModal">
                        Trailer
                    </button>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Rogue One</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/frdj1zb9sMY" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container container-fluid">
        <div class="text-center">
            {!! $peliculas->render() !!}
        </div>
    </div>
@stop
