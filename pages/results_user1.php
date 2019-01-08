<?php
	require_once("utils/class.php");
		
	session_start();
	//print_r($_SESSION);
	//die();
	
	$nuevo = new Products();
	$rdo = $nuevo->new_product($_SESSION['product'],
									$_SESSION['brand'],
									$_SESSION['m_email'],
									$_SESSION['state'],
									$_SESSION['prod_type'],
									implode(",",$_SESSION['type_proc']),
									$_SESSION['aviable_until_date']);
	echo "<br>---rdo---";
	echo($rdo);
	echo "<br>";
	
	$rdo = $nuevo->list_fetch_assoc_comentario();
	echo $rdo;
	echo "<br>";