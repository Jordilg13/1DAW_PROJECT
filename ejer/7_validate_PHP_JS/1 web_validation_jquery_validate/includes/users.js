$().ready(function() {	
			// Configuramos la validaci?n de los distintos campos del formulario
			$("#signupForm").validate({
				rules: {
					usuario: { // reglas para el campo usuario
						required: true, // Tienes que ser requerido
						minlength: 2    // Tiene que tener un tama?o mayor o igual a dos caracteres
					},
					nombre: { // reglas para el campo nombre
						required: true, // Tienes que ser requerido
						minlength: 2    // Tiene que tener un tama?o mayor o igual a dos caracteres
					},
					apellidos: { // reglas para el campo apellidos
						required: true, // Tienes que ser requerido
						minlength: 2    // Tiene que tener un tama?o mayor o igual a dos caracteres
					},
					email: {  // identificar que es un email valido
						required: true, 
						email: true  // para ello el metodo email: true comprobara esta validaci?n
					},
					password: {  // reglas para el campo password
						required: true, // Tienes que ser requerido
						minlength: 5    // Tiene que tener un tama?o mayor o igual a cinco caracteres
					},
					password2: { // reglas para el campo password2
						required: true, // Tienes que ser requerido 
						minlength: 5,   // Tiene que tener un tama?o mayor o igual a cinco caracteres
						equalTo: "#password"  // Tiene que ser igual que el campo password y para ello indicamos su id
					}
					//date_birthday: { // reglas para el campo date_birthday
						//required: true // Tienes que ser requerido
					//}
				},
				messages: { // La segunda parte es configurar los mensajes, r indicando para cada campo y cada regla el mensaje que quiero mostrar si no se cumple.
					usuario: {
						required: "Introduzca su Nombre de Usuario",
						minlength: "El Nombre de usuario debe tener al menos 2 caracteres"
					},
					nombre: {
						required: "Introduzca su Nombre",
						minlength: "El Nombre debe tener al menos 2 caracteres"
					},
					apellidos: {
						required: "Introduzca sus Apellidos",
						minlength: "Los Apellidos deben tener al menos 2 caracteres"
					},
					email: {
						required: "Introduzca su Email",
						minlength: "El email deben tener al menos 2 caracteres"
					},
					password: {
						required: "Introduzca su password",
						minlength: "Su password debe tener al menos 5 caracteres"
					},
					password2: {
						required: "Introduzca de nuevo su password",
						minlength: "Su password debe tener al menos 5 caracteres",
						equalTo: "Los password introducidos no son iguales"
					}
					//date_birthday: {
						//required: "Introduzca su date_birthday"
					//}
				}
			});
		});