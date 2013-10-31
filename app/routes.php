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

#login y usuario
Route::group(array('before' => 'auth'), function()
{
   Route::resource('users', 'UsersController');
   Route::resource('admin', 'AdminController');
   Route::get('/admin/delete/{id}', 'AdminController@destroy');
   Route::get('/otras/delete/{id}', 'OtrasController@destroy');
});

Route::resource('otras', 'OtrasController');
Route::resource('sections', 'SectionsController');
Route::resource('contributors', 'ContributorsController');
Route::resource('users','UsersController');



Route::get(  '/logout', array( 'uses' => 'AdminController@logout', 'as' => 'operations.logout', 'before' => 'auth' ) );
Route::post('/login', array('uses'=>'AdminController@login', 'as' => 'oparations.login','before'=>'csrf'));
Route::get('/login', 'AdminController@formlogin');
#Muestra la página de inicio (la ultima revista en la base de datos y genera los enlaces de las demas
#	Secciones)
Route::get('/', 'MagazinesController@index');
#Enlace a la revista una vez sea seleccionada (Permite navegar por cada revista)
Route::get('/{id}', 'MagazinesController@Seleccionado');
#Enlace para descargar el pdf de la revista
Route::get('/descargar-revista/{id}', array('uses' => 'MagazinesController@download', 'as' => 'descargar.revista') );
#Muestra las secciones de la revista que se esté viendo
Route::get('/secciones/{id}', 'MagazinesController@sections');
#Permite ver los PDF de las seccion disponible
Route::get('/secciones/{sec}/{m_id}/{s_id}', array('uses' => 'MagazinesController@Pdf', 'as' => 'sections.pdf') );
#Muestra los colaboradores asociados a la revista y su información
Route::get('/colaboradores/{id}', 'MagazinesController@colaboradores');
#Muestra la lista de revistas en base de datos
Route::get('/revista/{id}', 'MagazinesController@Revista');
#Muestra los enlaces a descarga de las otras publicaciones en PDF
Route::get('/otras-publicaciones/{id}', 'MagazinesController@OtrasPublicaciones');
#Enlaces asociados
Route::get('/enlaces/{id}', 'MagazinesController@Enlaces');



