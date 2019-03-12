<?php
	if (!isset($_GET['page'])) {
		include("module/home/controller/controller_home.php");
	} else {
		switch ($_GET['page']) {
			case 'shop_controller':
				include("module/components/shop/controller/shop_controller.php");
				break;
			case 'login':
				include("module/login/view/view_login.php");
				break;
			case 'contact_us':
				include("module/contact/contactus.php");
				break;
			case 'cart_controller':
				include("module/cart/controller/cart_controller.php");
				break;
			case 'likes_controller':
				include("module/likes/controller/likes_controller.php");
				break;
			case 'list_prod':
				include("module/products_crud/view/list_prod.php");
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