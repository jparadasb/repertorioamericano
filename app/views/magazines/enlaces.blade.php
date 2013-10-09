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
nav1
@stop
@section('idr')
nav1
@stop
@section('ido')
nav1
@stop
@section('ide')
nav2
@stop
@section('head')
{{HTML::style('css/enlaces.css')}}
@stop
@section('contenido')
	{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}
	<div class="row blank">
	<div class="span5" id="left"></div>
	<div class="span15">

	@foreach($enlaces as $enlace)

		<{{$enlace->tag}}>
		<article>
		{{$enlace->real_name}}
		</article>
		<aside>
		{{HTML::link($enlace->url, $enlace->url)}}
		</aside>
		</{{$enlace->tag}}>

	@endforeach
	</div>
	<div class="span5" id="right"></div>
	</div>
	{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}
@stop
<!--Fin-->
