@extends('layouts.login')
@section('head')
{{HTML::style('css/contributors.css');}}
@stop
@section('authbar')

@stop
@section('contenido')
	<div class="span18 opciones">
		<p>Seleccione o agregue una revista para editar</p>
	@if($contributors!==NULL)
		@foreach($contributors as $contributor)
			<div class="btn revistas">
			<a href="{{URL::to('contributors/'.$contributor->id.'/edit')}}">
				
			{{HTML::image($contributor->dir_photo,'',array('width'=>'150', 'id' => 'portada', 'class'=>'btn-revista'))}}
			</a>
			</div>
		@endforeach
	@endif
		<div class="agregar btn">
			<a href="{{URL::route('contributors.create')}}">
			{{HTML::image('/img/plus.png')}}
			</a>
		</div>
	</div>
	<div class="span2">
		
	</div>
@stop