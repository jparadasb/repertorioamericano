<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@Index');
Route::get('/{id?}', 'HomeController@Seleccionado');
Route::get('/secciones/{id?}', 'SeccionesController@Index');
Route::get('/colaboradores/{id?}', 'ColaboradoresController@Index');
Route::get('/revista/{id?}', 'MagazinesController@Revista');
Route::get('/otras-publicaciones/{id?}', 'MagazinesController@OtrasPublicaciones');
Route::get('/enlaces/{id?}', 'MagazinesController@Enlaces');
Route::get('/pdf/view/{sec?}/{id?}', 'SeccionesViewsController@Pdf');
Event::listen(404, function()
{
	return View::make('404');
});
/*Route::get('/', function()
{
	return "Esto es una prueba";
	//return View::make('hello');
});*/
