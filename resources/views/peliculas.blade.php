@extends('principal')
@section('contenido')
    <div class="panel panel-body">
        <div class="nav">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                </div>
                <button type="submit" class="btn btn-success">Buscar</button>
            </form>
        </div>
        @foreach($peliculas as $pelicula)
            <div class="panel panel-default pelicula">
                <div class="col-md-2">
                    <img src='{{$pelicula->img}}' alt="{{$pelicula->titulo}}" class="img-thumbnail">
                </div>
                <div id="sinopsis" class="panel panel-warning col-md-10">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$pelicula->titulo}}</h3>
                        <h7>({{$pelicula->anio}})</h7>
                    </div>
                    <div class="panel-content sinopsis-texto">
                        <p class="text-justify">{{$pelicula->contenido}}</p>
                        <div class="btn-trailer">
                            <button type="buton" class="btn btn-primary btn-warning" data-toggle="modal" data-target="#{{$pelicula->id}}">
                                Trailer
                            </button>
                        </div>

                        <div class="modal fade" id="{{$pelicula->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="{{$pelicula->id}}">{{$pelicula->titulo}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src={{ $pelicula->trailer }} frameborder="0" allowfullscreen></iframe>
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
        @endforeach
        <div class="container container-fluid text-center ">
                {!! $peliculas->render() !!}
        </div>
    </div>
@endsection
