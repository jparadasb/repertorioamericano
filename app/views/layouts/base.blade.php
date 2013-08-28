<!doctype html>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Repertorio Americano - @yield('titulo')</title>
	{{HTML::style('css/default.css');}}
{{HTML::style('css/bootstrap.min.css');}}
{{HTML::style('css/base.blade.css');}}
@section('head')
@show
</head>
<body>
	<header class="container">
		<div class="row">
			<div class="span3"></div>
			<div class="span16">{{HTML::image('resources/bannergob.png')}}</div>
			<div class="span5"></div>
		</div>
		<div class="row">
			<div class="span24" id="red"></div>
		</div>
		<div class="row">
			<div class="span10">{{HTML::image('resources/elnuevorepertorio.png')}}</div>
			<div class="span8"></div>
			<div class="span6">
				<a href="http://humanidadenred.org.ve">{{HTML::image('resources/rdiadhpng.png')}}</a>
				<a href="http://fba.org.ve">{{HTML::image('resources/ayacucho.png')}}</a>
			</div>
		</div>
		<div class="row">
			<div class="span24" id="trans"></div>
		</div>
		<div class="row">
			<div class="span1"></div>
			<div class="span23">
				<nav class="container">
					<UL class="menu">
						<li id=@yield('idi')>
							<a href=@yield('iniciolink')>INICIO</a>
						</li>
						<li id=@yield('ids')>
							<a href=@yield('seccioneslink')>SECCIONES</a>
						</li>
						<li id=@yield('idc')>
							<a href=@yield('colaboradoreslink')>COLABORADORES</a>
						</li>
						<li id=@yield('idr')>
							<a href=@yield('revistalink')>REVISTA</a>
						</li>
						<li id=@yield('ido') class="otras">
							<a href=@yield('otraslink')>OTRAS PUBLICACIONES</a>
						</li>
						<li id=@yield('ide')>
							<a href=@yield('enlaceslink')>ENLACES</a>
							{{HTML::image('resources/backnav.png', '', array('id'=>'navb'))}}
						</li>
					</UL>

				</nav>
			</div>
		</div>
	</header>
	<div class="container" id="contenido">
		@section('contenido')
		@show
	</div>
	<div class="container">
		<footer>
			<div class="row">
				<div class="span21">
					Centro Financiero Latino, piso 12. Ofics 1, 2 y 3. Avenida Urdaneta. Ánimas a Plaza España. Caracas 1010. Venezuela - Apartados Postales 14.413 y 2.122
					 Teléfonos +58 212 561 6691 - Fax +58 212 564 5643
				</div>
				<div class="span1"><a href="#">{{HTML::image('resources/mail.png')}}</a></div>
				<div class="span1"><a href="#">{{HTML::image('resources/facebook.png')}}</a></div>
				<div class="span1"><a href="#">{{HTML::image('resources/twitter.png')}}</a></div>
			</div>
		</footer>
	</div>
</body>
</html>