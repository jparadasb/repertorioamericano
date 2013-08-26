@extends('layouts.base')
<!--configuracion de enlaces !-->
@section('iniciolink')
/{{$magazines->id}}
@stop

@section('seccioneslink')
/secciones/{{$magazines->id}}
@stop

@section('colaboradoreslink')
/colaboradores/{{$magazines->id}}
@stop

@section('revistalink')
/revista/{{$magazines->id}}
@stop

@section('otraslink')
/otras-publicaciones/{{$magazines->id}}
@stop

@section('enlaceslink')
/enlaces/{{$magazines->id}}
@stop
<!-- fin-->
<!--Configuracion del id de li-->
@section('idi')
nav1
@stop
@section('ids')
nav2
@stop
@section('idc')
nav1
@stop
@section('idr')
nav1
@stop
@section('ido')
nav1
@stop
@section('ide')
nav1
@stop
<!--Fin-->
@section('head')
{{HTML::script('js/jquery-2.0.3.js')}}
{{HTML::script('js/jquery.nyroModal.custom.js')}}
{{HTML::script('js/jquery.nyroModal-ie6.js')}}
{{HTML::style('css/nyroModal.css')}}
{{HTML::style('css/secciones.css')}}
@stop
@section('contenido')
<div class="row">
	<div class="span24" id="lsecciones">
		{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}
		<?php
		foreach($temas as $tema)
		{
			$modelo=$tema->model;
			foreach($fsecciones as $seccion)
			{
					$strmodelo=$modelo;
					if(array_key_exists($modelo,$seccion))
					{
						$strseccion=$seccion->$modelo;
					}
					echo (array_key_exists($modelo,(array)$seccion));
					// echo ('<'.$strmodelo.'>'.$strseccion.'</'.$strmodelo.'>');
				


			}
		}
		?>
		<!-- <filosofia>
			<a href="../pdf/view/filosofia/{{$magazines->id}}" class="nyroModal" class="nyroModal">FILOSOFÍA</a>
		</filosofia>
		<editorial>
			<a href="../pdf/view/editorial/{{$magazines->id}}" class="nyroModal">EDITORIAL</a>
		</editorial>
		<ritos>
			<a href="../pdf/view/ritos-sagrados/{{$magazines->id}}" class="nyroModal">RITOS SAGRADOS</a>
		</ritos>
		<recursos>
			<a href="../pdf/view/recursos-naturales/{{$magazines->id}}" class="nyroModal">RECURSOS NATURALES</a>
		</recursos>
		<musica>
			<a href="../pdf/view/musica/{{$magazines->id}}" class="nyroModal">MÚSICA</a>
		</musica>
		<historieta>
			<a href="../pdf/view/historia-de-la-historieta/{{$magazines->id}}" class="nyroModal">HISTORIA DE LA HISTORIETA</a>
		</historieta>
		<educacion>
			<a href="../pdf/view/educacion/{{$magazines->
				id}}" class="nyroModal">
				EDUCACIÓN
			</a>
		</educacion>
		<politica>
			<a href="../pdf/view/politica-y-participacion/{{$magazines->id}}" class="nyroModal">POLÍTICA Y PARTICIPACIÓN</a>
		</politica>
		<geopolitica>
			<a href="../pdf/view/geopolitica/{{$magazines->
				id}}" class="nyroModal">
				GEOPOLÍTICA
			</a>
		</geopolitica>
		<filologia>
			<a href="../pdf/view/filologia/{{$magazines->
				id}}" class="nyroModal">
				FILOLOGÍA Y LENGUAS
			</a>
		</filologia>
		<anfictionia>




		</anfictionia>
		<entrevista>
			<a href="../pdf/view/entrevista/{{$magazines->id}}" class="nyroModal">ENTREVISTA</a>
		</entrevista>
		<ciencia>
			<a href="../pdf/view/ciencia-y-botanica/{{$magazines->id}}" class="nyroModal">CIENCIA Y BOTÁNICA</a>
		</ciencia>
		<critica>
			<a href="../pdf/view/critica/{{$magazines->id}}" class="nyroModal">CRÍTICA</a>
		</critica>
		<boletin>
			<a href="../pdf/view/boletin-bibliografico/{{$magazines->id}}" class="nyroModal">BOLETÍN BIBLIOGRÁFICO</a>
		</boletin>
		<literatura>
			<a href="../pdf/view/literatura/{{$magazines->id}}" class="nyroModal">LITERATURA</a>
		</literatura>
		<artes>
			<a href="../pdf/view/artes/{{$magazines->id}}" class="nyroModal">ARTES</a>
		</artes>
		<economia>
			<a href="../pdf/view/economia/{{$magazines->id}}" class="nyroModal">ECONOMÍA</a>
		</economia>
		<ser>
			<a href="../pdf/view/el-ser-humano/{{$magazines->id}}" class="nyroModal">EL SER HUMANO</a>
		</ser>
		<arqueologia>
			<a href="../pdf/view/arqueologia/{{$magazines->id}}" class="nyroModal">ARQUEOLOGÍA</a>
		</arqueologia>
		<historia>
			<a href="../pdf/view/historia-de-america/{{$magazines->id}}" class="nyroModal">HISTORIA DE AMÉRICA</a>
		</historia>
		<sociologia>
			<a href="../pdf/view/sociologia/{{$magazines->id}}" class="nyroModal">SOCIOLOGÍA</a>
		</sociologia> -->
		{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'100'))}}
	</div>
</div>
<script type="text/javascript">
$(function() {
  $('.nyroModal').nyroModal();
});
</script>


@stop