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

    //product name
    if (!validastring(product)) {
        document.getElementById('e_product').innerHTML = "Invalid name for the product.";
        result = false;
    } else {
        document.getElementById('e_product').innerHTML = "";
    }
    //brand
    if (!validastring(brand)) {
        document.getElementById('e_brand').innerHTML = "Invalid brand.";
        result = false;
    } else {
        document.getElementById('e_brand').innerHTML = "";
    }
    //manufacturer email
    if (!validaemail(m_email)) {
        document.getElementById('e_memail').innerHTML = "Invalid email.";
        result = false;
    } else {
        document.getElementById('e_memail').innerHTML = "";
    }
    //state
    if (document.getElementById('state').value == "Other") {
        document.getElementById('e_state').innerHTML = "Invalid state.";
        result = false;
    } else 
        document.getElementById('e_state').innerHTML = "";
    
    //processor type
    var ischecked = false;
    var checkboxes = document.getElementsByName('type_proc[]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked)
            ischecked = true;       
    }
    if (!ischecked) {
        document.getElementById('e_type_proc').innerHTML = "Check at least one type of processor.";
        result = false;
    } else 
        document.getElementById('e_type_proc').innerHTML = "";
    
    //aviable until
    console.log(document.getElementById('demo1').value);
    if (document.getElementById('demo1').value == "") {
        document.getElementById('e_aviable_until').innerHTML = "Select a day.";
        result = false;
    }
    else 
        document.getElementById('e_aviable_until').innerHTML = "";


    console.log("fin validacio js: "+result);

    if (result) {
        document.formm.submit();
        document.formm.action="";
    }
    
	

}