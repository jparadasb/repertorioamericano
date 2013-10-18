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

			'num_edi'=>'required|numeric',
			'txt_tema'=>'required',
			'date_pub'=>'required|date',
			'txt_edit'=>'required|max:1740',
			'file_pdf'=>'required|mimes:pdf',
			'file_image'=>'required|mimes:jpeg,png'
		);
		$validador = Validator::make( Input::all(), $reglas );
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
        return View::make('admin.edit')->with($id);
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
		
		//Magazine::find($id)->contributors->forceDelete();
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
