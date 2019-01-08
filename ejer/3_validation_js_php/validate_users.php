<?php
	function EsRequerido($texto){
		if($texto === "")
			return true;
		else 
			return false;
	}
	
	function EsTexto($texto){
		$reg="^[A-Za-z]+[A-Za-z0-9]*$";
		return ereg($reg,$texto);
	}
	
	function EsNumerico($texto){ 
		$reg = "^[0-9]+$";
		return ereg($reg, $texto); 
	}
