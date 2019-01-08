<form action="<?php echo "index.php?page=controller_users" ?>" method="post" name="form" id="signupForm">
		<?php
		if(isset($error)){
			print ("<BR><span CLASS='styerror' color: #ff0000;>" . "* ".$error . "</span><br/>");
		}?>

		<p>
			<label for="usuario">usuario</label>
			<input name="usuario" id="usuario" type="text" placeholder="usuario" value="<?php echo $_POST?$_POST['usuario']:""; ?>" />
		</p>
        <p>
			<label for="nombre">nombre</label>
			<input name="nombre" id="nombre" type="text" placeholder="nombre" value="<?php echo $_POST?$_POST['nombre']:""; ?>" />
		</p>
        <p>
			<label for="apellidos">apellidos</label>
			<input name="apellidos" id="apellidos" type="text" placeholder="apellidos" value="<?php echo $_POST?$_POST['apellidos']:""; ?>" />
		</p>
        <p>
			<label for="email">email</label>
			<input name="email" id="email" type="text" placeholder="email" value="<?php echo $_POST?$_POST['email']:""; ?>" />
		</p>
        <p>
			<label for="password">password</label>
			<input name="password" id="password" type="password" placeholder="contrasenya" value="<?php echo $_POST?$_POST['password']:""; ?>" />
		</p>
        <p>
			<label for="password2">password2</label>
			<input name="password2" id="password2" type="password"  placeholder="repite contrasenya" value="<?php echo $_POST?$_POST['password2']:""; ?>" />
		</p>
		<p>
			<label for="date_birthday">date_birthday</label>
			<input id="date_birthday" type="text" name="date_birthday"><div id="result"></div>
		</p>
		<input name="Submit" type="submit" value="Registrar" />
	</form>
</body>
</html>
