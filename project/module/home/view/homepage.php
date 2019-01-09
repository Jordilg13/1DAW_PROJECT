<h1>Products</h1>
Number of products:
<select name="num_products" id="num_products" onchange="num_products(this);">
    <?php
        if (!isset($_GET['num'])) {
            echo("<option value='4'>4</option>");
            echo("<option value='6'>6</option>");
            echo("<option value='8'>8</option>");
        } elseif ($_GET['num'] == 6) {
            echo("<option value='4'>4</option>");
            echo("<option value='6' selected>6</option>");
            echo("<option value='8'>8</option>");
        } elseif ($_GET['num'] == 8) {
            echo("<option value='4'>4</option>");
            echo("<option value='6'>6</option>");
            echo("<option value='8' selected>8</option>");
        }
    ?>
</select>

<div id="home_products">
    <table id="home_table" align="center">
        <tr>
            <?php
                if ($rt->num_rows === 0) {
                    // echo '<tr>';
                    echo '<td align="center"  colspan="3">NEW PRODUCTS SOON!</td>';
                    // echo '</tr>';
                }else{
                    $i = 0;
                    foreach ($rt as $row) {
                        $i++;
                        echo('<td id="home_table_td">'.
                              '<b>'.$row['product_name'].'</b>'.'<br>'.'<br>'.
                              $row['brand'].'<br>'.'<br>'.
                              $row['aviable_until'].
                              '</td>');
                        if ($i%2 == 0) {
                            echo("</tr>");
                            echo("<tr>");
                        }
                    }
                }
            ?>
        </tr>
    </table>
</div>