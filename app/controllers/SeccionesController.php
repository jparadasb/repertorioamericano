<?php

class SeccionesController extends \BaseController {

		public function index($id)
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
}