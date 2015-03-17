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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('historias', 'HistoriaController@index');
Route::get('historias/{history}', 'HistoriaController@show');


Route::get('citas', 'CitaController@index');
Route::get('citas/{cita}', 'CitaController@show');

Route::get('cuestionarios', 'CuestionarioController@index');
Route::get('cuestionarios/{id}', 'CuestionarioController@show');
Route::post('cuestionarios', 'CuestionarioController@store');