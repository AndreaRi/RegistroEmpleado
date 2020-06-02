<?php
	include("con_db.php");

	$result = mysql_select_db($bd,$conex);
	if (isset($_POST['registrar'])) {
		if (strlen($_POST['Rolempleado'])>= 1 && strlen($_POST['Nombreempleado'])>= 1  && strlen($_POST['Apellidoempleado']) >=1 && strlen($_POST['Celularempleado']) >=1 && strlen($_POST['Cedulaempleado']) >=1 && strlen($_POST['Estadoempleado']) >=1 && strlen($_POST['Email']) >=1 && strlen($_POST['Contrasena']) >=1 && strlen($_POST['ConfirmContrasena']) >=1) {
			if (strlen($_POST['Contrasena']) == strlen($_POST['ConfirmContrasena'])) {
			

				$rEM = trim($_POST['Rolempleado']);
				$namEm = trim($_POST['Nombreempleado']);
				$surnameEm = trim($_POST['Apellidoempleado']);
				$phoneEm = trim($_POST['Celularempleado']);
				$cedulaEm = trim($_POST['Cedulaempleado']);
				$stateEm = trim($_POST['Estadoempleado']);

				$imgEM = $_FILES['img']['name'];
				$target = "images/".basename($imgEM);

				$emailEm = trim($_POST['Email']);
				$passEm = trim($_POST['Contrasena']);
				$confpassEm = trim($_POST['ConfirmContrasena']);


		$consult =mysql_query("INSERT INTO empleado(Rolempleado,Nombreempleado,Apellidoempleado,
		Celularempleado,Cedulaempleado,Estadoempleado,img,Email,Contrasena,ConfirmContrasena) 
		VALUES ('$rEM','$namEm','$surnameEm','$phoneEm','$cedulaEm','$stateEm','$imgEM','$emailEm','$passEm','$confpassEm')");
				
				if ($result) {
	?>			<p>Inscripcion correcta</p>
	<?php 
				}
			}
	else{
?>
			<p>Algo inesperado a pasado</p>
<?php			
			}
		}else{
?> 				
			<p>completar todos los campos porfavor</p>
<?php			
			}
		}
?>
