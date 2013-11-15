@extends('layouts.login')
@section('authbar')
<a href="{{URL::to('/sections')}}" class="span3 btn">Volver</a>
@stop
@section('contenido')
<div class="span16 create">
	@foreach($sections_in as $section)
			{{Form::open(array('route'=>'sections.store','method' =>'POST', 'file'=>'true', 'name'=>$section->id))}}

			{{Form::label('file', $section->real_name, array('class'=>'label label-clear'))}}
		@if(in_array(!$section->id,$s_ids))
			{{Form::file('file_pdf',array('accept'=>'.pdf','data-validation'=>'mime size', 'data-validation-allowing'=>'pdf', 'data-validation-max-size'=>'100M','data-validation-error-msg'=>'El archivo debe ser pdf no mayor a 100MB de tamaño'))}}
		@endif
		@if(in_array($section->id,$s_ids))
		{{'<a href="'.asset($section->pivot->dir_pdf).'">'.HTML::image(asset('resources/dpdf.png'),$section->pivot->dir_pdf, array('width'=>'64')).'</a>'}}
		@endif

			{{Form::hidden('s_id', $section->id);}}
			{{Form::hidden('id', $id);}}
		@if(in_array(!$section->id,$s_ids))
			{{Form::submit( '' , array('class'=>'btn bsave'))}}
		@endif
			{{Form::token()}}
			{{Form::close()}}
	@endforeach
</div>
@stop