<?php
    //include("model/connect.php");
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/9_lang_bootstrap_modal_datatable/3_MVC_CRUD_modal/';
    include($path . "model/connect.php");
    
	class DAOUser{
		function insert_user($datos){
			$user=$datos[usuario];
        	$passwd=$datos[pass];
        	$name=$datos[nombre];
        	$dni=$datos[DNI];
        	$sex=$datos[sexo];
        	$birthdate=$datos[fecha_nacimiento];
        	$age=$datos[edad];
        	$country=$datos[pais];
        	foreach ($datos[idioma] as $indice) {
        	    $language=$language."$indice:";
        	}
        	$comment=$datos[observaciones];
        	foreach ($datos[aficion] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}
        	$sql = " INSERT INTO usuario (user, pass, name, dni, sex, birthdate, age, country, language, comment, hobby)"
        		. " VALUES ('$user', '$passwd', '$name', '$dni', '$sex', '$birthdate', '$age', '$country', '$language', '$comment', '$hobby')";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){
			$sql = "SELECT * FROM usuario ORDER BY user ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		
		function select_user($user){
			$sql = "SELECT * FROM usuario WHERE user='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_user($datos){
			$user=$datos[usuario];
        	$passwd=$datos[pass];
        	$name=$datos[nombre];
        	$dni=$datos[DNI];
        	$sex=$datos[sexo];
        	$birthdate=$datos[fecha_nacimiento];
        	$age=$datos[edad];
        	$country=$datos[pais];
        	foreach ($datos[idioma] as $indice) {
        	    $language=$language."$indice:";
        	}
        	$comment=$datos[observaciones];
        	foreach ($datos[aficion] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}
        	
        	$sql = " UPDATE usuario SET pass='$passwd', name='$name', dni='$dni', sex='$sex', birthdate='$birthdate', age='$age',"
        		. " country='$country', language='$language', comment='$comment', hobby='$hobby' WHERE user='$user'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($user){
			$sql = "DELETE FROM usuario WHERE user='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}