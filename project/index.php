<?php
include "debug.php";

if ((isset($_GET['page'])) && ($_GET['page']==="controller_products")) {
    include("view/inc/top_page_products.php");
} else {
    include("view/inc/top_page.php");
}
session_start();
?>

<div id="wrapper">		
    <div id="header">    	
    	<?php include("view/inc/header.php"); ?>        
    </div>  
    <div id="menu">
    		<?php include("view/inc/menu.php"); ?>
	    </div>	
    <div id="contenido">
    	<?php 	
		include("view/inc/pages.php"); ?>        
        <br style="clear:both;" />
    </div>
    <div id="footer">   	   
	    <?php include("view/inc/footer.php"); ?>        
    </div>
</div>

<?php
//include("pages/products_form.php");
?>
<p>&nbsp; </p>
</body>
</html>