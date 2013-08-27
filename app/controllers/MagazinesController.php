<?php

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
		

		
		$magazines = Magazine::find($cont);
		if($magazines)
		{
		$id=$magazines->
dossier_id;
		$dossiers = Dossier::find($id);
		$editoriales= Editoriale::all();
		foreach($editoriales as $editorial)
		{
			if(($editorial->magazine_id)==($magazines->id))
			{
			break;
			}
		}
		return View::make('magazines.index') -> with('magazines', $magazines) -> with('dossiers',$dossiers) -> with('editorial',$editorial);
		}
		else
		{
		return 'No hay registros';
		};
		
	}

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
			return App::abort(404, 'Page not found');
		};
	}
	public function colaboradores($id)
	{
		$magazines = Magazine::find($id);
		if($magazines)
		{return View::make('magazines.colaboradores')-> with('magazines',$magazines);}
		else
		{return 'Id no existe';};
	}
	public function revista($id)
	{
		$magazines = Magazine::find($id);
		if($magazines)
		{return View::make('magazines.revista')-> with('magazines',$magazines);}
		else
		{return 'Id no existe';};
	}
	public function otrasPublicaciones($id)
	{
		$magazines = Magazine::find($id);
		if($magazines)
		{return View::make('magazines.otras')-> with('magazines',$magazines);}
		else
		{return 'Id no existe';};
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
		{return 'Id no existe';};
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