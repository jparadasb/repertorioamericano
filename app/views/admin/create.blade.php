@extends('layouts.login')
@section('head')
{{HTML::style('css/admin.style.css')}}
{{HTML::script('js/jquery-2.0.3.js')}}
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
				<label for="num_edi" class="error">{{$error}}</label>
				@endforeach
			@endif
			{{Form::label('num_edi', 'Número de Edición', array('class' => 'labels'))}}
			{{Form::custom('number','num_edi', Input::old('num_edi'), array('min'=>'1', 'class'=>'input-mini'))}}
			
			@if( $errors->has( 'txt_tema' ) )
				@foreach( $errors->get( 'txt_tema' ) as $error )
				<label for="txt_tema" class="error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('txt_tema', 'Tema', array('class'=>'labels'))}}
			{{Form::text('txt_tema',Input::old('txt_tema'),array('class'=>'input-xxlarge'))}}

			@if( $errors->has( 'date_pub' ) )
				@foreach( $errors->get( 'date_pub' ) as $error )
				<label for="date_pub" class="error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('date_pub', 'Fecha de publicación', array('class'=>'labels'))}}
			{{Form::custom('date','date_pub',Input::old('date_pub'),array('calss'=>'input-medium'))}}

			@if( $errors->has( 'txt_edit' ) )
				@foreach( $errors->get( 'txt_edit' ) as $error )
				<label for="txt_edit" class="error">{{$error}}</label>
				@endforeach
			@endif

			{{Form::label('txt_edit', 'Editorial', array('class'=>'labels'))}}
			<textarea id='txt_edit' name='txt_edit' max="1740" rows="10" class="input-xxlarge">{{Input::old('txt_edit')}}</textarea>

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
<div class="span2"></div>
@stop
@section('afterbody')
	<div class="progreso">
		<div class="barra">
			<progress value="100" max="100" id="progressbar"></progress>

		</div>
		<div class="pr">
			
		</div>
	</div>
@stop
@section('jquery')
<script type='text/javascript'>
$(document).ready(function() {
	    //  $('#form').ajaxForm({ 
					// dataType: "text",
					// contentType: "text/plain",
		   //          beforeSubmit: function() {
		   //          	$('.progreso').css('display','block');
		   //              var percentVal = 0;
		   //              $('#progressbar').val(percentVal)
		   //          },             
		   //          uploadProgress: function(event, position, total, percentComplete) {
		   //              var percentVal = percentComplete;
		   //              $('#progressbar').val(percentVal);
		   //          },
		   //          complete: function(){
		   //          	var percentVal = 100;
		   //              $('#progressbar').val(percentVal);
		   //              },
		   //          success: function (retorna){
		   //          		$('header').html(retorna);
		   //          	 	//console.log(retorna);
		   //          }
	    //         }); 
	$('<input type="submit"').click(function() {
		$('.progreso').css('display','block');
	});

   }); 
    
</script>
@stop