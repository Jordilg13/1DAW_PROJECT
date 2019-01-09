<?php
	if (!isset($_GET['page'])) {
		include("module/home/controller/controller_home.php");
	} else {
		switch ($_GET['page']) {
			case 'list_user':
				include("module/products_crud/view/list_user.php");
				break;
			case 'controller_products':
				include("module/products_crud/controller/controller_products.php");
				break;
			case "services";
				include("module/".$_GET['page']."/".$_GET['page'].".php");
				break;
			case "aboutus";
				include("module/".$_GET['page']."/".$_GET['page'].".php");
				break;
			case "contactus";
				include("module/contact/".$_GET['page'].".php");
				break;
			case "404";
				include("view/inc/error".$_GET['page'].".php");
				break;
			case "503";
				include("view/inc/error".$_GET['page'].".php");
				break;
			default:
				include("view/inc/error404.php");
				break;
		}
	}

	
?>