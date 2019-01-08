<?php
	include("db.php");
	
	if(isset($_POST['idPais'])) {
		$ciudades = array();
		$sql = "SELECT idciudad, nombre 
				FROM ciudades 
				WHERE idpais = ".$_POST['idPais']; 

		$db = obtenerConexion();
		$result = ejecutarQuery($db, $sql);
		while($row = $result->fetch_assoc()){
			$ciudad = new ciudad($row['idciudad'], $row['nombre']);
		    array_push($ciudades, $ciudad);
		}
		cerrarConexion($db, $result);
		echo json_encode($ciudades);
	}
	
	class ciudad {
		public $id;
		public $nombre;

		function __construct($id, $nombre) {
			$this->id = $id;
			$this->nombre = $nombre;
		}
	}
?>