<?php

class ColaboradoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$magazines = Magazine::find($id);
		$colaboradores = DB::select('select * from contributor_magazines where magazine_id='.$id, array(1));


		if($magazines)
		{return View::make('magazines.colaboradores')-> with('magazines',$magazines);}
		else
		{return 'Id no existe';};
	}








}