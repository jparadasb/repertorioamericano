<!DOCTYPE html>
<head>
<meta charset="utf-8">
{{HTML::style('css/default.css');}}
{{HTML::style('css/style1.css');}}
{{HTML::style('css/style2.css');}}
@section('head')
@show
<title>Nuevo Repertorio Americano - @yield('titulo')</title>
</head>
<body>

<header>
	<div id="header">
		@section('gobheader')
		<div id="gobaner">{{HTML::image('resources/bannergob.png')}}</div>
		@show

@section('repheader')
		<div id="repbaner">
			<div id="titulo">{{HTML::image('resources/elnuevorepertorio.png')}}</div>
			<div id="enlaces">
				<a href="http://humanidadenred.org.ve">{{HTML::image('resources/rdiadhpng.png')}}</a>
				<a href="http://fba.org.ve">{{HTML::image('resources/ayacucho.png')}}</a>
			</div>
			@show
		</div>
	</header>

	<div id="cuerpo">
		<topnav>
			@section('barnav')
			<div id="topnav">
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
					<li id=@yield('ido')>
						<a href=@yield('otraslink')>OTRAS PUBLICACIONES</a>
					</li>
					<li id=@yield('ide')>
						<a href=@yield('enlaceslink')>ENLACES</a>
					</li>
				</UL>
			</div>
			@show
		</topnav>
		<content>
			@section('contenido')


	@show
		</content>
		<footer>
			<div id="footer">
				<p>
					Centro Financiero Latino, piso 12. Ofics 1, 2 y 3. Avenida Urdaneta. Ánimas a Plaza España. Caracas 1010. Venezuela - Apartados Postales 14.413 y 2.122 - Teléfonos +58 212 561 6691 - Fax +58 212 564 5643
				</p>
			</div>
		</div>
	</footer>

</body>
</head>