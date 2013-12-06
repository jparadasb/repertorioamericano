@extends('layouts.login')
@section('head')
{{HTML::style('css/admin.style.css')}}
{{HTML::script('js/jquery-2.0.3.js')}}
{{HTML::script('js/jquery.form-validator.min.js')}}
{{HTML::script('js/jquery.form.min.js')}}
@stop
@section('authbar')
		<a href="{{URL::to('/admin')}}" class="span3 btn">Volver</a>
@stop
@section('contenido')
	<div class="span18">
		@if($video!==NULL)
		<?php
		$titulo 	=	$video->titulo;
		$url  		=	$video->url;	
		?>
		@else
		<?php
		$url 		=	'';
		$titulo 	=	''; 
		?>
		@endif
	{{Form::open(array('route' => 'admin.video', 'id'=>'form', 'method'=>'POST'))}}
	{{Form::label('titulo','Titulo del video',array('class'=>'label label-clear'))}}
	{{Form::text('titulo',$titulo, array('class'=>'input-xxlarge', 'required'=>'required') )}}
	{{Form::label('url','URL del video en Youtube',array('class'=>'label label-clear'))}}
	{{Form::text('url',$url,array('class'=>'input-xxlarge', 'required'=>'required') )}}
	{{Form::label('',' ',array('class'=>'label label-clear'))}}
	{{Form::submit( ' Guardar' , array('class'=>'btn bsave'))}}
	{{Form::close()}}
		@if(Session::has('message'))
			<div class="message">
				{{Session::get('message')}}
			</div>
		@endif
	</div>

@stop