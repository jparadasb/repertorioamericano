<?php
//@author Jose Paradas jparadas.b@gmail.com
class MagazinesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$magazines = Magazine::orderBy('public_date','DESC')->first();
		
		if( $magazines !== null )
		{
			$urlVideo=Video::orderBy('created_at','DESC')->first();
			if($urlVideo !== null)
			{
				$url=(string)$urlVideo->url;
				$url=str_replace('watch?v=','embed/',$url);
				$urlTag='<iframe width="100%" height="330" src="'.$url.'" frameborder="0" allowfullscreen=""></iframe>';
			}
			else
			{
				$urlTag='<div with="100%" height="330"></div>';
			}

			return View::make('magazines.index', array('magazines'=>$magazines, 'urlVideo'=>$urlTag));
			}
		else
		{
			return 'No hay registros';//Esto deberia devolver una vista con un error 404
		}
		
	}

//@param int $id recibe la id que sera verificado en la base de datos para cambiar el contenido del sitio
	public function seleccionado($id)
	{
		$magazines = Magazine::find($id);

		if($magazines)
		{
			$urlVideo=Video::orderBy('created_at','DESC')->first();
			if($urlVideo !== null)
			{
				$url=(string)$urlVideo->url;
				$url=str_replace('watch?v=','embed/',$url);
				$urlTag='<iframe width="100%" height="330" src="'.$url.'" frameborder="0" allowfullscreen=""></iframe>';
			}
			else
			{
				$urlTag='<div with="100%" height="330" style="background-color:#fff;"></div>';
			}
			
			return View::make('magazines.index', array('magazines'=>$magazines, 'urlVideo'=>$urlTag));
		}
		else
		{
			return 'No hay registros';//Esto deberia devolver un error 404
		}
	}
	
	public function revista($id)
	{
		$magazines = Magazine::find($id);
		$portadas= Magazine::all();
		if($magazines)
		{
			return View::make('magazines.revista')-> with('magazines',$magazines) -> with('portadas',$portadas);
		}
		else
		{
			return 'Id no existe';//Esto deberia devolver un error 404
		}
	}
	public function otrasPublicaciones($id)
	{
		$magazines = Magazine::find($id);
		$otras_pub = Otra::all();
		if($magazines)
		{
			return View::make('magazines.otras')-> with('magazines',$magazines) -> with('otras_pub',$otras_pub);
		}
		else
		{
			return 'Id no existe';//Esto deberia devolver un error 404
		}
	}
	public function enlaces($id)
	{
		$magazines = Magazine::find($id);
		$enlaces = Enlace::all();
		if($magazines)
		{
			return View::make('magazines.enlaces')
				-> with('magazines',$magazines)
				-> with('enlaces',$enlaces);
		}
		else
		{
			return 'Id no existe';//Esto deberia devolver un error 404
		}
	}

		public function colaboradores($id)
	{
		$magazines = Magazine::find($id);
		$colaboradores=Magazine::find($id)->contributors;
		$num=0;
		foreach ($colaboradores as $c)
		{
			$num++;
		}
		$width=2292/$num;

		if($magazines)
		{
			return View::make('magazines.colaboradores', array('magazines'=>$magazines, 'colaboradores'=>$colaboradores, 'width'=>$width));
		}
		else
		{return 'Id no existe';};
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

//incrementa las visitas a cada pdf dependiendo de la direccion ip

			

		$cache_name='ip'.$m_id.$s_id.'';
		$cache_name=(string)$cache_name;
		$ip=Service::GetIp();
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
	public function download($id)
	{
		$Magazine=Magazine::find($id);
		
		if (file_exists($Magazine->dir_pdf))
		{
			header('Content-type: application/pdf');
			header('Content-Disposition: attachment; filename="NRA-Num'.$Magazine->num_edi.'.pdf"');
			readfile($Magazine->dir_pdf);
		
	//incrementa las visitas a cada pdf dependiendo de la direccion ip

				

			$cache_name='ip_pdfm'.$id;
			$cache_name=(string)$cache_name;
			$ip=Service::GetIp();
			$ip_cache=NULL;
			if (Cache::has($cache_name))
			{
			    $ip_cache=Cache::get($cache_name);
			    if($ip!==$ip_cache)
			    {
			    	$Magazine->increment('click_num');
			    	try
			    	{

			    		$Magazine->save();
			    	}
			    	catch( Exception $e )
			    	{
			    		return Redirect::to('/');
			    	}
			    }

			}
			else
			{
				Cache::put($cache_name, $ip, 1440);
				$Magazine->increment('click_num');
					try
			    	{

			    		$Magazine->save();

			    	}
			    	catch( Exception $e )
			    	{
			    		return Redirect::to('/');
			    	}
			
			}

		}
		else
		{
			
		}
	}
public function sections($id)
	{
		
		$magazines=Magazine::find($id);
		$sections=Section::all();
		$secAct = $magazines->sections()->get()->all();
		if($magazines !== null)
		{
			$sectiones=array();
			$saIds=array();

			//Guardamos las ID de las secciones activas en un array
			foreach($secAct as $sact)
			{
				$saIds[]=$sact->id;//todas estas ID estan activas
			}

			foreach($sections as $si)
			{
				//Verificamos si las ID de la seccion a escribir esta activa o no
				if(in_array($si->id,$saIds))
				{
					$secciones[]='<'.$si->html_label.'>'.'<a href="../secciones/'.$si->url.'/'.$id.'/'.$si->id.' " class="nyroModal">'.$si->real_name.'</a></'.$si->html_label.'>';
				}
				else//cuando la seccion no esté activa
				{
					$secciones[]='<'.$si->html_label.'>'.$si->real_name.'</'.$si->html_label.'>';
				}
			}
			
			return View::make('magazines.secciones', array( 'secciones' => $secciones, 'magazines' => $magazines ) );

		}
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
		echo $id;
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

	public static function error($code, $data = array())
	{
		return new static(View::make('error.'.$code, $data), $code);
	}
}