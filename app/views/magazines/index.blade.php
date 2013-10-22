@extends('layouts.base')

@section('titulo')
Inicio
@stop
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
@section('head')
{{HTML::style('css/inicio.css')}}
@stop

@section('contenido')
@if($magazines)
		<?php 
			setlocale(LC_ALL,'es_VE');
			$fp=$magazines->public_date;
			$fp=date(strtotime($fp));
			 $fp=strftime("%B %Y",$fp);
		?>
		<div class="row">
			<div class="span11" id="revista">
				<section>
					<article>
					<header>
					{{HTML::image('resources/transparencia1000x50.png')}}
					{{HTML::image('resources/transparencia.png')}}
					
					{{HTML::image($magazines->dir_portada,'',array('width'=>'150', 'id' => 'portada'))}}
					<div id="descarga">
					<a href="/descargar-revista/{{$magazines->id}}" target="_blank">
					{{HTML::image('resources/dpdf.png','',array('width'=>'60'))}}
					</a>
				</div>
					<div id="fecha">
						número {{str_pad((int) ($magazines->num_edi),2,"0",STR_PAD_LEFT);}} - 
				{{$fp}}
					</div>
					</header>
					<aside >
					<div id="video">
						VIDEO
						/
						PODCAST
					</div>
					<?php /*535px*/ ?>
					{{$urlVideo}}
					</aside>
<!-- 					<aside>
												<a href="http://humanidadenred.org.ve">{{HTML::image('resources/rdiadhpng.png')}}</a>
						<a href="http://fba.org.ve">{{HTML::image('resources/ayacucho.png')}}</a>
					</aside> -->
					</article>
				</section>
			</div>
			<div class="span1"></div>
			<div class="span12" id="editorial">
				<section>
					<article>
						<header>
							<h1>EDITORIAL</h1>
						</header>
						<p class="editorial">
							{{nl2br($magazines->editorial)}}
						</p>

					</article>
				</section>
			</div>
		</div>


	@else
		No hay Registros
		@endif

@stop


