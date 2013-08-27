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
			echo ('<'.strtolower($modelo).'>'.$fsecciones[$modelo].'</'.$modelo.'>');

		}
		?>
		{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'100'))}}
	</div>
</div>
<script type="text/javascript">
$(function() {
  $('.nyroModal').nyroModal();
});
</script>


@stop