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
    return view('welcome');
});

Route::get('/Holamundo',function(){
    return view('holamundo');
});
/*
Route::post('/Holamundo',function(){
    return 'Hola Mundo mi nombre es Johann Web Por POST';
});

Route::match(['get','post'],'Holamundo',function(){
    return 'Hola Mundo mi nombre es Johann';
});

Route::any('Holamundo',function(){
    return 'Hola Mundo mi nombre es Johann';
});
*/
Route::get('contacto/{nombre?}/{edad?}', function ($nombre = null, $edad = null) {

    /*
    return view('contacto',array(
        "nombre" => $nombre,
        "edad" => $edad
    ));*/

    return view('contacto.contacto')
        ->with('nombre', $nombre)
        ->with('edad', $edad)
        ->with('frutas',array('naranja','manzanas','fresa','melon','mora'));
})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
    ]);