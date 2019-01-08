<?php 
	require('languages.php'); 

	$lang = null;
	if ( isset($_GET['lang']) ){
		$lang = $_GET['lang'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo multilenguaje en PHP</title>
	<meta name="robots" content="noindex">
</head>
<body>
	<p>Cambiar idioma: <a href="index.php?lang=es">ESP</a> - <a href="index.php">ENG</a> </p>
	<nav>
		<ul>
			<li> <a href="#"><?php echo __('About us', $lang) ?></a> </li>
			<li> <a href="#"><?php echo __('What we do?', $lang) ?></a> </li>
			<li> <a href="#"><?php echo __('Where we are?', $lang) ?></a> </li>
			<li> <a href="#"><?php echo __('Contact', $lang) ?></a> </li>
		</ul>
	</nav>
</body>
</html>