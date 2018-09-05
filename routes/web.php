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
    return view('index');
});
Route::get('/aviso', function () {
    return view('aviso');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contactanos', function () {
    return view('contactanos');
});
Route::get('/desarrollo-sanpatricio', function () {
    return view('desarrollo-sanpatricio');
});
Route::get('/empresa', function () {
    return view('empresa');
});
Route::get('/modelo-adare', function () {
    return view('modelo-adare');
});
Route::get('/modelo-ennis', function () {
    return view('modelo-ennis');
});
Route::get('/porque', function () {
    return view('porque');
});
Route::get('/precalifica', function () {
    return view('precalifica');
});

// Templates (Borrar)
Route::get('/desarrollo-nuevo', function () {
    return view('desarrollo-nuevo');
});
Route::get('/modelo-nuevo', function () {
    return view('modelo-nuevo');
});

// Desarrollos
Route::get('/desarrollo/montecarlo', function () {
    return view('desarrollos/montecarlo');
});

// Modelos
Route::get('/modelo/fortezza', function () {
    return view('modelos/fortezza');
});