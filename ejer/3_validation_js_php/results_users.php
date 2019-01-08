<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo validación formulario</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<br><br><br><br>
	<?php
		include("functions.inc.php");
		session_start();
	
		echo $_SESSION['msje'];
		$user = $_SESSION['user'];
		debug($user);
		
	?>
	<a href="index.php">Volver</a>
</body>
</html>
