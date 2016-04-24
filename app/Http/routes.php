<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('questionario');
});

Route::get('/denuncia', function () {
    return view('denuncia');
});


Route::post('/denuncia/enviar', 'DenunciaControler@postEnviar');


Route::post('/enviar', 'FormularioControler@postEnviar');



Route::get('/admin', 'FormularioControler@getIndex');

Route::get('/admin/mensagens', function () {
    return view('tabelaDenuncias');
});