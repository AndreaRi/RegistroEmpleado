<html>
<head>
	<title>Cedula</title>
	<link rel="stylesheet" type="text/css" href="css/style-userCedula.css">
</head>
<body>
	<form class="userCedula" action="mData.php" method="POST">
		
			

<?php
	include("con_db.php");
	$cedula = $_POST['userCedula'];
	mysql_select_db($bd,$conex) or die("Error conexion base de datos");
	$consult = mysql_query("SELECT *FROM empleado WHERE Cedulaempleado = $cedula");

	echo "<br>";

	while ($tableData = mysql_fetch_array($consult)) {

		echo "
				<div class='boxCenter'>
				<div class='img'>
				<img src='images/".$tableData['img']." alt='img not found'>

				<div class='box'>
					<div class='name'>
						<span class='text'>Nombre:".$tableData['Nombreempleado']."</span>
					</div>
					<div class='surname'>Apellidos: ".$tableData['Apellidoempleado']."</div>
				</div>
				<div class='box'>
					<div class='phone'>Numero de contacto: ".$tableData['Celularempleado']."</div>
					<div class='cedula'>Documento de identidad: ".$tableData['Cedulaempleado']."</div>
				</div>
				<div class='box'>
					<div class='cargo'>Cargo: ".$tableData['Rolempleado']."</div>
					<div class='estado'>Estado: ".$tableData['Estadoempleado']."</div>
				</div>	
			</div>";
	}

?>
	</form>
</body>
</html>