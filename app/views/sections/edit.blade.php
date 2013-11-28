@extends('layouts.login')
@section('authbar')
<a href="{{URL::to('/sections')}}" class="span3 btn">Volver</a>
@stop
@section('contenido')
<div class="span16 create">
	@foreach($sections as $section)
			{{Form::open(array('route'=>'sections.store','method' =>'POST', 'files'=>'true', 'name'=>$section->id))}}

			{{Form::label('file', $section->real_name, array('class'=>'label label-clear'))}}
		@if(!in_array($section->id,$s_ids))
			{{Form::file('file_pdf',array('accept'=>'.pdf','data-validation'=>'mime size', 'data-validation-allowing'=>'pdf', 'data-validation-max-size'=>'100M','data-validation-error-msg'=>'El archivo debe ser pdf no mayor a 100MB de tamaño'))}}
		@endif
		@if(in_array($section->id,$s_ids))
		@foreach($sections_in as $section_in)
			@if($section_in->id === $section->id)
		{{'<a href="'.asset($section_in->pivot->dir_pdf).'">'.HTML::image(asset('resources/dpdf.png'),$section_in->pivot->dir_pdf, array('width'=>'64')).'</a>'}}
			@endif
		@endforeach
		@endif

			{{Form::hidden('s_id', $section->id);}}
			{{Form::hidden('id', $id);}}
		@if(!in_array($section->id,$s_ids))
			{{Form::submit( '' , array('class'=>'btn bsave'))}}
		@endif
			{{Form::token()}}
			{{Form::close()}}
		@if(in_array($section->id,$s_ids))
			@foreach($sections_in as $section_in)
				@if($section_in->id === $section->id)
				{{Form::open(array('route'=>array('sections.destroy',$section->id)))}}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::hidden('magazine_id', $id)}}
				{{Form::submit( 'Borrar' , array('class'=>'btn bsave'))}}
				{{Form::close()}}
				@endif
			@endforeach
		@endif
	@endforeach
</div>
@stop