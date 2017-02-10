<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::group(['middleware' => ['web']], function(){
	Route::resource('registros', 'RegistroController');
});*/

Auth::routes();

Route::group(['middleware' => ['web']], function(){
	Route::resource('home', 'HomeController');

});


Route::resource('home1', 'Home1Controller');

Route::resource('contacto', 'DirectorioController@addcontacto');


Route::resource('cultura', 'CulturaController');

Route::resource('deporte', 'DeporteController');


Route::resource('salud', 'SaludController');


Route::resource('aintegral', 'AintegralController');


Route::resource('gestion', 'GestionController');

//Route::get('/home', 'HomeController@index');


