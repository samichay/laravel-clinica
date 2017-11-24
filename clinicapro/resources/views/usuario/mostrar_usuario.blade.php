<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Aqui se mostraran los datos del usuario {{$id}}</h1>
	<ul>
			<li> 
				<strong>Nombre Completo: </strong>{{ $datos_usuario->nombres}} . {{ $datos_usuario->apellidos}} 
			</li>
			<br>
			<li> 
				<strong>Tipo de usuario:</strong> {{ $datos_usuario->tipo_usuario}}
			</li>
				
	</ul>
</body>
</html>