@extends('layouts.login')
@section('head')
{{HTML::style('css/admin.style.css')}}
@stop
@section('authbar')
		<a href="{{URL::to('/admin')}}" class="span3 btn">Volver</a>
		<a href="{{URL::to('/admin/delete/'.$id)}}" class="span3 btn">Borrar</a>
@stop
@section('contenido')
	<div class="span18">
		
<!-- 		{{Form::model($magazine, array('url' => URL::to('admin/'.$magazine->id), $magazine->id,'method'=>'PUT'))}} -->{{Form::open(array('url' => URL::to('admin/'.$magazine->id), 'files' => true, 'method'=>'PUT'))}}
		<fieldset>
			@if( $errors->has( 'num_edi' ) )
				@foreach( $errors->get( 'num_edi' ) as $error )
				<label for="num_edi" class="error">{{$error}}</label>
				@endforeach
			@endif
				{{Form::label('num_edi', 'Número de Edición', array('class' => 'labels'))}}
				{{Form::custom('number','num_edi', $magazine->num_edi, array('min'=>'1','class'=>'input-mini'))}}
			
			@if( $errors->has( 'txt_tema' ) )
				@foreach( $errors->get( 'txt_tema' ) as $error )
				<label for="txt_tema" class="error">{{$error}}</label>
				@endforeach
			@endif
				{{Form::label('txt_tema', 'Tema', array('class'=>'labels'))}}
				{{Form::text('txt_tema',$magazine->topic_name, array('class'=>'input-xxlarge'))}}

			@if( $errors->has( 'date_pub' ) )
				@foreach( $errors->get( 'date_pub' ) as $error )
				<label for="date_pub" class="error">{{$error}}</label>
				@endforeach
			@endif
				{{Form::label('date_pub', 'Fecha de publicación', array('class'=>'labels'))}}
				{{Form::custom('date','date_pub',$magazine->public_date, array('class'=>'input-medium'))}}

			@if( $errors->has( 'txt_edit' ) )
				@foreach( $errors->get( 'txt_edit' ) as $error )
				<label for="txt_edit" class="error">{{$error}}</label>
				@endforeach
			@endif
				{{Form::label('txt_edit', 'Editorial', array('class'=>'labels'))}}

				<textarea id='txt_edit' name='txt_edit' max="1740" rows="10" class="input-xxlarge">{{$magazine->editorial}}</textarea>

			@if( $errors->has( 'file_pdf' ) )
				@foreach( $errors->get( 'file_pdf' ) as $error )
				<label for="file_pdf" class="error">{{$error}}</label>
				@endforeach
			@endif
				{{Form::label('file_pdf', 'Revista en Pdf', array('class'=>'labels'))}}
				{{Form::file('file_pdf',array('accept'=>'.pdf'))}}
				@if($magazine->dir_pdf!==NULL)
				{{HTML::image(asset('resources/dpdf.png'),$magazine->dir_pdf, array('width'=>'64'));}}
				@endif

			@if( $errors->has( 'file_image' ) )
				@foreach( $errors->get( 'file_image' ) as $error )
				<label for="file_image" class="error">{{$error}}</label>
				@endforeach
			@endif
				{{Form::label('file_image', 'Imagen de la portada', array('class'=>'labels'))}}
				{{Form::file('file_image',array('accept'=>'.JPG,.jpg,.jpeg,.png'))}}
				{{HTML::image(asset($magazine->dir_portada),'', array('width'=>'120','for'=>'file_image'));}}


		{{Form::token()}}
		</fieldset>
		{{Form::submit( 'Actualizar' , array('class'=>'btn'))}}	
		{{ Form::close() }}
		
	</div>

	<div class="span2"></div>
@stop