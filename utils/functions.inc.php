<?php
	function validate_user(){
		$error='';
		$filtro = array(
			'usuario' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{4,20}$/')
			),
			
			'nombre' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
			
			'apellidos' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^[a-zA-Z0-9]*$/')
			),
			
			'email' => array(
				'filter'=>FILTER_CALLBACK,
				'options'=>'validatemail'
			),
			
			'password' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{6,12}$/')
			),
			
			'date_birthday' => array(
				'filter' => FILTER_VALIDATE_REGEXP,
				'options' => array('regexp' => '/\d{2}.\d{2}.\d{4}$/')
			)
		);
		
		$resultado=filter_input_array(INPUT_POST,$filtro);
		if(!$resultado['usuario']){
			$error='Usuario debe tener de 4 a 20 caracteres';
		}elseif(!$resultado['nombre']){
			$error='Nombre debe tener de 3 a 30 caracteres';
		}elseif(!$resultado['apellidos']){
			$error='Apellidos debe tener de 4 a 120 caracteres';
		}elseif(!$resultado['email']){
			$error='El email debe contener de 5 a 50 caracteres y debe ser un email valido';
		}elseif(!$resultado['password'] || $resultado['password']!=$_POST['password2'] ){
			$error='Password debe tener de 6 a 12 caracteres y las dos contrasenyas deben ser iguales';
		}elseif(!$resultado['date_birthday']){
			$error='Formato fecha dd/mm/yy';	
		}else{
			 return $return=array('resultado'=>true,'error'=>$error,'datos'=>$resultado);
		};
		return $return=array('resultado'=>false , 'error'=>$error,'datos'=>$resultado);
	};

	function validatemail($email){
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				if(filter_var($email, FILTER_VALIDATE_REGEXP, array('options' => array('regexp'=> '/^.{5,50}$/')))){
					return $email;
				}
			}
			return false;
	}
	
	function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
	}
?>
