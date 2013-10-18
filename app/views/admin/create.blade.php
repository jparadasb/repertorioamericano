@extends('layouts.login')
@section('head')
{{HTML::style('css/admin.style.css')}}
@stop
@section('contenido')
<div class="row">
	<div class="span8 authcolum">
		<div >
		<h4>
			Hola, {{Auth::user()->name}}
		</h4>
		<h5>
			Panel de administración
		</h5>
		<a href="{{URL::route('operations.logout')}}" class="btn">Cerrar Sesión</a>
		<a href="{{URL::to('/admin')}}" class="btn">Volver</a>
		</div>
	</div>
	<div class="span16 create">
		<fieldset>
			{{Form::open(array('route' => 'admin.store', 'files' => true))}}

			@if( $errors->has( 'num_edi' ) )
				@foreach( $errors->get( 'num_edi' ) as $error )
				<label for="num_edi" class="error">{{$error}}</label>
				@endforeach
			@endif
			{{Form::label('num_edi', 'Número de Edición', array('class' => 'labels'))}}
			{{Form::custom('number','num_edi', Input::old('num_edi'), array('min'=>'1'))}}
			
			@if( $errors->has( 'txt_tema' ) )
				@foreach( $errors->get( 'txt_tema' ) as $error )
				<label for="txt_tema" class="error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('txt_tema', 'Tema', array('class'=>'labels'))}}
			{{Form::text('txt_tema',Input::old('txt_tema'))}}

			@if( $errors->has( 'date_pub' ) )
				@foreach( $errors->get( 'date_pub' ) as $error )
				<label for="date_pub" class="error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('date_pub', 'Fecha de publicación', array('class'=>'labels'))}}
			{{Form::custom('date','date_pub',Input::old('date_pub'))}}

			@if( $errors->has( 'txt_edit' ) )
				@foreach( $errors->get( 'txt_edit' ) as $error )
				<label for="txt_edit" class="error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('txt_edit', 'Editorial', array('class'=>'labels'))}}
			{{Form::text('txt_edit',Input::old('txt_edit'),array('max'=>'1740','rows'=>'50'))}}

			@if( $errors->has( 'file_pdf' ) )
				@foreach( $errors->get( 'file_pdf' ) as $error )
				<label for="file_pdf" class="error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('file_pdf', 'Revista en Pdf', array('class'=>'labels'))}}
			{{Form::file('file_pdf',array('accept'=>'.pdf'))}}

			@if( $errors->has( 'file_image' ) )
				@foreach( $errors->get( 'file_image' ) as $error )
				<label for="file_image" class="error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('file_image', 'Imagen de la portada', array('class'=>'labels'))}}
			{{Form::file('file_image',array('accept'=>'.JPG,.jpg,.jpeg,.png'))}}
		</fieldset>
		{{Form::submit( 'Guardar' )}}
    	{{Form::token()}}
		{{ Form::close() }}



	</div>


	
</div>
@stop