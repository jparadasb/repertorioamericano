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
nav2
@stop
@section('ide')
nav1
@stop
@section('idcr')
nav1
@stop
<!--Fin-->
@section('head')
{{HTML::style('css/otros.css');}}
@stop
@section('contenido')
{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}

<div class="container backblue">
	<div class="span3"></div>
	<div class="span18">
		@foreach($otras_pub as $otra)
		<a href="../../{{$otra->dir_pdf}}">
		<img class="portada" src="../{{$otra->dir_portada}}" width="220">
		</a>
		@endforeach
	</div>
	<div class="span3"></div>
</div>
{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}
@stop