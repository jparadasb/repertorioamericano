<?php

class SeccionesViewsController extends \BaseController {

	public function index()
	{
		//
	}
	public function pdf($sec,$m_id,$s_id)
	{
		$m_id=(int)$m_id;
		$s_id=(int)$s_id;


		$infoSection=DB::table('magazine_section')

			->where('section_id', '=', $s_id)
			->where('magazine_id', '=', $m_id)
			->first();

		$pdf='<embed src="/'.$infoSection->dir_pdf.'" width="600" height="700" type="application/pdf">';

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

			

		$cache_name='ip'.$m_id.$s_id.'';
		$cache_name=(string)$cache_name;
		$ip=getRealIP();
		$ip_cache=NULL;
		if (Cache::has($cache_name))
		{
		    $ip_cache=Cache::get($cache_name);
		    if($ip!==$ip_cache)
		    {
		    	DB::table('magazine_section')
						->where('section_id', '=', $s_id)
						->where('magazine_id', '=', $m_id)
						->increment('click_num');
		    }

		}
		else
		{
			Cache::put($cache_name, $ip, 1440);
			DB::table('magazine_section')
						->where('section_id', '=', $s_id)
						->where('magazine_id', '=', $m_id)
						->increment('click_num');
		}
		
		//devuelve el embed construido con el pdf que se pidio
		return View::make('magazines.pdfview', array('pdf'=>$pdf));
				
	}

}