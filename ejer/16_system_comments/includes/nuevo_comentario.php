<?php
	session_start();
	require_once("comentarios.php");

	$comment = new comentarios(getenv('IP'), "yomogan", "", "comments");
	if(isset($_POST["comentario"]) || isset($_POST["usuario"])){ 
		$comentario = $comment->bbcode($comment->no_inyeccion($_POST["comentario"]));
		if(!$comentario == ""){ 
			$conexion = $comment->sql_connect();
			
			$rdo = mysqli_query($conexion, "INSERT INTO coments (usuario, comentario, fecha, ip) VALUES ('".$comment->no_inyeccion($_POST["usuario"])."', '".$comentario."', '".date("j-n-Y")."', '".$_SERVER["REMOTE_ADDR"]."')");
			$comment->sql_close();
			echo $rdo;
		}
	}
?>