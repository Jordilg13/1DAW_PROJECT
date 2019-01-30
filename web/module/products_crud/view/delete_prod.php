<div class="inner-banner-w3ls">
    <div class="container">
        <!-- page details -->
        <div class="breadcrumb-agile">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Faqs</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div id="contenido">
    <form autocomplete="on" method="post" name="delete_prod" id="delete_prod" action="index.php?page=controller_products&op=delete&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>Do you want to delete the product with ID=<?php echo $_GET['id']; ?>?</h3></td>
                
            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete" id="delete">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_products&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>