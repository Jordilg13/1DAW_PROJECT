<form method="post" name="formusers" id="formusers" onsubmit="return validate_user();" action="index.php?page=controller_users">
		<?php
		if(isset($error)){
			print ("<BR><span CLASS='styerror'>" . "* ".$error . "</span><br/>");
		}?>

		<p>
			<label for="usuario">usuario</label>
			<input name="usuario" id="usuario" type="text" placeholder="usuario" value="<?php echo $_POST?$_POST['usuario']:""; ?>" />
			<span id="e_usuario" class="styerror"></span>
		</p>
        <p>
			<label for="nombre">nombre</label>
			<input name="nombre" id="nombre" type="text" placeholder="nombre" value="<?php echo $_POST?$_POST['nombre']:""; ?>" />
			<span id="e_nombre" class="styerror"></span>
		</p>
        <p>
			<label for="apellidos">apellidos</label>
			<input name="apellidos" id="apellidos" type="text" placeholder="apellidos" value="<?php echo $_POST?$_POST['apellidos']:""; ?>" />
			<span id="e_apellidos" class="styerror"></span>
		</p>
        <p>
			<label for="email">email</label>
			<input name="email" id="email" type="text" placeholder="email" value="<?php echo $_POST?$_POST['email']:""; ?>" />
			<span id="e_email" class="styerror"></span>
		</p>
        <p>
			<label for="password">password</label>
			<input name="password" id="password" type="password" placeholder="contrasenya" value="<?php echo $_POST?$_POST['password']:""; ?>" />
			<span id="e_password" class="styerror"></span>
		</p>
        <p>
			<label for="password2">password2</label>
			<input name="password2" id="password2" type="password"  placeholder="repite contrasenya" value="<?php echo $_POST?$_POST['password2']:""; ?>" />
			<span id="e_password2" class="styerror"></span>
		</p>
		<p>
			<label for="date_birthday">date_birthday</label>
			<input id="date_birthday" type="text" name="date_birthday" readonly="readonly">
			<span id="e_date_birthday" class="styerror"></span>
		</p>
		<input name="Submit" type="submit" value="Registrar"/>
	</form>
	