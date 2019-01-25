<? 
if ((isset($_GET['page'])) && ($_GET['page']==="controller_products")) {
    include("view/inc/top_page_products.php");
} else if ((isset($_GET['page'])) && ($_GET['page']==="controller_likes")){
    include("view/inc/top_page_likes.php");
} else {
    include("view/inc/top_page.php");
}
?>

<body>
	
<?
include("view/inc/menu.php"); 

include("view/inc/pages.php");

include("view/inc/footer.php");

include("view/inc/bottom_page.php"); ?>