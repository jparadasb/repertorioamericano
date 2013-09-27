<?php
//@author Jose Paradas jparadas.b@gmail.com
class MagazinesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
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
	public function revista($id)
	{
		$magazines = Magazine::find($id);
		$portadas= Magazine::all();
		if($magazines)
		{
			return View::make('magazines.revista')-> with('magazines',$magazines) -> with('portadas',$portadas);
		}
		else
		{
			return 'Id no existe';//Esto deberia devolver un error 404
		}
	}
	public function otrasPublicaciones($id)
	{
		$magazines = Magazine::find($id);
		$otras_pub = Otra::all();
		if($magazines)
		{
			return View::make('magazines.otras')-> with('magazines',$magazines) -> with('otras_pub',$otras_pub);
		}
		else
		{
			return 'Id no existe';//Esto deberia devolver un error 404
		}
	}
	public function enlaces($id)
	{
		$magazines = Magazine::find($id);
		$enlaces = Enlace::all();
		if($magazines)
		{
			return View::make('magazines.enlaces')
				-> with('magazines',$magazines)
				-> with('enlaces',$enlaces);
		}
		else
		{
			return 'Id no existe';//Esto deberia devolver un error 404
		}
	}





	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public static function error($code, $data = array())
	{
		return new static(View::make('error.'.$code, $data), $code);
	}
}