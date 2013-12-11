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

@section('creditoslink')
/creditos/{{$magazines->id}}
@stop
<!-- fin-->
<!--Configuracion del id de li-->
@section('idi')
nav1
@stop
@section('ids')
nav1
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
@section('idcr')
nav2
@stop
@section('head')
{{HTML::style('css/creditos.css')}}
@stop
@section('contenido')
	{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}

	<div class="span8 white">
		<p class="right"><a href="http://humanidadenred.org.ve">{{HTML::image('resources/rdiadhpng.png')}}</a></p>
		<p class="left"><a href="http://fba.org.ve">{{HTML::image('resources/ayacucho.png')}}</a></p>
		<p class="clear">Publicación auspiciada por el
		Banco Central de Venezuela</p>
		<p>{{HTML::image(asset('img/BCV.png'), 'BCV')}}</p>
	</div>
	<div class="span14 blue">
	<ul>
		<li>EL NUEVO REPERTORIO AMERICANO</li>
		<li>Fundación Biblioteca Ayacucho</li>
		<li>Red de Intelectuales, Artistas y Luchadores Sociales en Defensa de la Humanidad</li>
		<li>Revista Trimestral. Año 1, Número 0</li>
		<li>Caracas, Venezuela, mayo de 2013</li>
		<li class="bold">Depósito Legal pp201302DC4279</li>
	</ul>
	<ul>
		<li class="title">DIRECCIÓN</li>
		<li>Carmen Bohórquez</li>
		<li>Humberto Mata</li>
	</ul>
	<ul>
		<li class="title">COORDINACIÓN EDITORIAL</li>
		<li>María Ramírez Delgado</li>
	</ul>
	<ul>
		<li class="title">COORDINACIÓN DE PRODUCCIÓN</li>
		<li>Elizabeth Coronado</li>
	</ul>
	<ul>
		<li class="title">CORRECCIÓN DE TEXTOS</li>
		<li>Nora López</li>
	</ul>
	<ul>
		<li class="title">CONCEPTO GRÁFICO</li>
		<li>Esther Petrone García</li>
	</ul>
	<ul>
		<li class="title">DESARROLLO WEB</li>
		<li>José Paradas Barazarte</li>
	</ul>
	<ul>
		<li class="title">IMPRESIÓN</li>
		<li>Editorial Arte</li>
	</ul>
	<ul>
		<li>Las colaboraciones son solicitadas. Cualquier reproducción total
	o parcial de alguno de los contenidos de esta revista, deberá citar
	la fuente.</li>
	</ul>
	
	
	
	


	</div>
@stop