<?php

class AdminController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function formlogin()
	{
        if (Auth::check())
        {
        	return Redirect::to('admin');
        }

        return View::make('operations.index');
	}
	public function logout()
	{
		Auth::logout();
		Session::flash('message', 'Has cerrado sesión.');
		return Redirect::to('/');
	}
	public function login()
	{
		$validator = Validator::make( Input::all(),array('username'=>'required','password'=>'required'));

		if(!$validator->fails())
		{
			$auth = array('user_name'=>Input::get('username'),'password'=>Input::get('password'));

			if(Auth::attempt($auth))
			{
				
				return Redirect::to('/login');
			}
			else
			{
				Session::flash('message','El nombre y la contraseña no coinciden, por favor intenta de nuevo.');
				return Redirect::to('/login')->withInput();
				

			}
		}
		else
		{
			return Redirect::to('/login')->withErrors($validator)->withInput();
		}
	}
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
				if(file_exists($pdf))
				{
					unlink($pdf);
				}
				if(file_exists($img))
				{
					unlink($img);
				}
				return Redirect::route('admin.create')->with( 'message', 'Se produjo un error, por favor intenta de nuevo.' )->withInput();
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
        $actives=$magazine->contributors()->get();
        $contributors=Contributor::all();
        $attributes 	=	array('class'=>'inactivo');

        foreach($actives as $active)
        {
        	$ids[]=$active->id;
        }
        foreach($contributors as $contributor)
        {
        	$jquery[]	=	'<script> $(document).ready(function() {';
        	if(in_array($contributor->id,$ids))
        	{
        		$salida[] 		=	
        		Form::open(array('url' => URL::to('contributors/'.$contributor->id.'/edit'), 'method' => 'get', 'id'=>'submit'.$contributor->id)).
        		Form::hidden('contributor_id', $contributor->id).
        		Form::hidden('magazine_id', $magazine->id).
        		HTML::image('/'.$contributor->dir_photo, $contributor->real_name,'', array('id'=>'img'.$contributor_id)).
        		//Form::submit('Desactive').
        		Form::token().
        		Form::close();
        		$jquery[]	=	"$('img'".$contributor_id.").click(function() {$('submit".$contributor_id."').submit();});";
        	}
        	else
        	{
        		        		$salida[] 		=	
        		Form::open(array('url' => URL::to('contributors/'.$contributor->id.'/edit'), 'method' => 'get', 'id'=>'submit'.$contributor->id)).
        		Form::hidden('contributor_id', $contributor->id).
        		Form::hidden('magazine_id', $magazine->id).
        		HTML::image('/'.$contributor->dir_photo, $contributor->real_name, $attributes, array('id'=>'img'.$contributor_id)).
        		//Form::submit('Active').
        		Form::token().
        		Form::close();
        		$jquery[]	=	"$('img'".$contributor_id.").click(function() {$('submit".$contributor_id."').submit();});";
        	}
        }
        $jquery[]	=	'}); </script>';
        return View::make('admin.edit', array('magazine'=>$magazine, 'id'=>$id, 'contributors'=>$salida, 'jquery'=>$jquery));
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

			'num_edi'=>'required|numeric',
			'txt_tema'=>'required',
			'date_pub'=>'required|date',
			'txt_edit'=>'required|max:2740',
			'file_pdf'=>'mimes:pdf',
			'file_image'=>'mimes:jpeg,png'
		);
		$validador = Validator::make( Input::all(), $reglas );

		if( ! $validador->fails() ){

			$magazine 				=		Magazine::find($id);
			$magazine->num_edi		=		e(Input::get( 'num_edi' ));
			$magazine->topic_name	=		e(Input::get( 'txt_tema'));
			$magazine->public_date	=		Input::get('date_pub');
			$magazine->editorial	=		e(Input::get('txt_edit'));

			if(Input::hasFile('file_pdf')!==false)
			{
				$pdf_name=str_random(5).'.pdf';
				$destino_pdf='resources/pdf/';
				if(file_exists($magazine->dir_pdf))
				{
					unlink($magazine->dir_pdf);
				}
				if($pdf=Input::file('file_pdf')->move($destino_pdf,$pdf_name))
				{
					$magazine->dir_pdf	= $pdf;
				}
				else
				{
					return Redirect::to( 'admin/'.$id.'/edit')->with( 'message', 'Se produjo un error al subir archivo.' )->withInput();
				}
						
			}

			if(Input::hasFile('file_image')!==false)
			{
				if(file_exists($magazine->dir_portada))
				{
					unlink($magazine->dir_portada);
				}

				$img_portada_name=str_random(4).'.png';
				$destino_img='resources/photo/';
				$img=$destino_img.$img_portada_name;
				if(Image::make(Input::file('file_image')->getRealPath())->resize(154, 236)->save($img,100))
				{
					$magazine->dir_portada	=		$img;
				}
				else
				{
					return Redirect::to( 'admin/'.$id.'/edit')->with( 'message', 'Se produjo un error al subir archivo.' )->withInput();
				}
			}

			try
			{
				$magazine->save();
			}
			catch( Exception $e )
			{
				//Si hay algún error en el guardado
				return Redirect::to( 'admin/'.$id.'/edit')->with( 'message', 'Se produjo un error, por favor intenta de nuevo.' )->withInput();
				if(file_exists($pdf))
					{
						unlink($pdf);
					}
				if(file_exists($img))
					{
						unlink($img);
					}

			}
			return Redirect::to('admin/'.$id.'/edit');

		}
		else
		{
			//Redireccionar hacia el home, incluyendo mensajes de error del validador
			return Redirect::to( 'admin/'.$id.'/edit')->withErrors( $validador )->withInput();			
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
		
		//Magazine::find($id)->contributors->forceDelete();
		$magazine=Magazine::find($id);
		if(file_exists($magazine->dir_pdf))
		{
			unlink($magazine->dir_pdf);
		}
		if(file_exists($magazine->dir_portada))
		{
			unlink($magazine->dir_portada);
		}

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
