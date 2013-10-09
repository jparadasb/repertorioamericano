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
/*login y usuario*/
Route::group(array('before' => 'auth'), function()
{
   Route::resource('users', 'UsersController');
   Route::resource('admin', 'AdminController');
   Route::get('/admin/delete/{id}', 'AdminController@destroy');

});
  Route::get(  '/logout', array( 'uses' => 'OperationsController@logout', 'as' => 'operations.logout', 'before' => 'auth' ) );
Route::post('/login', array('uses'=>'OperationsController@login', 'as' => 'oparations.login','before'=>'csrf'));
Route::get('/login', 'OperationsController@index');
Route::get('/', 'HomeController@Index');
Route::get('/{id}', 'HomeController@Seleccionado');
Route::get('/descargar-revista/{id}', array('uses' => 'EsteController@', 'as' => 'descargar.revista') );
Route::get('/secciones/{id}', 'SeccionesController@Index');
Route::get('/colaboradores/{id}', 'ColaboradoresController@Index');
Route::get('/revista/{id}', 'MagazinesController@Revista');
Route::get('/otras-publicaciones/{id}', 'MagazinesController@OtrasPublicaciones');
Route::get('/enlaces/{id}', 'MagazinesController@Enlaces');
Route::get('/secciones/{sec}/{m_id}/{s_id}', array('uses' => 'SeccionesViewsController@Pdf', 'as' => 'sections.pdf') );


/*Route::get('/', function()
{
	return "Esto es una prueba";
	//return View::make('hello');
});*/


