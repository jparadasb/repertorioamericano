@extends('layouts.login')
@section('head')
{{HTML::style('css/contributors.css');}}

@stop
@section('authbar')
<a href="{{URL::to('/contributors')}}" class="span3 btn">Volver</a>
{{Form::open(array('route' => array('contributors.destroy', $contributor->id)  ) ) }}
{{Form::hidden('_method','DELETE')}}
{{Form::submit( 'Borrar' , array('class'=>'span3 btn'))}}
{{ Form::close() }}
@stop
@section('contenido')
	<div class="span16">

			{{Form::open(
				array(
				'url'	=>	URL::to('contributors/'.$contributor->id), 
				'files'	=>	'true', 
				'id'	=>	'form', 
				'method'=>	'PUT'))}}
		<fieldset>
			{{Form::label('name','Nombre del Colaborador',array('class'=>'label label-clear'))}}
			@if( $errors->has( 'name' ) )
				@foreach( $errors->get( 'name' ) as $error )
				<label for="name" class="text-error">{{$error}}</label>
				@endforeach
			@endif
			{{Form::text('name',$contributor->real_name,array('class'=>'input-xxlarge', 'required'=>'required'))}}
			{{Form::label('bio','Biografía',array('class'=>'label label-clear'))}}
			<textarea id='bio' name='bio' max="1740" rows="10" class="input-xxlarge">{{$contributor->txt_col}}</textarea>
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
				array('accept'	=>	'.JPG,.jpg,.jpeg,.png'))}}
			{{HTML::image($contributor->dir_photo);}}
		</fieldset>
		<fieldset>
			{{Form::submit( ' Guardar' , array('class'=>'btn bsave'))}}	
			{{Form::token()}}
		</fieldset>
			{{Form::close()}}
	</div>
@stop