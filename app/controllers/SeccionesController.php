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
				foreach($temas as $tema)
				{
					//$tema='Anfictionia';
					$modelo=$tema->model;
					$temas_modelos = $modelo::all();

					foreach($temas_modelos as $tema_modelo)
					{
						if($tema_modelo->magazine_id==$id)
						{
							if($tema_modelo->state==true)
							{	
								$tema_aprobado=$tema_modelo;
							}
							break;
						}
					}
					if(isset($tema_aprobado))
					{
						$tema_formateado='<a href="../pdf/view/'.$tema_aprobado->url.'/'.$tema_aprobado->id.' " class="nyroModal">'.$tema_aprobado->real_name.'</a>';
					}
					else
					{
						$tema_formateado=$tema_aprobado->real_name;
					}
					$fsecciones = (object) array($tema_aprobado->model => $tema_formateado);
				}

			}


			
			return View::make('magazines.secciones')
			-> with('magazines',$magazines)
			-> with('fsecciones',$fsecciones);
		}
		
		else
		{
			return 'Id no existe';
		};
	}
}