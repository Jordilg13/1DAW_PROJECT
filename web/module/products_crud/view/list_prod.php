<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE PRODUCTOS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_products&op=create"><img src="view/img/anadir.png"></a>
            <a href="index.php?page=controller_products&op=deleteall"><img src="view/img/delete.png"></a></p>
    		
    		<table id="table_crud">
            <thead>
                <tr>
                    <th width=125><b>Product</b></th>
                    <th width=125><b>Brand</b></th>
                    <th width=125><b>Price</b></th>
                    <th width=350><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
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
                            
                            echo '<a class="Button_blue prod" id='.$row['product_code'].'>Modal</a>';
                    	   	echo '&nbsp;';

                    	   	echo '<a class="Button_blue" href="index.php?page=controller_products&op=read&id='.$row['product_code'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_products&op=update&id='.$row['product_code'].'">Update</a>';
                    	   	echo '&nbsp;';
                            echo '<a class="Button_red" href="index.php?page=controller_products&op=delete&id='.$row['product_code'].'">Delete</a>';
                            echo '&nbsp;';
                    	   	echo '<a class="Button_white like" id="'.$row['product_code'].'">❤</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
                </tbody>
            </table>
    	</div>
    </div>
</div>

<!-- modal window -->
<section id="prod_modal" >
    <div id="details_prod"  >
        <div id="details">
            <div id="container">
                <div class="row">
                    <div class="col-md-2">Product code: </div>
                    <div id="p_code" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Product name: </div>
                    <div id="p_name" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Brand: </div>
                    <div id="p_brand" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Manufacturer email: </div>
                    <div id="p_memail" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Price: </div>
                    <div id="p_price" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">State of product: </div>
                    <div id="p_state" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Processor type: </div>
                    <div id="p_processor" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Available until: </div>
                    <div id="p_availableuntil" class="col-md-10"></div></br>
                </div>
            </div>
        </div>
    </div>
</section>