<html>
<head>
	<title>Selector dinamico Ajax provincias y localidades espanyolas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<script src="AjaxCode.js"></script>
</head>
<body>
	Selecciona la provincia:
	<select name="provinciaList" id="provinciaList" onChange="return provinciaListOnChange()">
		<option >Selecciona la provincia ...</option>		
		<?php
			$xml = simplexml_load_file('provinciasypoblaciones.xml');
			$result = $xml->xpath("/lista/provincia/nombre | /lista/provincia/@id");
			for ($i=0;$i<count($result);$i+=2) {
				$e=$i+1;
				$provincia=UTF8_DECODE($result[$e]);
				echo("<option value='$result[$i]'>$provincia</option>");
			}
		?>
	</select>
	<br>
	<br>
	Selecciona la localidad:
		<select name="localidadList" id="localidadList" >
			<option >Selecciona antes la provincia</option>
		</select> 
		<span id="advice"> </span>
</body>
</html>