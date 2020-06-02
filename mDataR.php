<?php
	include("con_db.php");
	mysql_select_db($bd,$conex) or die("Error conexion base de datos");
	$consult = mysql_query("SELECT *FROM empleado") or die("error al mostrar datos" .mysql_error);

	while ($tableData = mysql_fetch_array($consult)) {
		echo "Cargo: ".$tableData['Rolempleado']. "<br>Nombre: " .$tableData['Nombreempleado']. "<br>Apellido: " .$tableData['Apellidoempleado']. "<br>Numero de Contacto: " .$tableData['Celularempleado']. "<br>Cedula: " .$tableData['Cedulaempleado']."<br>Estado: ".$tableData['Estadoempleado']. "<br>Correo: ".$tableData['Email']."<br><br><br>";
	}
?>