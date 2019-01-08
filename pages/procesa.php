<?php
		require_once("utils/class.php");
		
		session_start();
		//print_r($_SESSION);
		//die();
		
		$nuevo = new Products();
		$rdo = $nuevo->new_product($_SESSION['data']['product'],
										$_SESSION['data']['brand'],
										$_SESSION['data']['m_email'],
										$_SESSION['data']['state'],
										$_SESSION['data']['prod_type'],
										implode(",",$_SESSION['data']['type_proc']),
										$_SESSION['data']['aviable_until_date']);
		echo "<br>---rdo---";
		echo($rdo);
		echo "<br>";
		
		$rdo = $nuevo->list_fetch_assoc_comentario();
		echo $rdo;
		echo "<br>";
		
		// $rdo = $nuevo->list_fetch_array_comentario();
		// echo $rdo;
