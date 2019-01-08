<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo validación formulario</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="validate_users.js"></script>
</head>
<body>
	<h1> Alta Usuario </h1>
	<form method="post" name="formusers" id="formusers" onsubmit="return validate_user();" action="index.php">
		<p>
			<label for="usuario">usuario</label>
			<input name="usuario" id="usuario" type="text" placeholder="usuario" value="" />
			<span id="e_usuario" class="styerror"></span>
		</p>
        <p>
			<label for="nombre">nombre</label>
			<input name="nombre" id="nombre" type="text" placeholder="nombre" value="" />
			<span id="e_nombre" class="styerror"></span>
			<?php
				if ($error_nom != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_nom . "</SPAN>");
			?>
		</p>
        <p>
			<label for="apellidos">apellidos</label>
			<input name="apellidos" id="apellidos" type="text" placeholder="apellidos" value="" />
			<span id="e_apellidos" class="styerror"></span>
		</p>
        <p>
			<label for="email">email</label>
			<input name="email" id="email" type="text" placeholder="email" value="" />
			<span id="e_email" class="styerror"></span>
		</p>
        <p>
			<label for="password">password</label>
			<input name="password" id="password" type="password" placeholder="contrasenya" value="" />
			<span id="e_password" class="styerror"></span>
		</p>
        <p>
			<label for="password2">password2</label>
			<input name="password2" id="password2" type="password"  placeholder="repite contrasenya" value="" />
			<span id="e_password2" class="styerror"></span>
		</p>
		<p>
			<label for="date_birthday">date_birthday</label>
			<input id="date_birthday" type="text" name="date_birthday" readonly="readonly">
			<span id="e_date_birthday" class="styerror"></span>
		</p>
		<input name="alta" type="submit" value="Alta"/>
	</form>
</body>
</html>
