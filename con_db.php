<?php
	error_reporting(5);
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bd = "usercreator";
	$conex =mysql_connect($host,$user,$pass);

	 if (!$conex) {
		echo "Error al conectar la base de datos";
	}
?>