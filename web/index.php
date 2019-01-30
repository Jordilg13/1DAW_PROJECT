<? 
include("view/php_functions/constants.php");
if ((isset($_GET['page'])) && ($_GET['page']==="controller_products")) {
    include("view/inc/top_page_products.php");
} else if ((isset($_GET['page'])) && ($_GET['page']==="likes_controller")){
    include("view/inc/top_page_likes.php");
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
} else {
    include("view/inc/bottom_page.php");
}
?>