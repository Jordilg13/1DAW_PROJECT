<div id="contenido">
    <h1>Informacion del Usuario</h1>
    <p>

    <table class="table_read">
        <tr class=table_tr>
            <td class="table_td">Product code: </td>
            <td class="table_td">
                <?php
                    echo $prod['product_code'];
                ?>
            </td>
        </tr>
        <tr class=table_tr>
            <td class="table_td">Product name: </td>
            <td class="table_td">
                <?php
                    echo $prod['product_name'];
                ?>
            </td>
        </tr>
    
        <tr class=table_tr>
            <td class="table_td">Brand: </td>
            <td class="table_td">
                <?php
                    echo $prod['brand'];
                ?>
            </td>
        </tr>
        
        <tr class=table_tr>
            <td class="table_td">Manufacturer email: </td>
            <td class="table_td">
                <?php
                    echo $prod['m_email'];
                ?>
            </td>
        </tr>
        
        <tr class=table_tr>
            <td class="table_td">State of product: </td>
            <td class="table_td">
                <?php
                    echo $prod['state_product'];
                ?>
            </td>
        </tr>
        
        <tr class=table_tr>
            <td class="table_td">Processor type: </td>
            <td class="table_td">
                <?php
                    echo $prod['processor_type'];
                ?>
            </td>
        </tr>
        
        <tr class=table_tr>
            <td class="table_td">Aviable until: </td>
            <td class="table_td">
                <?php
                    echo $prod['aviable_until'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_products&op=list">Volver</a></p>
</div>