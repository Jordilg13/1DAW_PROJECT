<?php
function validaLongitud($valor, $permiteVacio, $minimo, $maximo){
	$cantCar=strlen($valor);
	if(empty($valor)){
		if($permiteVacio) return TRUE;
		else return FALSE;
	}else{
		if($cantCar>=$minimo && $cantCar<=$maximo) return TRUE;
		else return FALSE;
	}
}

function validaCorreo($valor){
	if(eregi("([a-zA-Z0-9._-]{1,30})@([a-zA-Z0-9.-]{1,30})", $valor)) return TRUE;
	else return FALSE;
}

if($_POST){
	$error=0;
	foreach($_POST as $clave => $valor) 
		$$clave=addslashes(trim(utf8_decode($valor)));
	
	sleep(2);
	
	if(!validaLongitud($nombre, 0, 4, 50)) $error=1;
	if(!validaLongitud($empresa, 1, 4, 50)) $error=1;
	if(!validaLongitud($telefono, 1, 4, 50)) $error=1;
	if(!validaCorreo($correo)) $error=1;
	if(!validaLongitud($comentarios, 0, 5, 500)) $error=1;
	
	if($error==1){
		echo "Error";
	}else{
		echo "OK";
	}
}
?>