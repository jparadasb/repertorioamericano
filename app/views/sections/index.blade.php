@extends('layouts.login')
@section('authbar')
@stop
@section('contenido')
	<div class="span18 opciones">
		<p>Seleccione una revista para ver o editar sus secciones</p>
	@if($magazines!==NULL)
		@foreach($magazines as $magazine)
			<div class="btn revistas">
			<a href="{{URL::to('sections/'.$magazine->id.'/edit')}}">
			{{HTML::image($magazine->dir_portada,'',array('width'=>'150', 'id' => 'portada', 'class'=>'btn-revista'))}}
			</a>
			</div>
		@endforeach
	@endif
<!-- 		<div class="agregar btn">
			<a href="{{URL::route('otras.create')}}">
			{{HTML::image('/img/plus.png')}}
			</a>
		</div> -->
	</div>
	<div class="span2">
		
	</div>
@stop