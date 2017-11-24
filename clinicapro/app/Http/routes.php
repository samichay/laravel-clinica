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

Route::get('usuario', 'UsuarioControlador@index');
Route::get('usuario/id/{id}', 'UsuarioControlador@datos_usuario') ->where('id', '[1-9]+');

Route::get('/registropaciente',function(){
	return view('registrop');
});

Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('main');
});