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
nav1
@stop
@section('idc')
nav2
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
{{HTML::style('css/colaboradores.css');}}
@stop
@section('contenido')
<div class="container backblue">
	<div class="span3"></div>
	<div class="span18">
{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}
@foreach ($colaboradores as $colaborador)
<div>
{{HTML::image($colaborador->dir_photo,$colaborador->real_name,array('class' => 'col_m'))}}
</div>
@endforeach
<div id="colaborador" class="inactivo">
	<div id="nombre" class="nombre">
		{{$colaborador->real_name}}
	</div>
	<div id="cerrar" class="cerrar">
		
	</div>
</div>
{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}
	</div>
	<div class="span3"></div>
</div>
@stop