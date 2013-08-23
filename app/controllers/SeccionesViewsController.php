<?php

class SeccionesViewsController extends \BaseController {

	public function index()
	{
		//
	}
	public function pdf($sec,$id)
	{


		switch ($sec) {
			case 'anfictionia-e-integracion':
				
				$secciones=Anfictionia::all();
				break;

			case 'filosofia':
				
				$secciones=Filosofia::all();
				break;

			case 'editorial':
				
				$secciones=Editoriale::all();
				break;
				
			case 'ritos-sagrados':
				
				$secciones=Rito::all();
				break;
			case 'recursos-naturales':
				
				$secciones=Recurso::all();
				break;
			case 'musica':
				
				$secciones=Musica::all();
				break;
			case 'historia-de-la-historieta':
				
				$secciones=Historieta::all();
				break;
			case 'educacion':
				
				$secciones=Educacione::all();
				break;
			case 'politica-y-participacion':
				
				$secciones=Participacione::all();
				break;
			case 'geopolitica':
				
				$secciones=Geopolitica::all();
				break;
			case 'filologia':
				
				$secciones=Filologia::all();
				break;
			case 'entrevista':
				
				$secciones=Entrevista::all();
				break;
			case 'ciencia-y-botanica':
				
				$secciones=Ciencia::all();
				break;
			case 'critica':
				
				$secciones=Critica::all();
				break;
			case 'boletin-bibliografico':
				
				$secciones=Boletine::all();
				break;
			case 'literatura':
				
				$secciones=Literatura::all();
				break;
			case 'artes':
				
				$secciones=Arte::all();
				break;
			case 'economia':
				
				$secciones=Economia::all();
				break;
			case 'el-ser-humano':
				
				$secciones=Humano::all();
				break;
			case 'arqueologia':
				
				$secciones=Arqueologia::all();
				break;
			case 'historia-de-america':
				$secciones=America::all();
				break;
			case 'sociologia':
				$secciones=Sociologia::all();
				break;

			default:
				# code...
				break;
		}
		if(isset($secciones))
		{
			foreach($secciones as $seccion)
			{
				if(($seccion->magazine_id)==$id)
				{
				break;
				}
			}
			if(isset($seccion))
			{
				return View::make('magazines.pdfview') -> with('seccion',$seccion);
			}
		}
		elseif (!isset($secciones)) 
		{
			return App::abort(404,'ERROR');
		}
	}

}