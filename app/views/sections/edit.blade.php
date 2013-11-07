@extends('layouts.login')
@section('authbar')
<a href="{{URL::to('/sections')}}" class="span3 btn">Volver</a>
@stop
@section('contenido')
<div class="span16 create">
	@foreach($sections as $section)


			{{Form::open(array('route'=>'sections.store','method' =>'POST', 'file'=>'true', 'name'=>$section->id))}}
			{{Form::label('file', $section->real_name, array('class'=>'label label-clear'))}}
			{{Form::file('file_pdf',array('accept'=>'.pdf','data-validation'=>'mime size', 'data-validation-allowing'=>'pdf', 'data-validation-max-size'=>'100M','data-validation-error-msg'=>'El archivo debe ser pdf no mayor a 100MB de tamaño'))}}

			@foreach($sections_in as $s)
				@if($s->id === $section->id)
					{{'<a href="'.asset($s->pivot->dir_pdf).'">'.HTML::image(asset('resources/dpdf.png'),$s->pivot->dir_pdf, array('width'=>'64')).'</a>'}}
				@endif
			@endforeach

			{{Form::hidden('id', $section->id);}}
			{{Form::submit( '' , array('class'=>'btn bsave'))}}	
			{{Form::token()}}
			{{Form::close()}}



	@endforeach
</div>
@stop