<?php
	class Conectar{
		public static function con(){
			$host = getenv('localhost');  
    		$user = "root";                     //Your Cloud 9 username
    		//$user = getenv('C9_USER');
    		$pass = "";                             //Remember, there is NO password!
    		$db = "comentarios";                      //Your database name you want to connect to
    		$port = 3306;                           //The port #. It is always 3306
    		$tabla="products";
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}
	class Comentarios{
		function nuevo_comentario($nombre,$email,$asunto,$mensaje){
			 $sql = "INSERT INTO mensajes(nombre, email, asunto, mensaje,"
                . " hora, fecha) VALUES ('$nombre', '$email', '$asunto',"
                . " '$mensaje', now(), now())";
            
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
		function list_fetch_assoc_comentario(){
			$cad="";
			$sql = "select * from mensajes";
                
			$conexion = Conectar::con();
			
			$result = mysqli_query($conexion, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
        		$cad .= "Nombre: " . $row['nombre'] . " Email: " . $row['email']. "<br>";
        		$cad .= "Asunto: " . $row['asunto'] . " Msje: " . $row['mensaje']. "<br>";
    		}
    	
            Conectar::close($conexion);
			return $cad;
		}
		function list_fetch_array_comentario(){
			$cad="";
			$sql = "select * from mensajes";
                
			$conexion = Conectar::con();
			
			$result = mysqli_query($conexion, $sql);
			while ($row = mysqli_fetch_array($result)) {
        		$cad .= "Nombre: " . $row[1] . " Email: " . $row[2]. "<br>";
        		$cad .= "Asunto: " . $row[3] . " Msje: " . $row[4]. "<br>";
    		}
    	
            Conectar::close($conexion);
			return $cad;
		}
	}
?>
