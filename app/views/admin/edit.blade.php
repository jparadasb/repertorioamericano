@extends('layouts.login')
@section('head')
{{HTML::style('css/admin.style.css')}}
@stop
@section('contenido')
<div class="row">
	<div class="span8 authcolum">
		<div >
		<h4>
			Hola, {{Auth::user()->name}}
		</h4>
		<h5>
			Panel de administración
		</h5>
		<a href="{{URL::route('operations.logout')}}" class="btn">Cerrar Sesión</a>
		<a href="{{URL::to('/admin')}}" class="btn">Volver</a>
		<fieldset>
		<a href="{{URL::to('/admin/delete/'.$id)}}" class="btn">Borrar</a>
		</fieldset>
		</div>
	</div>
	<div class="20 create">
		<fieldset>
			{{Form::open(array('url' => 'admin/'.$magazine->id,'method'=>'PUT'))}}

			{{Form::label('num_edi', 'Número de Edición', array('class' => 'labels'))}}
			{{Form::custom('number','num_edi',$magazine->num_edi, array('min'=>'1'))}}

			{{Form::label('txt_tema', 'Tema', array('class'=>'labels'))}}
			{{Form::text('txt_tema',html_entity_decode($magazine->topic_name))}}

			{{Form::label('date_pub', 'Fecha de publicación', array('class'=>'labels'))}}
			{{Form::custom('date','date_pub',$magazine->public_date)}}

			{{Form::label('txt_edit', 'Editorial', array('class'=>'labels'))}}
			{{Form::text('txt_edit', html_entity_decode($magazine->editorial),array('max'=>'1740','rows'=>'50'))}}

			{{Form::label('file_pdf', 'Revista en Pdf', array('class'=>'labels'))}}
			{{Form::file('file_pdf')}}

			{{Form::label('file_image', 'Imagen de la portada', array('class'=>'labels'))}}
			{{Form::file('file_image')}}
		</fieldset>
		{{Form::token()}}
		{{Form::submit( 'Guardar' )}}	
		{{ Form::close() }}
		
    	
	</div>

	<div class="span4"></div>
	
</div>
@stop