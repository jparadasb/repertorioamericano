<?php

class SeccionesController extends \BaseController {

		public function index($id)
	{
		$magazines = Magazine::find($id);
		$temas = Tema::all();

		if(isset($magazines))
		{
			if(isset($temas))
			{
				$fsecciones=array('0'=>'cero');
				foreach($temas as $tema)
				{
					$modelo=$tema->model;
					$secciones=$modelo::all();
					if(!count($secciones)>0)
						{
							$tema_f=$tema->real_name;
							$fsecciones = array($fsecciones, $tema->model => $tema_f);
						}
					foreach ($secciones as $seccion) {

						if($magazines->id==$seccion->magazine_id)
						{
							

							if($seccion->state==true)
							{
								$tema_f='<a href="../pdf/view/'.$tema->url.'/'.$tema->id.' " class="nyroModal">'.$tema->real_name.'</a>';
								$fsecciones = array($fsecciones, $tema->model => $tema_f);
							}
							else
							{
								$tema_f=$tema->real_name;
								$fsecciones = array($fsecciones, $tema->model => $tema_f);
							}
						}
						

					}


				}

			}



			return View::make('magazines.secciones')
			-> with('magazines',$magazines)
			-> with('fsecciones',$fsecciones)
			-> with('temas', $temas);
		}
		
		else
		{
			return 'Id no existe';
		};
	}
}