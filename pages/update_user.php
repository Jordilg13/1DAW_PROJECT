<div id="contenido">
<p>Product info:</p>
<form name="formulario_update" method="POST" id="formulario_update">
  <table border="0" cellspacing="5" cellpadding="0">
    <tr>
      <td >Product</td>
      <td ><input name="product" type="text" id="product" value="<?php echo $user['product_name'];?>"readonly></td>
      <!-- <td><?php echo @$error[0] ?></td> -->
      <td><span id="e_product" class="styerror"></span></td>
    </tr>
    <tr>
      <td>Brand</td>
      <td><input name="brand" type="text" id="brand" value="<?php echo $user['brand'];?>"></td>
      <!-- <td><?php echo @$error[1] ?></td> -->
      <td><span id="e_brand" class="styerror"></span></td>
    </tr>
    <tr>
      <td>Manufacturer email</td>
      <td><input name="m_email" type="text" id="m_email" value="<?php echo $user['m_email'];?>"></td>
      <!-- <td><?php echo @$error[2] ?></td> -->
      <td><span id="e_memail" class="styerror"></span></td>
    </tr>
    <tr>
      <td>State</td>
      <td><select name="state" id="state" >
        <?php
            if ($user['state_product'] ==="Aviable") {
        ?>
            <option value="Other">Other</option>
            <option value="Aviable" selected>Aviable</option>
            <option value="Unaviable">Unaviable</option>
        <?php
            }elseif ($user['state_product'] ==="Unaviable") {    
        ?>
            <option value="Other">Other</option>
            <option value="Aviable" >Aviable</option>
            <option value="Unaviable" selected>Unaviable</option>
        <?php
            }else{    
        ?>
            <option value="Other" selected>Other</option>
            <option value="Aviable" >Aviable</option>
            <option value="Unaviable">Unaviable</option>
        <?php
            }
        ?>
      </select></td>
      <td><?php echo @$error[3] ?></td>
    </tr>
    <tr>
        <td>Product type</td>
        <td>
            <?php
                if ($user['product_type'] === "laptop") {
            ?>
                Laptop<input name="prod_type" type="radio" value="laptop" checked>
                Computer<input name="prod_type" type="radio" value="computer">
                Other<input name="prod_type" type="radio" value="other" >
            <?php
               } elseif ($user['product_type'] === "computer") {
            ?>
                Laptop<input name="prod_type" type="radio" value="laptop" >
                Computer<input name="prod_type" type="radio" value="computer" checked>
                Other<input name="prod_type" type="radio" value="other" >
            <?php
                }else{    
            ?>
                Laptop<input name="prod_type" type="radio" value="laptop" >
                Computer<input name="prod_type" type="radio" value="computer" >
                Other<input name="prod_type" type="radio" value="other" checked>
            <?php
                }
            ?>
        </td>
        <td><?php echo @$error[4] ?></td>
    </tr>

    <tr>
      <td>Processor type</td>
        <?php
            $afi=explode(",", $user['processor_type']);
        ?>
      <td>
        <?php
            $busca_array=in_array("i3", $afi);
            if($busca_array){
        ?>
            i3<input type="checkbox" name="type_proc[]" value="i3" checked><?php echo @$error[5] ?>
        <?php
            }else{
        ?>
            i3<input type="checkbox" name="type_proc[]" value="i3"><?php echo @$error[5] ?>
        <?php
            }
        ?>

        <?php
            $busca_array=in_array("i5", $afi);
            if($busca_array){
        ?>
            i5  <input type="checkbox" name="type_proc[]" value="i5" checked><?php echo @$error[5] ?>
        <?php
            }else{
        ?>
            i5  <input type="checkbox" name="type_proc[]" value="i5"><?php echo @$error[5] ?>
        <?php
            }
        ?>

        <?php
            $busca_array=in_array("i7", $afi);
            if($busca_array){
        ?>
            i7  <input type="checkbox" name="type_proc[]" value="i7" checked><?php echo @$error[5] ?>
        <?php
            }else{
        ?>
            i7  <input type="checkbox" name="type_proc[]" value="i7"><?php echo @$error[5] ?>
        <?php
            }
        ?>

        <?php
            $busca_array=in_array("i9", $afi);
            if($busca_array){
        ?>
             i9  <input type="checkbox" name="type_proc[]" value="i9" checked><?php echo @$error[5] ?>
        <?php
            }else{
        ?>
            i9  <input type="checkbox" name="type_proc[]" value="i9"><?php echo @$error[5] ?>
        <?php
            }
        ?>
           
      </td>
      <td><?php echo @$error[5] ?></td>
    </tr>
    <tr>
        <td>
            <p><label>Aviable until:</label></p>
        </td>
        <td>
            <p><input id="demo1" type="text" name="aviable_until_date" value="<?php echo $user['aviable_until'];?>"><?php echo @$error[4] ?></p>
        </td>
        <td><?php echo @$error[6] ?></td>
    </tr>
    
    <tr>
      <td><input name="Submit" type="button" value="Update" onclick="validate_prod()" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</div>