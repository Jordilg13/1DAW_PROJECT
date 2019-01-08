<?php 
	$usernames=array('admin','root','oscargarcia','user','usuario','pedro','maria');
	$user=$_GET['user'];
	if(in_array($user,$usernames)) 
	   echo "<img src='error.png' width='20' height='20'/> El usuario ya existe!";	
	else 
	  echo "<img src='ok.png' width='16' height='16' /> Puedes utilizar este nombre de usuario!";
?>