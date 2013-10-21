<?php

class DownloadController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		$Magazine=Magazine::find($id);
		$url=$Magazine->dir_pdf;

		function getRealIP() 
		{
			if (!empty($_SERVER['HTTP_CLIENT_IP']))
			{
				return $_SERVER['HTTP_CLIENT_IP'];
			}
				        
				       
		  	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		  	{
		  		return $_SERVER['HTTP_X_FORWARDED_FOR'];
		  	}

			return $_SERVER['REMOTE_ADDR'];
		}
//incrementa las visitas a cada pdf dependiendo de la direccion ip

			

		$cache_name='ip_maga'.$id;
		$cache_name=(string)$cache_name;
		$ip=getRealIP();
		$ip_cache=NULL;
		if (Cache::has($cache_name))
		{
		    $ip_cache=Cache::get($cache_name);
		    if($ip!==$ip_cache)
		    {
		    	$Magazine->increment('click_num');
		    }

		}
		else
		{
			Cache::put($cache_name, $ip, 1440);
			$Magazine->increment('click_num');
		}

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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