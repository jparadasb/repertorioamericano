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
		$colaboradores=Magazine::find($id)->contributors;
		if($magazines)
		{return View::make('magazines.colaboradores')-> with('magazines',$magazines)-> with('colaboradores',$colaboradores);}
		else
		{return 'Id no existe';};
	}








}