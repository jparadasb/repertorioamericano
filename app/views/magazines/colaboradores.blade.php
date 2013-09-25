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
{{HTML::style('css/colaboradores.css')}}
{{HTML::script('js/jquery-2.0.3.js')}}
@stop
@section('contenido')

<div class="container backblue">
	<div class="span3"></div>
	<div class="span18">
{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}
@foreach ($colaboradores as $colaborador)
	{{HTML::image($colaborador->dir_photo,$colaborador->real_name,array('class' => 'col_m','id'=>'c'.$colaborador->id))}}
	<div id="colaborador{{$colaborador->id}}" class="inactivo">
	<div id="nombre" class="nombre">
		{{$colaborador->real_name}}
	</div>
	<div id="cerrar" class="cerrar">
		{{HTML::image('img/close.gif','close',array('width' => '16'));}}
	</div>
	<div id="foto" class="foto">
		{{HTML::image($colaborador->dir_photo,$colaborador->real_name)}}
	</div>
	<div id="info" class="info">
		{{$colaborador->txt_col}}
	</div>
</div>
@endforeach

<div id="colaborador1" class="inactivo">
	<div id="nombre" class="nombre">
		{{$colaborador->real_name}}
	</div>
	<div id="cerrar" class="cerrar">
		{{HTML::image('img/close.gif','close',array('width' => '16'));}}
	</div>
	<div id="foto" class="foto">
		{{HTML::image($colaborador->dir_photo,$colaborador->real_name)}}
	</div>
	<div id="info" class="info">
		{{$colaborador->txt_col}}
	</div>
</div>
{{HTML::image('resources/transparencia1000x50.png','',array('width'=>'1100', 'height'=>'50'))}}
	</div>
	<div class="span3"></div>
</div>

<script>
$(".cerrar").click(function () {
	$(".col_m").css("visibility","visible");
	$(".col_mi").addClass("col_m");
	$(".col_m").removeClass("col_mi");
	$("#oscuro").removeClass("oscuro");
	$("#oscuro").addClass("oscuroI");
<?php
// Estas funciones de Jquery se generan dependiendo de la cantidad
// de colaboradores que por revista exista
// la clase sera colaborador[id] que corresponde a la id de la db
	foreach ($colaboradores as $colaborador) {  
		$id="colaborador".$colaborador->id;
		echo '$("#'.$id.'").removeClass("activo");';
		echo "\n";
		echo '$("#'.$id.'").addClass("inactivo");';
		echo "\n";
	}
?>
} );
$("#oscuro").click(function () {
	$(".col_m").css("visibility","visible");
	$(".col_mi").addClass("col_m");
	$(".col_m").removeClass("col_mi");
	$("#oscuro").removeClass("oscuro");
	$("#oscuro").addClass("oscuroI");
<?php
// Estas funciones de Jquery se generan dependiendo de la cantidad
// de colaboradores que por revista exista
// la clase sera colaborador[id] que corresponde a la id de la db
	foreach ($colaboradores as $colaborador) {  
		$id="colaborador".$colaborador->id;
		echo '$("#'.$id.'").removeClass("activo");';
		echo "\n";
		echo '$("#'.$id.'").addClass("inactivo");';
		echo "\n";
	}
?>
} );
<?php
echo "\n";
echo "\n";
	foreach ($colaboradores as $colaborador) 
			{  
				$id="colaborador".$colaborador->id;
				echo '$("#c'.$colaborador->id.'").click(function () {' ;
					echo "\n";
					echo '$("#'.$id.'").removeClass("inactivo");';
					echo "\n";
					echo '$("#'.$id.'").addClass("activo");';
					echo "\n";
					echo '$(".col_m").addClass("col_mi");';
					echo "\n";
					echo '$(".col_mi").removeClass("col_m");';
					echo "\n";
					echo '$("#oscuro").removeClass("oscuroI");';
					echo "\n";
					echo '$("#oscuro").addClass("oscuro");';
					echo "\n";
				echo '} );';
				echo "\n";
				echo "\n";

			} 
?>

</script>
@stop