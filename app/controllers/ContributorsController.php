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
		$reglas=
		array(
			'name'	=>	'required',
			'bio'	=>	'required|max:1740',
			'photo'	=>	'required|mimes:jpeg,png'
		);
		$validador = Validator::make( Input::all(), $reglas );
		if( ! $validador->fails())
		{

			$photo_name 	=	str_random(4).'pic.png';
			$destino 		=	'resources/colaboradores/';
			$img 			=	$destino.$photo_name;
			Image::make(Input::file('photo')->getRealPath())->resize(189, 127)->save($img,100);

			$contributor 				=	new Contributor();
			$contributor->real_name		=	e(Input::get('name'));
			$contributor->txt_col		=	e(Input::get('bio'));
			$contributor->dir_photo		=	$img;
			try
			{
				$contributor->save();

			}
			catch(Exception $e)
			{
				if(file_exists($img))
				{
					unlink($img);
				}
				return Redirect::route('contributors.create')->with( 'message', 'Se produjo un error, por favor intenta de nuevo.' )->withInput();
			}
			return Redirect::to('contributors');

		}
		else
		{
			//Redireccionar hacia el home, incluyendo mensajes de error del validador
			return Redirect::route( 'contributors.create' )->withErrors( $validador )->withInput();
	
		}
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
		$contributor 	=	Contributor::find($id);
		return View::make('contributors.edit')->with('contributor',$contributor);
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
		$reglas=
		array(
			'name'	=>	'required',
			'bio'	=>	'required|max:1740',
			'photo'	=>	'mimes:jpeg,png'
		);
		$validador = Validator::make( Input::all(), $reglas );
		if( ! $validador->fails())
		{


			$contributor 				=	Contributor::find($id);
			$contributor->real_name		=	e(Input::get('name'));
			$contributor->txt_col		=	e(Input::get('bio'));

			if(Input::hasFile('photo')!==false)
			{
				$photo_name 	=	str_random(4).'pic.png';
				$destino 		=	'resources/colaboradores/';
				$img 			=	$destino.$photo_name;
				$contributor->dir_photo		=	$img;
				if(file_exists($contributor->dir_photo))
				{
					unlink($contributor->dir_photo);
				}

				if(Image::make(Input::file('photo')->getRealPath())->resize(189, 127)->save($img,100))
				{
					$contributor->dir_photo	=		$img;
				}
				else
				{
					return Redirect::to('contributors/'.$id.'/edit')->with( 'message', 'Se produjo un error al tratar de subir la imagen.' )->withInput();
				}
			}
			else
			{

			}
			try
			{
				$contributor->save();
			}
			catch(Exception $e)
			{
				if(file_exists($img))
				{
					unlink($img);
				}
				return Redirect::to('contributors/'.$id.'/edit')->with( 'message', 'Se produjo un error, por favor intenta de nuevo.' )->withInput();
			}
			return Redirect::to('contributors/'.$id.'/edit');

		}
		else
		{
			//Redireccionar hacia el home, incluyendo mensajes de error del validador
			return Redirect::to('contributors/'.$id.'/edit')->withErrors( $validador )->withInput();
	
		}
		
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
