<!DOCTYPE html>
<html>
<head>
	<title>userCreation</title>
	<link rel="stylesheet" type="text/css" href="css/style-userCreation.css">
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" class="userCreation" enctype="multipart/form-data">
	
		<h4>Registro de Empleado</h4>
		<select class="config" name="Rolempleado" id="Rolempleado">
			<option selected disabled>--Seleccione Cargo Empleado--</option>
			<option class="config">Enfermera</option>
			<option class="config">Secretaria</option>
			<option class="config">Doctor</option>
		</select>
		<input class="config"  type="text" name="Nombreempleado"  placeholder="Digite su nombre">
		<input class="config" type="text" name="Apellidoempleado"  placeholder="Digite sus apellidos">
		<input class="config" type="tel" name="Celularempleado"  maxlength="10" placeholder="Digite telefono de contacto">
		<input class="config" type="text" name="Cedulaempleado" maxlength="10" placeholder="Digite su numero de identificacion">
		<label for="">Estado del empleado</label>
		<input class="estado" type="radio" name="Estadoempleado" value="Activo">Activo
		<input class="estado" type="radio" name="Estadoempleado" value="Inactivo">Inactivo
		<input class="img" type="file" name="img">
		<input class="config" type="email" name="Email"  placeholder="Digite su correo">
		<input class="config" type="password" name="Contrasena" placeholder="Digite su contraseña">
		<input class="config" type="password" name="ConfirmContrasena"  placeholder="Confirme su contraseña">
		<p> De acuerdo con <a href="#">Terminos y Condiciones Odontocenter </a>
		<input class="btn" type="submit" value="Registrar" name="registrar">
		<a href="#">Ya tengo cuenta de Odontocenter</a></p>

	</form>
</body>
	<?php
		include("registros.php");
	?>
	
</html>