<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<body>
		<p>Datos introducidos:</p>
		<?php
			foreach ($_POST as $indice => $valor) 
				echo "$indice: $valor<br>";
			
			echo "<br>GUSTOS:<br>";
			$gustos = $_POST["gustos"];
			foreach ($gustos as $indice => $valor) 
				echo "$indice: $valor<br>";
		?>
	</body>
</html>
