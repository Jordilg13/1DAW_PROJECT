function validastring(str){
    if (str.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(str);
    }
    return false;
}

function validaemail(email) {
    if (email.length > 0) {
        var regexp = /^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i;
        return regexp.test(email);
    }
    return false;
}

function validate_prod(){
    var result = true;

    var product = document.getElementById('product').value;
    var brand = document.getElementById('brand').value;
    var m_email = document.getElementById('m_email').value;

    if (!validastring(product)) {
        document.getElementById('e_product').innerHTML = "Invalid name for the product.";
        result = false;
    } else {
        document.getElementById('e_product').innerHTML = "";
    }

    if (!validastring(brand)) {
        document.getElementById('e_brand').innerHTML = "Invalid brand.";
        result = false;
    } else {
        document.getElementById('e_brand').innerHTML = "";
    }

    if (!validaemail(m_email)) {
        document.getElementById('e_memail').innerHTML = "Invalid email.";
        result = false;
    } else {
        document.getElementById('e_memail').innerHTML = "";
    }

    console.log("fin validacio js: "+result);
    // return result;

    // document.formulario_update.action="index.php?page=controller_products&op=update";
    
    document.formm.submit();
    document.formm.action="";
	

}