<?php
		require_once("class.php");
		
		session_start();
		print_r($_SESSION);
		//die();
		
		$nuevo = new Comentarios();
		$rdo = $nuevo->nuevo_comentario($_SESSION['nom'],$_SESSION['email'],$_SESSION['asunto'],$_SESSION['mensaje']);
		print_r($rdo);
		echo "<br>";
		
		$rdo = $nuevo->list_fetch_assoc_comentario();
		echo $rdo;
		echo "<br>";
		
		$rdo = $nuevo->list_fetch_array_comentario();
		echo $rdo;
