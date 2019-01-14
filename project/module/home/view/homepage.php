<h1>Products</h1>
Number of products:
<select name="num_products" id="num_products" onchange="num_products(this);">
    <?php
    if (!isset($_GET['num'])) {
        echo ("<option value='4'>4</option>");
        echo ("<option value='6'>6</option>");
        echo ("<option value='8'>8</option>");
    } elseif ($_GET['num'] == 6) {
        echo ("<option value='4'>4</option>");
        echo ("<option value='6' selected>6</option>");
        echo ("<option value='8'>8</option>");
    } elseif ($_GET['num'] == 8) {
        echo ("<option value='4'>4</option>");
        echo ("<option value='6'>6</option>");
        echo ("<option value='8' selected>8</option>");
    }
    ?>
</select>

<!-- <div id="home_products"> -->
    <!-- <table id="home_table" align="center"> -->
    <!-- <tr> -->

    
    <div class="container">
        <div class="row">
            
        
            <?php
            $images = array(
                'computer' => "computer.jpg",
                'headp' => "headphones.jpg",
                'tab' => "tablet.png",
                'tab2' => "tablet2.jpg",
            );
            //pretty home product(copypaste)
            $template_prod = '
            <div class="col-md-3 col-sm-6">
                            <div class="product-grid6">
                                <div class="product-image6">
                                    <a href="index.php?page=controller_products&op=read&id=%s">
                                        <img class="pic-1" src="view/img/products/%s">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">%s</a></h3>
                                    <div class="price">%d€
                                        <span>%d€</span>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li><a href="%s" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                </div></div>';
            if ($rt->num_rows === 0) {
                    // echo '<tr>';
                echo '<td align="center"  colspan="3">NEW PRODUCTS SOON!</td>';
                    // echo '</tr>';
            } else {
                $i = 0;
                foreach ($rt as $row) {
                    $i++;
                    echo ('<td>');
                    //     '<b>' . $row['product_name'] . '</b>' . '<br>' . '<br>' .
                    //     $row['brand'] . '<br>' . '<br>' .
                    //     $row['aviable_until'] .
                    echo sprintf($template_prod, $row['product_code'], $images[array_rand($images)], $row['product_name'], $row['price'], $row['price'] + 30, "");
                    echo('</td>');
                    if ($i % 2 == 0) {
                        echo ("</div><br>");
                        echo ("<div>");
                        echo ( "<div class='container'>");
                        echo ( "<div class='row'>");
                    }
                }
            }
            ?>
        </div></div>
    <!-- </tr> -->
    <!-- </table> -->


    
    


<!-- </div> -->