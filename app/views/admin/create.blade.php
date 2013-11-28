@extends('layouts.login')
@section('head')
{{HTML::style('css/admin.style.css')}}
{{HTML::script('js/jquery-2.0.3.js')}}
{{HTML::script('js/jquery.form-validator.min.js')}}
{{HTML::script('js/jquery.form.min.js')}}

@stop
@section('authbar')
		<a href="{{URL::to('/admin')}}" class="span3 btn">Volver</a>
	@stop
@section('contenido')
	
	
	<div class="span16 create">
		<fieldset>
			{{Form::open(array('route' => 'admin.store', 'files' => true, 'id'=>'form', 'method'=>'POST'))}}

			@if( $errors->has( 'num_edi' ) )
				@foreach( $errors->get( 'num_edi' ) as $error )
				<label for="num_edi" class="text-error">{{$error}}</label>
				@endforeach
			@endif
			{{Form::label('num_edi', 'Número de Edición', array('class' => 'label label-clear'))}}
			{{Form::custom('number','num_edi', Input::old('num_edi'), array('min'=>'0', 'class'=>'input-mini','required'=>'required','data-validation'=>'number'))}}
			
			@if( $errors->has( 'txt_tema' ) )
				@foreach( $errors->get( 'txt_tema' ) as $error )
				<label for="txt_tema" class="text-error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('txt_tema', 'Tema', array('class'=>'label label-clear'))}}
			{{Form::text('txt_tema',Input::old('txt_tema'),array('class'=>'input-xxlarge', 'required'=>'required'))}}

			@if( $errors->has( 'date_pub' ) )
				@foreach( $errors->get( 'date_pub' ) as $error )
				<label for="date_pub" class="text-error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('date_pub', 'Fecha de publicación', array('class'=>'label label-clear'))}}
			{{Form::custom('date','date_pub',Input::old('date_pub'),array('class'=>'input-medium','required'=>'required','data-validation'=>'date','data-validation-format'=>'yyyy-mm-dd'))}}

			@if( $errors->has( 'txt_edit' ) )
				@foreach( $errors->get( 'txt_edit' ) as $error )
				<label for="txt_edit" class="text-error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('txt_edit', 'Editorial', array('class'=>'label label-clear'))}}
			<textarea id='txt_edit' name='txt_edit' max="1740" rows="10" class="input-xxlarge" required data-validation="length" data-validation-length="max1740">{{Input::old('txt_edit')}}</textarea>

			@if( $errors->has( 'file_pdf' ) )
				@foreach( $errors->get( 'file_pdf' ) as $error )
				<label for="file_pdf" class="text-error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('file_pdf', 'Revista en Pdf', array('class'=>'label label-clear'))}}
			{{Form::file('file_pdf',array('accept'=>'.pdf', 'required'=>'required','data-validation'=>'mime size', 'data-validation-allowing'=>'pdf', 'data-validation-max-size'=>'100M','data-validation-error-msg'=>'El archivo debe ser pdf no mayor a 100MB de tamaño'))}}

			@if( $errors->has( 'file_image' ) )
				@foreach( $errors->get( 'file_image' ) as $error )
				<label for="file_image" class="text-error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('file_image', 'Imagen de la portada', array('class'=>'label label-clear'))}}
			{{Form::file('file_image',array('accept'=>'.JPG,.jpg,.jpeg,.png','required'=>'required','data-validation'=>'mime size', 'data-validation-allowing'=>'jpg, png', 'data-validation-max-size'=>'50M', 'data-validation-max-size'=>'100M','data-validation-error-msg'=>'El archivo debe ser jpg o png no mayor a 50MB de tamaño'))}}
		</fieldset>
		{{Form::submit( ' Guardar' , array('class'=>'btn bsave'))}}	
    	{{Form::token()}}
		{{ Form::close() }}
	</div>
<div class="span2"></div>
@stop
@section('afterbody')
	<div class="progreso">
		<div class="bar">
			<div class="progress-a">
				
			</div>
			a.
		</div>
	</div>
@stop
@section('jquery')
<script type='text/javascript'>

				$.validate({
					modules : 'file, date',

				});
				// $('body').click(function(event) {
				// 	$('.progreso').css('display','block');
				// });

				$(document).ready(function() { 

		            $('#form').ajaxForm({ 

						beforeSend: function() {

							$('.progreso').css('display','block');
							var percentVal = '0%';
							$('.progress-a').css('width',percentVal);
							$('.progress-a').html(percentVal);
						},             
						uploadProgress: function(event, position, total, percentComplete) {
							var percentVal = percentComplete + '%';
							$('.progress-a').css('width',percentVal);
							$('.progress-a').html(percentVal);
						},
						complete: function(xhr) {

							$(location).attr('href','/admin'); 
							} 

		            }); 
		        }); 
</script>
@stop