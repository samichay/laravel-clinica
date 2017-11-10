<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>loginn</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="b-login">
	<div class="iniciar">
		<form action="login_submit" method="POST" accept-charset="utf-8">
			<div class="iniciar--title">
				<h2>SIEMPRE MUJER</h2>
				<span>Consultorio obstetrico</span>
			</div>	
			<br>
			<div class="iniciar--campo">
				<h5>Nombre</h5>
				<input class="iniciar--input" type="text" name="correo" placeholder="tu-correo@gmail.com">
			</div>
			<br>
			<div class="iniciar--campo">
				<h5>Contraseña</h5>
				<input class="iniciar--input" type="password" name="contraseña" placeholder="********">
			</div>
			<br>
			<input class="btn-principal" type="submit" name="enviar" value="iniciar">
		</form>
	</div>
</body>
</html>