<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<body> -->
		<?php
		
		$_SESSION['result'] = true;
		die('<script>top.location.href="index.php?page=controller_products";</script>');

    	die;
		// function validate_php(){
			// include "debug.php";
	
			// $errors=array();
			// session_start();

			
			// $_SESSION['result'] = false;
			// if (isset($_POST['Submit'])) {
			// 	if ($_POST['product'] == '') {
			// 		$errors[0] = '<span class="error">Input the name of the product.</span>';
			// 		// echo "error0";
			// 	} elseif ($_POST['product'] == '') {
			// 		$errors[1] = '<span class="error">Input the brand of the product.</span>';
			// 		// echo "error1";
			// 	} elseif ($_POST['m_email'] == '') {
			// 		$errors[2] = '<span class="error">Input the email of the manufacturer.</span>';
			// 		// echo "error2";
			// 	} elseif ($_POST['state'] == 'Other') {
			// 		$errors[3] = '<span class="error">Choose one option.</span>';
			// 		// echo "error3";
			// 	} elseif ($_POST['prod_type'] == '') {
			// 		$errors[4] = '<span class="error">Select one option.</span>';
			// 		// echo "error4";
			// 	}  elseif (empty($_POST['type_proc'])) {
			// 		$errors[5] = '<span class="error">Choose one option.</span>';
			// 		// echo "error5";
			// 	} elseif ($_POST['aviable_until_date'] == '') {
			// 		$errors[6] = '<span class="error">Choose one option.</span>';
			// 		// echo "error6";
			// 	}  else {
			// 		$_SESSION['result'] = true;
			// 	// 	$_SESSION = $_POST;
			// 	// 	print_r($_SESSION);
			// 	// 	$url = "procesa.php";
			// 	// 	die('<script>window.location.href="'.$url.'";</script>');
			// 	}
				
				
			// 	$url = "index.php";
			// 	die('<script>window.location.href="'.$url.'";</script>');
				
			// }
		// }
		?>
		
	<!-- </body>
</html> -->
