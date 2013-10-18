<?php

class AdminController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$magazines=Magazine::all();
        return View::make('admin.index')->with('magazines',$magazines);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('admin.create');
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

			'num_edi'=>'required|numeric|unique:magazines',
			'txt_tema'=>'required',
			'date_pub'=>'required|date',
			'txt_edit'=>'required|max:1740',
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

			$magazine 				=		new Magazine();
			$magazine->num_edi		=		e(Input::get( 'num_edi' ));
			$magazine->topic_name	=		e(Input::get( 'txt_tema'));
			$magazine->public_date	=		Input::get('date_pub');
			$magazine->editorial	=		e(Input::get('txt_edit'));
			$magazine->dir_pdf		=		$pdf;
			$magazine->dir_portada	=		$img;
			try
			{
				$magazine->save();
			}
			catch( Exception $e )
			{
				//Si hay algún error en el guardado
				return Redirect::route('admin.create')->with( 'message', 'Se produjo un error, por favor intenta de nuevo.' )->withInput();
				unlink($pdf);
				unlink($img);
			}
			return Redirect::to('admin');

		}
		else
		{
			//Redireccionar hacia el home, incluyendo mensajes de error del validador
			return Redirect::route( 'admin.create' )->withErrors( $validador )->withInput();			
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
        return View::make('users.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $magazine=Magazine::find($id);

        return View::make('admin.edit')->with('magazine',$magazine)->with('id',$id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		echo 'jajaja';
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
		
		//Magazine::find($id)->contributors->forceDelete();
		$magazine=Magazine::find($id);
		unlink($magazine->dir_pdf);
		unlink($magazine->dir_portada);
		DB::table('magazine_section')
			->where('magazine_id', '=', $id)
			->delete();
		DB::table('contributor_magazine')
			->where('magazine_id', '=', $id)
			->delete();
		Magazine::find($id)->delete();
		return Redirect::to('admin');
	}

}
