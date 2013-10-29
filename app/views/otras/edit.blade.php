@extends('layouts.login')
@section('head')

{{HTML::style('css/admin.style.css')}}
{{HTML::script('js/jquery-2.0.3.js')}}
{{HTML::script('js/jquery.form-validator.min.js')}}
{{HTML::script('js/jquery.form.min.js')}}

@stop
@section('authbar')

	<a href="{{URL::to('/otras')}}" class="span3 btn">Volver</a>
	<a href="{{URL::to('/otras/delete/'.$otra->id)}}" class="span3 btn">Borrar</a>

@stop
@section('contenido')

		<div class="span16 create">
		<fieldset>
			{{Form::open(array('route' => 'otras.store', 'files' => true, 'id'=>'form', 'method'=>'POST'))}}

			{{Form::label('txt_title', 'Título', array('class'=>'label label-clear'))}}
			{{Form::text('txt_title',$otra->title_pub,array('class'=>'input-xxlarge', 'required'=>'required'))}}

			@if( $errors->has( 'file_pdf' ) )
				@foreach( $errors->get( 'file_pdf' ) as $error )
				<label for="file_pdf" class="text-error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('file_pdf', 'Publicación en Pdf', array('class'=>'label label-clear'))}}
			{{Form::file('file_pdf',array('accept'=>'.pdf', 'required'=>'required','data-validation'=>'mime size', 'data-validation-allowing'=>'pdf', 'data-validation-max-size'=>'100M','data-validation-error-msg'=>'El archivo debe ser pdf no mayor a 100MB de tamaño'))}}
			@if($otra->dir_pdf!==NULL)
				{{HTML::image(asset('resources/dpdf.png'),$otra->dir_pdf, array('width'=>'64'));}}
			@endif

			@if( $errors->has( 'file_image' ) )
				@foreach( $errors->get( 'file_image' ) as $error )
				<label for="file_image" class="text-error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('file_image', 'Imagen de la portada', array('class'=>'label label-clear'))}}
			{{Form::file('file_image',array('accept'=>'.JPG,.jpg,.jpeg,.png','required'=>'required','data-validation'=>'mime size', 'data-validation-allowing'=>'jpg, png', 'data-validation-max-size'=>'50M', 'data-validation-max-size'=>'100M','data-validation-error-msg'=>'El archivo debe ser jpg o png no mayor a 50MB de tamaño'))}}
			{{HTML::image(asset($otra->dir_portada),'', array('width'=>'120','for'=>'file_image'));}}

		</fieldset>
		{{Form::submit( 'Guardar',array('class'=>'submit') )}}
    	{{Form::token()}}
		{{ Form::close() }}
	</div>
<div class="span2"></div>

@stop