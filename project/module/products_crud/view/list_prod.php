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