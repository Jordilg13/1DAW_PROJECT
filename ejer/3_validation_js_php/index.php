<?php
	include("functions.inc.php");
	include("validate_users.php");
	session_start();

	$error = false;
	$error_nom = false;
	if (isset($_POST['alta'])) {
		$error_nom = EsRequerido($_POST['nombre']);
		if($error_nom){ 
			$error_nom = "El nombre no puede estar en blanco";
			$error = true;
		}
		if (!$error) {
			//debug($_POST);
			//exit();
			
			$mensaje="Su registro se ha efectuado correctamente para finalizar compruebe que ha recibido un correo de validacion y siga las instrucciones del correo";
			$_SESSION['user']=$_POST;
			$_SESSION['msje']=$mensaje;
			$callback = 'results_users.php';

			//header("Location:$callback");
			die('<script>top.location.href="'.$callback .'";</script>');
		}
	}
	include 'form_users.php';
