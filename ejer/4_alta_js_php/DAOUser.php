<?php
    //include connect.php
    
	class DAOUser{
		function nuevo_user($user){
			 $sql = "INSERT INTO mensajes(nombre, email, asunto, mensaje,"
                . " hora, fecha) VALUES ('$user[nombre]', '$user[email]', '$user[asunto]',"
                . " '$user[mensaje]', now(), now())";
            
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
		
	}