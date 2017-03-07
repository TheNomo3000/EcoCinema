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
})->name('home');

Route::resource('ofertas','PeliculasController',[
  'names'=> [
      'index' => 'ofertas',
  ]
]);

Route::resource('mail','MailController');

Route::get('contacto',function (){
    return view('contacto');
})->name('contacto');

Route::get('surgimos',function (){
    return view('Info/ComoSurgimos');
})->name('surgimos');

Route::get('vision',function (){
    return view('Info/NuestraVision');
})->name('vision');
Route::get('nosotros',function (){
    return view('Info/SobreNosotros');
})->name('nosotros');


