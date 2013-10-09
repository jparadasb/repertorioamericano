@extends('layouts.login')
@section('contenido')
<div class="span10">
	
</div>
<div class="row">
<div class="span4">
	

{{Form::open(array('route'=>'oparations.login','method'=>'post'))}}
<fieldset>
		@if( Session::has( 'message' ) )
		<legend>{{Session::get('message')}}</legend>
		@endif

		@if( $errors->has( 'username' ) )
			@foreach( $errors->get( 'username' ) as $error )
			<?php $error="Por favor introduzca su nombre de usuario";?>
			<label for="username" class="error">{{$error}}</label>
			@endforeach
		@endif

		{{Form::label('username', 'Nombre de Usuario:') . Form::text( 'username', Input::old('username') )}}

		@if( $errors->has( 'password' ) )
			@foreach( $errors->get( 'password' ) as $error )
			<?php $error="Por favor introduzca su contraseña";?>
			<label for="password" class="error">{{$error}}</label>
			@endforeach
		@endif

		{{Form::label( 'password', 'Contraseña:' ) . Form::password( 'password' )}}
</fieldset>

	{{Form::submit('Login')}}

{{Form::token()}}
{{Form::close()}}
</div>
<div class="span10">
	
</div>
</div>
@stop