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
		$magazines = Magazine::orderBy('public_date','DESC')->first();
		
		if( $magazines !== null )
		{
			$urlVideo=Video::orderBy('created_at','DESC')->first();
			if($urlVideo !== null)
			{
				$url=(string)$urlVideo->url;
				$url=str_replace('watch?v=','embed/',$url);
				$urlTag='<iframe width="100%" height="330" src="'.$url.'" frameborder="0" allowfullscreen=""></iframe>';
			}
			else
			{
				$urlTag='<div with="100%" height="330"></div>';
			}

			return View::make('magazines.index', array('magazines'=>$magazines, 'urlVideo'=>$urlTag));
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

		if($magazines)
		{
			$urlVideo=Video::orderBy('created_at','DESC')->first();
			if($urlVideo !== null)
			{
				$url=(string)$urlVideo->url;
				$url=str_replace('watch?v=','embed/',$url);
				$urlTag='<iframe width="100%" height="330" src="'.$url.'" frameborder="0" allowfullscreen=""></iframe>';
			}
			else
			{
				$urlTag='<div with="100%" height="330" style="background-color:#fff;"></div>';
			}
			
			return View::make('magazines.index', array('magazines'=>$magazines, 'urlVideo'=>$urlTag));
		}
		else
		{
			return 'No hay registros';//Esto deberia devolver un error 404
		}
	}
	

}
