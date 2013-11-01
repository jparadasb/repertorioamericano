@extends('layouts.login')
@section('head')
{{HTML::style('css/contributors.css');}}
@stop
@section('authbar')
<a href="{{URL::to('/contributors')}}" class="span3 btn">Volver</a>
<a href="{{URL::to('/admin/delete/')}}" class="span3 btn">Borrar</a>
@stop
@section('contenido')
	
	
@stop