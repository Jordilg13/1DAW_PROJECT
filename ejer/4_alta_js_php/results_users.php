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
		//include DAOUser.php
		session_start();
	
		
		$user = $_SESSION['user'];
		//debug($user);
		
		$daouser = new DAOUser();
		$rdo = $daouser->nuevo_user($user);
		if($rdo){
			echo $_SESSION['msje'];
		}else{
			echo 'error';
		}

	?>
	<a href="index.php">Volver</a>
</body>
</html>
