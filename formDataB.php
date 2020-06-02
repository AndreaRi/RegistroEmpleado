<?php
	include("con_db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>buscar datos</title>
	<link rel="stylesheet" type="text/css" href="css/style-userSearch.css">
</head>
<body>
	<form class="userCedula" action="mData.php" method="POST">
		Documento de Identidad del Empleado:<input class="config" maxlength="10" type="text" name="userCedula" placeholder="documento de identidad">
		<input class="btn" type="submit" value="code">
	</form>
	
</body>
</html>