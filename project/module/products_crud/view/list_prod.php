<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE PRODUCTOS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_products&op=create"><img src="view/img/anadir.png"></a>
            <a href="index.php?page=controller_products&op=deleteall"><img src="view/img/delete.png"></a></p>
    		
    		<table>
                <tr>
                    <td width=125><b>Product</b></th>
                    <td width=125><b>Brand</b></th>
                    <td width=125><b>Price</b></th>
                    <th width=350><b>Action</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">THERE AREN\'T PRODUCTS</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['product_name'] . '</td>';
                    	   	echo '<td width=125>'. $row['brand'] . '</td>';
                    	   	echo '<td width=125>'. $row['price'] . '</td>';
                            echo '<td width=350>';
                               
                            // print ("<div class='prod' id='".$row['user']."'>Read</div>");  //READ
                            // echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                            echo '<a class="Button_blue prod" id='.$row['product_code'].'>Modal</a>';
                    	   	echo '&nbsp;';

                    	   	echo '<a class="Button_blue" href="index.php?page=controller_products&op=read&id='.$row['product_code'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_products&op=update&id='.$row['product_code'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_products&op=delete&id='.$row['product_code'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>

<!-- modal window -->
<section id="prod_modal">
    <div id="details_prod" hidden>
        <div id="details">
            <div id="container">
                Product code: <div id="p_code"></div></br>
                Product name: <div id="p_name"></div></br>
                Brand: <div id="p_brand"></div></br>
                Manufacturer email: <div id="p_memail"></div></br>
                Price: <div id="p_price"></div></br>
                State of product: <div id="p_state"></div></br>
                Processor type <div id="p_processor"></div></br>
                Available until: <div id="p_availableuntil"></div></br>
            </div>
        </div>
    </div>
</section>