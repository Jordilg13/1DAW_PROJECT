function validate_user() {
	if (document.formusers.usuario.value.length==0){
	    document.getElementById('e_usuario').innerHTML = "Tiene que escribir su usuario";
	    document.formusers.usuario.focus();
	    return 0;
    }
    document.getElementById('e_usuario').innerHTML = "";
    
    if (document.formusers.nombre.value.length==0){
	    document.getElementById('e_nombre').innerHTML = "Tiene que escribir su nombre";
	    document.formusers.nombre.focus();
	    return 0;
    }
    document.getElementById('e_nombre').innerHTML = "";
    
    if (document.formusers.apellidos.value.length==0){
	    document.getElementById('e_apellidos').innerHTML = "Tiene que escribir sus apellidos";
	    document.formusers.apellidos.focus();
	    return 0;
    }
    document.getElementById('e_apellidos').innerHTML = "";
    
    if (document.formusers.email.value.length==0){
	    document.getElementById('e_email').innerHTML = "Tiene que escribir su email";
	    document.formusers.email.focus();
	    return 0;
    }
    document.getElementById('e_email').innerHTML = "";
    
    if (document.formusers.password.value.length==0){
	    document.getElementById('e_password').innerHTML = "Tiene que escribir su password";
	    document.formusers.password.focus();
	    return 0;
    }
    document.getElementById('e_password').innerHTML = "";
    
    if (document.formusers.password2.value.length==0){
	    document.getElementById('e_password2').innerHTML = "Tiene que repetir su password";
	    document.formusers.password2.focus();
	    return 0;
    }
    document.getElementById('e_password2').innerHTML = "";
   
	document.formusers.submit();
	document.formusers.action="index.php?page=controller_users";
}