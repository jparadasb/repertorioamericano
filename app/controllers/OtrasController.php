<?php

class OtrasController extends BaseController {

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
		$otras = Otra::all();
        return View::make('otras.index')->with('otras',$otras);;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('otras.create');
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

			'txt_title'=>'required',
			'file_pdf'=>'required|mimes:pdf',
			'file_image'=>'required|mimes:jpeg,png'
		);
		$validador = Validator::make( Input::all(), $reglas );
		if( ! $validador->fails() ){

			$img_portada_name=str_random(4).'.png';
			$destino_img='resources/photo/';
			$img=$destino_img.$img_portada_name;
			Image::make(Input::file('file_image')->getRealPath())->resize(154, 236)->save($img,100);
			

			$destino_pdf='resources/pdf';
			$pdf_name=str_random(5).'.pdf';
			$pdf=Input::file('file_pdf')->move($destino_pdf,$pdf_name);

			$otra 				= 	new Otra();
			$otra->title_pub	=	e(Input::get('txt_title'));
			$otra->dir_pdf		=	$pdf;
			$otra->dir_portada	=	$img;

			try
			{
				$otra->save();
			}
			catch( Exception $e )
			{
				//Si hay algún error en el guardado
				if(file_exists($pdf))
				{
					unlink($pdf);
				}
				if(file_exists($img))
				{
					unlink($img);
				}
				return 'Se produjo un error, por favor intenta de nuevo.';
			}
			return Redirect::to('admin');	

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
        return View::make('otras.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$otra=Otra::find($id);
        return View::make('otras.edit')->with('otra',$otra);
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
		$otra=Otra::find($id);
		if(file_exists($otra->dir_pdf))
		{
			unlink($otra->dir_pdf);
		}
		if(file_exists($otra->dir_portada))
		{
			unlink($otra->dir_portada);
		}
		Otra::find($id)->delete();
		return Redirect::to('otras');
	}

}
