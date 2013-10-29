@extends('layouts.login')
@section('head')

@stop
@section('authbar')

@stop
@section('contenido')
	<div class="span18 opciones">
		<p>Seleccione o agregue una revista para editar</p>
	@if($otras!==NULL)
		@foreach($otras as $otra)
			<div class="btn revistas">
			<a href="{{URL::to('otras/'.$otra->id.'/edit')}}">
				
			{{HTML::image($otra->dir_portada,'',array('width'=>'150', 'id' => 'portada', 'class'=>'btn-revista'))}}
			</a>
			</div>
		@endforeach
	@endif
		<div class="agregar btn">
			<a href="{{URL::route('otras.create')}}">
			{{HTML::image('/img/plus.png')}}
			</a>
		</div>
	</div>
	<div class="span2">
		
	</div>
@stop