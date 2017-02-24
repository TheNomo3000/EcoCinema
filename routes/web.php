<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('inicio', function (){
    return view('inicio');
});

Route::get('ofertas', 'PeliculasController@index');

Route::get('surgimos',function (){
    return view('Info/ComoSurgimos');
});

Route::get('vision',function (){
    return view('Info/NuestraVision');
});
Route::get('nosotros',function (){
    return view('Info/SobreNosotros');
});


