<?php

class SectionsController extends BaseController {

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
		$magazines	=	Magazine::all();
        return View::make('sections.index')->with('magazines',$magazines);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('sections.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules	=	
		array(
			'file_pdf'	=>	'required|mimes:pdf',
			'id'		=>	'required'
			);
		$validator	=	Validator::make(Input::all(),$rules);
		if(!$validator->fails())
		{
			echo Input::get('id');
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
        return View::make('sections.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sections_in 	=	Magazine::find($id)->sections()->get();
		$sections		=	Section::all();
		foreach($sections as $section)
		{
			$s_ids[]		=	$section->id;
		}
        return View::make('sections.edit', array('sections' => $sections, 's_ids' =>	$s_ids, 'sections_in' => $sections_in));
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

}
