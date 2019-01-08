<?php
include "debug.php";

if ((isset($_GET['page'])) && ($_GET['page']==="controller_products")) {
    include("includes/top_page_products.php");
} else {
    include("includes/top_page.php");
}
session_start();
?>

<div id="wrapper">		
    <div id="header">    	
    	<?php include("includes/header.php"); ?>        
    </div>  
    <div id="menu">
    		<?php include("includes/menu.php"); ?>
	    </div>	
    <div id="contenido">
    	<?php 	
		include("includes/pages.php"); ?>        
        <br style="clear:both;" />
    </div>
    <div id="footer">   	   
	    <?php include("includes/footer.php"); ?>        
    </div>
</div>

<?php
//include("pages/products_form.php");
?>
<p>&nbsp; </p>
</body>
</html>