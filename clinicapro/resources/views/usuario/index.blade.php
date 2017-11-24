<!DOCTYPE html>
<html>
<head>
	<title>Pagina pa los usuarios - Samichay...</title>
</head>
<body>

<!--Titutlo pzzz -->
	<h1> {{ $titulo }} Samichay</h1>
	<hr>
<!-- Crear lista con elementos del aa funcion e muestra todo en texto plano evita ejecucion js -->
	
	<table border='1'>
		<tr>
			<td><strong>Nombre</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>Nick</strong></td>
			<td><strong>Tipo de Usuario</strong></td>
		</tr>

		@foreach($usuarios as $usuario)
		<tr>
			<td>{{$usuario->nombres}}</td>
			<td>{{$usuario->apellidos}}</td>
			<td>{{$usuario->nick}}</td>
			<td>{{$usuario->tipo_usuario}}</td>
		</tr>
		@endforeach		

	</table>



</body>
</html>