<!doctype html>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Repertorio Americano - @yield('titulo')</title>
	{{HTML::style('css/default.css');}}
{{HTML::style('css/bootstrap.css');}}
{{HTML::style('css/base.blade.css');}}
{{HTML::style('css/admin.style.css')}}
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
@section('head')
@show
</head>
<body>
@section('afterbody')
@show
<div class="oscuroI" id="oscuro"></div>
	<header class="container">
		<div class="row">
			<div class="span24">
				<div class="gobleft">{{HTML::image(asset('resources/logo_left.png'))}}</div>
				<div class="gobrigth">{{HTML::image(asset('resources/logo_right.png'))}}</div>
		</div>
		</div>
		<div class="row">
			<div class="span24" id="red"></div>
		</div>
<!-- 		<div class="row">
			<div class="span10">{{HTML::image('resources/elnuevorepertorio.png')}}</div>
			<div class="span8"></div>
			<div class="span6">
				<a href="http://humanidadenred.org.ve">{{HTML::image('resources/rdiadhpng.png')}}</a>
				<a href="http://fba.org.ve">{{HTML::image('resources/ayacucho.png')}}</a>
			</div>
		</div> -->
		
	</header>
	
	<div class="container" id="contenido">
		<div class="span24">
			<nav>
						<UL>
							<li>
								<a href="{{URL::to('admin')}}" class="btn">REVISTAS</a>
							</li>
							<li>
								<a href="{{URL::to('sections')}}" class="btn">SECCIONES</a>
							</li>
							<li>
								<a href="{{URL::to('contributors')}}" class="btn">COLABORADORES</a>
							</li>
							<li>
								<a href="{{URL::to('otras')}}" class="btn">OTRAS PUB</a>
							</li>
							<li>
								<a href="{{URL::to('video')}}" class="btn">Video</a>
							</li>
	<!-- 						<li id=@yield('ide')>
								<a href=@yield('enlaceslink')>ENLACES</a>
							</li> -->
						</UL>

			</nav>
		</div>
		
		<div class="row">
				<div class="span6 authcolum">
					<div >
					<h4>
						Hola, {{Auth::user()->name}}
					</h4>
					<h5>
						Panel de administración
					</h5>
					@section('authbar')

					@show
					<a href="{{URL::route('operations.logout')}}" class="span3 btn">Cerrar Sesión</a>
					</div>
				</div>
			@section('contenido')

			@show
		</div>
		
	</div>
	<div class="container">
		<footer>
			<div class="row">
				<div class="span21">
					Centro Financiero Latino, piso 12. Ofics 1, 2 y 3. Avenida Urdaneta. Ánimas a Plaza España. Caracas 1010. Venezuela - Apartados Postales 14.413 y 2.122
					 Teléfonos +58 212 561 6691 - Fax +58 212 564 5643
				</div>
				<div class="span1"><a href="mailto:contacto@nuevorepertorioamericano.org">{{HTML::image('resources/mail.png')}}</a></div>
				<div class="span1"><a href="https://www.facebook.com/pages/Fundaci%C3%B3n-Biblioteca-Ayacucho/140519035982104">{{HTML::image('resources/facebook.png')}}</a></div>
				<div class="span1"><a href="https://twitter.com/biblioayacucho">{{HTML::image('resources/twitter.png')}}</a></div>
			</div>
		</footer>
	</div>
@section('jquery')
@show
</body>
</html>
