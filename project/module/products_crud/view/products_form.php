<p>Product info:</p>
<form name="formm" method="POST" id="formm">
  <table border="0" cellspacing="5" cellpadding="0">
    <tr>
      <td >Product</td>
      <td ><input name="product" type="text" id="product" value="autoprod"></td>
      <!-- <td><?php echo @$error[0] ?></td> -->
      <td><span id="e_product" class="styerror"></span></td>
    </tr>
    <tr>
      <td>Brand</td>
      <td><input name="brand" type="text" id="brand" value="autobrand"></td>
      <!-- <td><?php echo @$error[1] ?></td> -->
      <td><span id="e_brand" class="styerror"></span></td>
    </tr>
    <tr>
      <td>Manufacturer email</td>
      <td><input name="m_email" type="text" id="m_email" value="autoemail@auto.es"></td>
      <!-- <td><?php echo @$error[2] ?></td> -->
      <td><span id="e_memail" class="styerror"></span></td>
    </tr>
    <tr>
      <td>State</td>
      <td><select name="state" id="state">
        <option value="Other">Other</option>
        <option value="Aviable">Aviable</option>
        <option value="Unaviable">Unaviable</option>
      </select></td>
      <td><?php echo @$error[3] ?></td>
      <td><span id="e_state" class="styerror"></span></td>
    </tr>
    <tr>
        <td>Product type</td>
        <td>
            Laptop<input name="prod_type" type="radio" value="laptop" >
            Computer<input name="prod_type" type="radio" value="computer">
            Other<input name="prod_type" type="radio" value="other" checked>
        </td>
        <td><?php echo @$error[4] ?></td>
    </tr>
    <tr>
      <td>Processor type</td>
      <td>
          i3  <input type="checkbox" name="type_proc[]" value="i3" id="type_proc[]"><?php echo @$error[5] ?>
        	i5  <input type="checkbox" name="type_proc[]" value="i5" id="type_proc[]"><?php echo @$error[5] ?>
        	i7  <input type="checkbox" name="type_proc[]" value="i7" id="type_proc[]"><?php echo @$error[5] ?>
          i9  <input type="checkbox" name="type_proc[]" value="i9" id="type_proc[]"><?php echo @$error[5] ?>
      </td>
      <td><?php echo @$error[5] ?></td>
      <td><span id="e_type_proc" class="styerror"></span></td>
    </tr>
    <tr>
        <td>
            <p><label>Aviable until:</label></p>
        </td>
        <td>
            <p><input id="demo1" type="text" name="aviable_until_date" readonly><?php echo @$error[4] ?></p>
        </td>
        <td><span id="e_aviable_until" class="styerror"></span></td>
        <td><?php echo @$error[6] ?></td>
    </tr>
    
    <tr>
      <td><input name="Submit" type="button" value="Create" onclick="validate_prod()" /></td>
      <td>&nbsp;</td>
      
    </tr>
  </table>
</form>