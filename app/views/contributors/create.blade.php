@extends('layouts.login')
@section('head')
{{HTML::style('css/contributors.css');}}

@stop
@section('authbar')
<a href="{{URL::to('/contributors')}}" class="span3 btn">Volver</a>
@stop
@section('contenido')
	<div class="span16">

			{{Form::open(
				array(
				'route'	=>	'contributors.store', 
				'files'	=>	'true', 
				'id'	=>	'form', 
				'method'=>	'POST'))}}
		<fieldset>
			{{Form::label('name','Nombre del Colaborador',array('class'=>'label label-clear'))}}
			@if( $errors->has( 'name' ) )
				@foreach( $errors->get( 'name' ) as $error )
				<label for="name" class="text-error">{{$error}}</label>
				@endforeach
			@endif
			{{Form::text('name','',array('class'=>'input-xxlarge', 'required'=>'required'))}}
			{{Form::label('bio','Biografía',array('class'=>'label label-clear'))}}
			<textarea id='bio' name='bio' max="1740" rows="10" class="input-xxlarge">{{Input::old('bio')}}</textarea>
			@if( $errors->has( 'bio' ) )
				@foreach( $errors->get( 'bio' ) as $error )
				<label for="bio" class="text-error">{{$error}}</label>
				@endforeach
			@endif
			{{Form::label('photo', 'Foto', array('class'=>'label label-clear'))}}
			@if( $errors->has( 'photo' ) )
				@foreach( $errors->get( 'photo' ) as $error )
				<label for="photo" class="text-error">{{$error}}</label>
				@endforeach
			@endif
			{{Form::file('photo',
				array(
			'accept'	=>	'.JPG,.jpg,.jpeg,.png',
			'required'	=>	'required'))}}
		</fieldset>
		<fieldset>
			{{Form::submit( ' Guardar' , array('class'=>'btn bsave'))}}	
			{{Form::token()}}
		</fieldset>
			{{Form::close()}}
	</div>
@stop