$(document).ready(function() {
	var page_actual=1;
	
	function ActualizarComentarios(page) {
		 page_actual=page;
		 $('#comentarios').fadeIn('normal', function() {
			$('#comentarios').css('display', 'block');
			$("#comentarios").load("includes/mostrar_comentarios.php?page="+page);
		 });
	}
	
	$('#comentar').click(function() { 
		var comentario = $('#comentario').attr('value');
		var usuario = $('#usuario').attr('value');
		var caracteres =  comentario.length;
		
		if(comentario == '' || usuario == ''){
			$('#resultado').fadeIn('normal', function() {
				$('#resultado').css('display', 'block');
				$('#resultado').html('Debes completar todos los campos!');	
			});
		} else { 
			if(caracteres>250) {
				$('#resultado').fadeIn('normal', function() {
					$('#resultado').css('display', 'block');
					$('#resultado').html('El comentario debe ser menor que 250 caracteres');	
				});
			} else { 
				$.ajax({
					type: 'POST',
					url: 'includes/nuevo_comentario.php',
					data: 'comentario='+comentario+'&usuario='+usuario,
					success: function(response){
						console.log(response);
						
					  $('#resultado').fadeIn('normal', function() {
						  $('#resultado').css('display', 'block');
						  $('#resultado').html('Tu comentario fue agregado.');
						  $('#comentario').attr('value', '');
						  $("#contador_caracteres").html('');
					  });
					  ActualizarComentarios(1);
					},
					error: function(){
					  $('#resultado').fadeIn('normal', function() {
						$('#resultado').css('display', 'block');
						$('#resultado').html('Se produjo un error y su comentario no se ha podido agregar. Vuelve a intentarlo en unos minutos.');
					  });
					}
				});
			}
		}
		
	});
	
	$('#comentario').keyup(function(){
		var texto_escrito = $('#comentario').val();
		var caracteres =  texto_escrito.length;
		if(caracteres>250){ 
			$('#resultado').fadeIn('normal', function() {
			$('#resultado').css('display', 'block');
			$('#resultado').html('El comentario debe ser menor que 250 caracteres');	
			});
		} else {
		caracteres = 250 - caracteres;
			$("#contador_caracteres").html("Caracteres restantes: "+caracteres);
		}
	});
	
	ActualizarComentarios(1);
});