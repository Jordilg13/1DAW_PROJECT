$(document).ready(function(){
	setInterval(function(){ 
		$.ajax({
			type : 'GET',
			url  : 'module/login/controller/login_controller.php?&op=activity',
			success :  function(response){						
				if(response=="inactivo"){
					alert("Se ha cerrado la cuenta por inactividad")
					setTimeout('window.location.href = "index.php?page=controller_login&op=logout";',1000);
				}
			}
		});
	}, 120000);
});