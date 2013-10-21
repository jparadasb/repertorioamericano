@extends('layouts.login')
@section('head')
{{HTML::style('css/admin.style.css')}}
@stop
@section('contenido')
<div class="row">
	<div class="span6 authcolum">
		<div >
		<h4>
			Hola, {{Auth::user()->name}}
		</h4>
		<h5>
			Panel de administración
		</h5>
		<a href="{{URL::route('operations.logout')}}" class="span3 btn">Cerrar Sesión</a>
		</div>
	</div>
	<div class="span18 opciones">
		<p>Seleccione o agregue una revista para editar</p>
	@if($magazines!==NULL)
		@foreach($magazines as $magazine)
			<div class="btn revistas">
			<a href="{{URL::to('admin/'.$magazine->id.'/edit')}}">
				
			{{HTML::image($magazine->dir_portada,'',array('width'=>'150', 'id' => 'portada', 'class'=>'btn-revista'))}}
			</a>
			</div>
		@endforeach
	@endif
		<div class="agregar btn">
			<a href="{{URL::to('admin/create')}}">
			{{HTML::image('/img/plus.png')}}
			</a>
		</div>
	</div>
	<div class="span2">
		
	</div>
	
</div>

@stop