<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$magazines = Magazine::all();
		
		$cont=count($magazines);
		

//@param int $cont el numero de revistas registradas en la base de datos.
		$magazines = Magazine::find($cont);
		if($magazines)
		{

			$editoriales= Editoriale::all();
			foreach($editoriales as $editorial)
			{
				if(($editorial->magazine_id)==($magazines->id))
				{
				break;
				}
			}
			return View::make('magazines.index') -> with('magazines', $magazines) -> with('editorial',$editorial);
		}
		else
		{
		return 'No hay registros';//Esto deberia devolver una vista con un error 404
		}
		
	}
//@param int $id recibe la id que sera verificado en la base de datos para cambiar el contenido del sitio
	public function seleccionado($id)
	{
		$magazines = Magazine::find($id);
		$editoriales= Editoriale::all();

		if($magazines)
		{
		foreach($editoriales as $editorial)
		{
			if(($editorial->magazine_id)==($magazines->id))
			{
			break;
			}
		}

		
			return View::make('magazines.index')-> with('magazines',$magazines)-> with('editorial',$editorial);
		}
		else
		{
			return 'No hay registros';//Esto deberia devolver un error 404
		}
	}

}
