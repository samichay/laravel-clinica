<!doctype html>
<html lang="es">
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="{{asset('css/menult.css')}}" />
        <link rel="stylesheet" href="{{asset('css/base.css')}}">
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
        <script type="text/javascript" src={{asset('boostrap.min.js')}}></script>
        <link href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
	</head>

	<body>
        <!-- inicio del menu lateral-->
		<div id="barra-lateral">
			<div id="logo-menu">
			</div>

			<div id="contenedor-logos-primero" class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">dns</i>
					<a href="#" class="title-menu">Inicio</a>
				</div>
			</div>

			<div class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">assignment_turned_in</i>
					<li><a href="paciente" class="title-menu">Registro</a><li>
				</div>
			</div>
			<div id="menu--desplegable1">
				<div class="contenedor-logos">
					<div class="logo">
						<li><a href="/paciente" class="title-menu">Pacientes</a><li>
					</div>
				</div>
				<div class="contenedor-logos">
					<div class="logo">
						<li><a href="/usuario" class="title-menu">Usuarios</a><li>
					</div>
				</div>
			</div>

			<div class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">local_library</i>
					<a href="#" class="title-menu">Consultas</a>
				</div>
			</div>

			<div class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">content_paste</i>
					<a href="#" class="title-menu">Reportes</a>
				</div>
			</div>

			<div class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">trending_up</i>
					<a href="#" class="title-menu">Estadisticas</a>
				</div>
			</div>

			<div class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">build</i>
					<a href="#" class="title-menu">Ayuda</a>	
				</div>
			</div>
		</div>
        <!-- fin del menu lateral -->
 
        <body>
        	<div class="contenido">
				<div class="contenido--tabla">
        		@yield('body')
        		</div>
        	</div>
	{{--    @section('personalizar')
        	<div>
        		<h1>ddd</h1>
        	</div>
        	@show  
        	Para modificar personalizadamente alguna vista  se hace con @section ... @show y @section e @endsection en la vista--}}
        </body>