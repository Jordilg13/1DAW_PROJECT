<? 
// session_start();

include("view/php_functions/constants.php");
if ((isset($_GET['page'])) && ($_GET['page']==="controller_products")) {
    include("view/inc/top_page_products.php");
} else if ((isset($_GET['page'])) && ($_GET['page']==="likes_controller")){
    include("view/inc/top_page_likes.php");
} else if ((isset($_GET['page'])) && ($_GET['page']==="contact_us")){
    include("view/inc/top_page_contact.php");
}else if ((isset($_GET['page'])) && ($_GET['page']==="shop_controller")){
    include("view/inc/top_page_shop.php");
} else {
    include("view/inc/top_page.php");
}
?>
	
<?
include("view/inc/menu.php"); 

include("view/inc/pages.php");

include("view/inc/footer.php"); 

if ((isset($_GET['page'])) && ($_GET['page']==="controller_products")) {
    include("view/inc/bottom_page_crud.php");
} else if ((isset($_GET['page'])) && ($_GET['page']==="likes_controller")) { 
    include("view/inc/bottom_page_likes.php");
} else if ((!isset($_GET['page']))) { 
    include("view/inc/bottom_page_home.php");
} else {
    include("view/inc/bottom_page.php");
}
?>