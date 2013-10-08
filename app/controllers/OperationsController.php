<?php

class OperationsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
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
        if (Auth::check())
        {
        	return Redirect::to('users');
        }

        return View::make('operations.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('operations.create');
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
        return View::make('operations.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('operations.edit');
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
	public function logout()
	{
		Auth::logout();
		Session::flash('message', 'Has cerrado sesión.');
		return Redirect::to('/login');
	}

}
