@extends('plantilla')
@section('titulo')
    Disfrutar del Cine, cuida el mundo.
    @stop
@section('texto')
    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="Media/Slider/Imagen1.jpg" alt="...">
            </div>
            <div class="item">
                <img src="Media/Slider/Imagen2.jpg" alt="...">
            </div>
            <div class="item">
                <img src="Media/Slider/Imagen4.jpg" alt="...">
            </div>
        </div>
        <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <div class="panel panel-body">
        <div class="panel panel-item">
            <p class="text-justify">Somos Ecocinema,una empresa que busca acercar el séptimo arte a las 	localidades que bien no pueden acceder al cine convencional por motivos 	económicos o geográficos , promovemos el medio ambiente ya que la misma 	proyección de la película se realiza con la energía recogida de nuestra 	furgoneta ecológica. Nos desplazamos a las localidades para proyectar las 	películas , disponemos de snacks y bebidas para amenizar la misma.</p>
        </div>
    </div>

@stop