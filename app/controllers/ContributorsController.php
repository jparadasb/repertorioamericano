<?php

class ContributorsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->beforeFilter( 'auth' );
		$this->beforeFilter( 'csrf', array( 'on' => array( 'store', 'update', 'destroy' ) ) );
	}
	
	public function index()
	{
        $contributors 	=	Contributor::all();
        return View::make('contributors.index')->with('contributors',$contributors);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('contributors.create');
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
        return View::make('contributors.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('contributors.edit');
	}
	public function addRemove($id)
	{
			$reglas=
				array(

					'contributor_id'=>'required',
					'magazine_id'=>'required',
				);
					$validador = Validator::make( Input::all(), $reglas );

		if( ! $validador->fails() ){

			$contributor_id 	=	Input::get( 'contributor_id' );
			$contributor 		=	Contributor::find($contributor_id);
			$magazine 		=	Input::get('magazine_id');
			$contributors 	=	Magazine::find($magazine)->contributors()->get();
			$id_c = array();
			foreach ($contributors as $c)
			{
				$id_c[$c->id]		=	$c->id;	
			}
			if(in_array($contributor_id, $id_c))
			{
				var_dump($id_c);
				unset($id_c[$contributor_id]);
				Magazine::find($magazine)->contributors()->sync($id_c);
			}
			else
			{
				$id_c[$contributor_id]		=	$contributor_id;
				Magazine::find($magazine)->contributors()->sync($id_c);
			}

			return Redirect::to('admin/'.$magazine.'/edit/#img'.$contributor_id);
		}
		else
		{
			//Redireccionar hacia el home, incluyendo mensajes de error del validador
			

			//return Redirect::route( 'admin.create' )->withErrors( $validador )->withInput();
	
		}		
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

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

}
