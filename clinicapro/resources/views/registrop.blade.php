<!doctype html>
<html lang="es">
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="css/menult.css" />
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/admin.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
					<li><a href="#" class="title-menu">Registro</a><li>
				</div>
			</div>
			<div id="menu--desplegable1">
				<div class="contenedor-logos">
					<div class="logo">
						<li><a href="#" class="title-menu">Pacientes</a><li>
					</div>
				</div>
				<div class="contenedor-logos">
					<div class="logo">
						<li><a href="#" class="title-menu">Usuarios</a><li>
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
        <!-- inicio del contenido -->
        <div class="contenido">
            <div class="contenido--tabla">
            	<h3 class="contenido--titulo">
                    Registro de choque
                </h3>
                <br><br>
                <a href="#modalregistropaciente" type="button" class="btn-primario">+ Nuevo Paciente</a>	
                <br><br><br>
                <center>
                    <div class="tabla">
                        <table class="tabla--datos">
                            <thead class="titulo">
                                <tr>
                                    <th>#</th>
                                    <th>Nombres</th>
                                    <th>Celular</th>
                                    <th>DNI</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($paciente as $key => $paciente)
									<tr class="tabla--datos-fila">
										<th scope="row">{{$paciente->id_paciente}}</th>
										<td>{{$paciente->nombres}}</td>
										<td>{{$paciente->celular}}</td>
										<td>{{$paciente->dni}}	</td>
										<td>
											<a href="pacientes/actualizar/{{$paciente->id_paciente}}" type="button" class="btn-primario"> Edit</a>
	                                    	<button type="button">Eliminar</button>
	                                    </td>
									</tr>
								@endforeach
                            </tbody>
                        </table>
                    </div>
                </center>
            </div>
        </div>
        <!-- finb del contenido -->
        <!-- inicio del modal -->
        <div id="modalregistropaciente" class="modalDialog">
			<div>
				<form action="/registropaciente" method="POST">
					{{ csrf_field() }}
				<a href="#close" title="Close" class="close">X</a>
				<h2>Nuevo paciente</h2>
				<div class="iniciar--campo">
					<br>
					<h5>Nombres</h5>
					<input class="input--formulario" type="text" name="nombre" placeholder="Nombre del paciente">
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>Apellidos</h5>
					<input class="input--formulario" type="text" name="apellidos" placeholder="apellidos del paciente">
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>Celular</h5>
					<input class="input--formulario" type="text" name="celular" placeholder="Celular del paciente">
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>DNI</h5>
					<input class="input--formulario" type="text" name="dni" placeholder="DNI del paciente">
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>Fecha de nacimiento</h5>
					<input class="input--formulario" type="text" name="fenacimiento" placeholder="la fecha de nacimiento">
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>Peso</h5>
					<input class="input--formulario" type="text" name="peso" placeholder="Peso del paciente">
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>Talla</h5>
					<input class="input--formulario" type="text" name="talla" placeholder="Talla del paciente">
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>Direccion</h5>
					<input class="input--formulario" type="text" name="direccion" placeholder="Direccion del paciente">
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>Estado Civil</h5>
					<input class="input--formulario" type="text" name="estcivil" placeholder="Estado civil">
				</div>
				<br>
				<button type="submit" class="btn-primario">Agregar</button>
				<br>
				</form>
			</div>
		</div>
        <!-- fin del modal -->



	</body>
</html>