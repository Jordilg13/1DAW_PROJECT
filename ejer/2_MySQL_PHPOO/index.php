<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Formulario con un botón especial</title>
	<link rel="stylesheet" href="estilos.css" type="text/css" />
	<link rel="stylesheet" href="jqueryUI/css/ui-lightness/jquery-ui-1.8.20.custom.css" type="text/css" />
	<script type="text/javascript" src="jqueryUI/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script type="text/javascript" src="jqueryUI/js/jquery-ui-1.8.20.custom.min.js"></script>
	<script type="text/javascript" src="funciones.js"></script>
</head>
<body>
	<?php
	session_start();
	if(isset($_POST['grabar']) and $_POST['grabar'] == 'si'){
			$error = array(); // declaramos un array para almacenar los errores
			if($_POST['nom'] == ''){
				$error[1] = '<span class="error">Ingrese su nombre</span>';
			}else if(strlen($_POST['nom']) < 2){
				$error[1] = '<span class="error">Mínimo 2 carácteres para el nombre</span>';
			}else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
				$error[2] = '<span class="error">Ingrese un email correcto</span>';
			}else if($_POST['asunto'] == ''){
				$error[3] = '<span class="error">Ingrese un asunto</span>';
			}else if($_POST['mensaje'] == ''){
				$error[4] = '<span class="error">Ingrese un mensaje</span>';
			}else if(strlen($_POST['mensaje']) < 20){
				$error[4] = '<span class="error">Mínimo 20 carácteres para el nombre</span>';
			}else{
				$_SESSION = $_POST;	
				//print_r($_SESSION);
				//die();
				$url = "procesa.php";
				die('<script>window.location.href="'.$url.'";</script>');
		}
	}
	?>
	<div class="formulario">
	<form name="form" class="contacto" action="" method="post">
		<div><label>Tu Nombre:</label><input type='text' name="nom" class="nom" value="<?php @$_POST['nom'] ?>" ><?php echo @$error[1] ?></div>
		<div><label>Tu Email:</label><input type='text' name="email"  class="email" value="<?php @$_POST['email'] ?>"><?php echo @$error[2] ?></div>
		<div><label>Asunto:</label><input type='text' name="asunto"  class="asunto" value="<?php @$_POST['asunto'] ?>"><?php echo @$error[3] ?></div>
		
		<input type="hidden" name="grabar" value="si" />
				
		<div><label>Mensaje:</label><textarea rows='6' name="mensaje" class="mensaje"><?php @$_POST['mensaje'] ?></textarea><?php echo @$error[4] ?></div>
				
		<div class="demo"><input type='submit'  name="boton" class="boton" value='Envia Mensaje'></div>
	</form>
	</div>
</body>
</html>
