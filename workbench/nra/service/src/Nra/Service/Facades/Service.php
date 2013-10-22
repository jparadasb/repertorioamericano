<?php

namespace Nra\Service\Facades;

use Illuminate\Support\Facades\Facade;

class Service extends Facade{

	protected static function getFacadeAccessor() {

		return 'service';
	}


	public static function GetIp(){

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
}

