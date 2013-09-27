@extends('layouts.base')

<!--configuracion de enlaces !-->
@section('iniciolink')
/
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
nav2
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
<!--Fin-->
@section('titulo')
Inicio
@stop
@section('head')
{{HTML::style('css/inicio.css');}}
@stop
@section('contenido')
@if($magazines)
		<?php 
			setlocale(LC_ALL,'es_VE');
			$fp=$magazines->public_date;
			$fp=date(strtotime($fp));
			 $fp=strftime("%B %Y",$fp);
		?>
		<div id="contenido">
			<div id="seccion1">
			<img class="portada" src="{{$magazines->dir_portada}}" height="200">
			<a href="/revista/pdf/download/{{$magazines->id}}">
			<img src="resources/dpdf.png" height="30">
			</a>
				<div id="numero_fecha">
				<p>número {{str_pad((int) ($magazines->num_edi),2,"0",STR_PAD_LEFT);}} - 
				{{$fp}}</p>
				</div>
			</div>
			<div id="seccion2">
			</div>
		</div>
	@else
		No hay Registros
		@endif

@stop
