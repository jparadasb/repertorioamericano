@extends('layouts.login')
@section('head')
{{HTML::style('css/admin.style.css')}}
@stop
@section('contenido')
<div class="row">
	<div class="span4">
		<div >
		<h4>
			Hola, {{Auth::user()->name}}
		</h4>
		<h5>
			Este es el panel de administración
		</h5>
		<a href="{{URL::route('operations.logout')}}" class="btn">Cerrar Sesión</a>
		</div>
	</div>
	<div class="span20">
		<p>Elije la revista que deseas editar o borrar.</p>
	@foreach($magazines as $magazine)
		<article class="revistas">
		<header class="close">
			<a href="admin/delete/{{$magazine->id}}">
				X
			</a>
		</header>
		<a href="admin/{{$magazine->id}}/edit">
		{{HTML::image($magazine->dir_portada,'',array('width'=>'150', 'id' => 'portada', 'class'=>'btn-revista'))}}
		</a>
		</article>
		@endforeach
		<article class="revistas">
			<header class="close">
				
			</header>
		</article>
	</div>
	<div class="span4">
		
	</div>
	
</div>

@stop