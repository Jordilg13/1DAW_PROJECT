<?php
	if (!isset($_GET['page'])) {
		include("pages/homepage.php");
	} else {
		switch ($_GET['page']) {
			case 'list_user':
				include("pages/list_user.php");
				break;
			case 'controller_products':
				include("pages/controller_products.php");
				break;
			case "services";
				include("pages/".$_GET['page'].".php");
				break;
			case "aboutus";
				include("pages/".$_GET['page'].".php");
				break;
			case "contactus";
				include("pages/".$_GET['page'].".php");
				break;
			case "404";
				include("view/inc/error".$_GET['page'].".php");
				break;
			case "503";
				include("view/inc/error".$_GET['page'].".php");
				break;
			default:
				include("pages/homepage.php");
				break;
		}
	}

	
?>