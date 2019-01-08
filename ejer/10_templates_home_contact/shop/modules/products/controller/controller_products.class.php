<?php
	echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";
	
	if (isset($_POST['SubmitProductos'])) {
		$_SESSION=$_POST;

		$callback="index.php?module=products&view=results_products";
		//die('<script>window.location.href="'.$callback .'";</script>');

		redirect($callback);
	}		
	include 'modules/products/view/create_products.php';
