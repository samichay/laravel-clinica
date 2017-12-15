<!doctype html>
<html lang="es">
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="{{asset('css/menult.css')}}" >
        <link rel="stylesheet" href="{{asset('css/base.css')}}">
       <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('css/admin.css')}}">
		<link rel="stylesheet" href="{{asset('css/header.css')}}">
  		<link rel="stylesheet" type="text/css" href="{{asset('Ionicons\css\ionicons.min.css')}}">

        <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
		<script type="text/javascript" src={{asset('js/boostrap.min.js')}}></script>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src={{asset('js/header.js')}}></script>
        <link href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">

	</head>

	<body>
		<!-- inicio header-->
		<header class="header">
			<div class="wrapper">
				<div class="usuariogc">Bienvenido: {{ Auth::user()->nick }}</div>
				<nav>
					<a href="{{ url('/logout') }}">Salir</a>
				</nav>
			</div>
		</header>
		<!-- fin header-->
		
        <!-- inicio del menu lateral-->
        <script src="js/main.js"></script>
		<div id="barra-lateral">
			<div id="logo-menu">
			</div>

			<div id="contenedor-logos-primero" class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">dns</i>
					<a href="/inicio" class="title-menu">Inicio</a>
				</div>
			</div>

			<div class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">assignment_turned_in</i>
					<li><a href="#" class="title-menu" onclick="Desplegar()">Registro</a><li>
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
				<div class="contenedor-logos">
					<div class="logo">
						<li><a href="/insumo" class="title-menu">Insumo</a><li>
					</div>
				</div>
			</div>
			<div class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">local_library</i>
					<a href="/atencion" class="title-menu">Atencion</a>
				</div>
			</div>

			<div id="menu--desplegable2">
				<div class="contenedor-logos">
					<div class="logo">
						<li><a href="/atencion" class="title-menu">Generales</a><li>
					</div>
				</div>
				
{{-- 				<div class="contenedor-logos">
					<div class="logo">
						<li><a href="/papanicolao" class="title-menu">Papanicolao</a><li>
					</div>
				</div> --}}
			</div>


			<div class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">content_paste</i>
					<a href="#" class="title-menu" onclick="Desplegar3()">Reportes</a>
				</div>
			</div>
			<div id="menu--desplegable3">
				<div class="contenedor-logos">
					<div class="logo">
						<li><a href="/reportes" class="title-menu">General</a><li>
					</div>
				</div>
				
			</div>
			{{-- <div class="contenedor-logos">
				<div class="logo">
					<i class="material-icons">build</i>
					<a href="#" class="title-menu">Ayuda</a>	
				</div>
			</div> --}}
		</div>
		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

	</body>
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
        	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
			<script type="text/javascript">
			      $("#id_paciente").select2({
			           placeholder: "Escoja un paciente",
			           allowClear: true
			        });
			</script>
			<script type="text/javascript">
			function veroferta(sel){
			switch (sel) {
			  case '1': //Papanicolao
				document.getElementById('formpapanicolao').style.display = 'inline';
				document.getElementById('formpfamilia').style.display = 'none';
				document.getElementById('formotros').style.display = 'none';
				break;
			  case '2': //Otros
				document.getElementById('formpapanicolao').style.display = 'none';
				document.getElementById('formpfamilia').style.display = 'none';
				document.getElementById('formotros').style.display = 'inline';
			    break;
			  case '3': //PFamiliar
				document.getElementById('formpapanicolao').style.display = 'none';
				document.getElementById('formpfamilia').style.display = 'inline';
				document.getElementById('formotros').style.display = 'none';
		    	break;
			  default:
			    break;
			}

			}
			</script>

        </body>