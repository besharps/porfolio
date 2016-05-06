$(document).ready(function() {

	

	$("#btn-enviar").click(function(e){

		$("#error-nombre").hide();
		$("#error-email").hide();
		$("#error-nombre").hide();

		e.preventDefault();
		
		var validado="si";	


		//Validacion de email
			
		var email = $("#inp-email").val();
		email=$.trim(email);

		if(email !="") {

			if(email && email.length > 50) {
				$("#error-email").html("¡Longitud máxima permitida: 50 caracteres!");
				$("#error-email").show();
				validado="no";
			}

			if(email && email.length < 8) {
				$("#error-email").html("¡Longitud mínima permitida: 8 caracteres!");
				$("#error-email").show();
				validado="no";
			}

			var regex=/^[\'ñÑÜüáéíóúÁÉÍÓÚ]+$/;
			if(email && email.match(regex)){
				$("#error-email").html("¡No se permiten caracteres acentuados o especiales!");
				$("#error-email").show();
				validado="no";
			}

			regex=/[@]+./;
			if(email && !email.match(regex)){
				$("#error-email").html("¡Su email debe tener el caractere @ y al menos un punto !");
				$("#error-email").show();
				validado="no";
			}

		}
		

		if(email ==""){
			$("#error-email").html("¡Debe completar el email!");
			$("#error-email").show();
			validado="no";
		}

		

		//Validacion de nombre

		var  nombre=$("#inp-nombre").val();
		nombre=$.trim(nombre);

		if(nombre.length < 2){
			$("#error-nombre").html("¡Longitud mínima permitida: 2 caracteres!");
			$("#error-nombre").show();
			validado="no";
		}

		if(nombre.length > 50){
			$("#error-nombre").html("¡Longitud máxima permitida: 50 caracteres!");
			$("#error-nombre").show();
			validado="no";
		}

		if(nombre==""){
			$("#error-nombre").html("¡Debe completar el nombre!");
			$("#error-nombre").show();
			validado="no";
		}
	


		//Validacion del mensaje
			
		var msj = $("#inp-msj").val();
		msj=$.trim(msj);

		if(msj !="") {

			if(msj.length > 1000){
				$("#error-msj").html("¡Longitud máxima permitida: 1000 caracteres!");
				$("#error-msj").show();
				validado="no";
			}

			if(msj.length < 2){
				$("#error-msj").html("¡Longitud mínima permitida: 2 caracteres!");
				$("#error-msj").show();
				validado="no";
			}

		}

		if(msj==""){
			$("#error-msj").html("¡Debe agregar algún mensaje!");
			$("#error-msj").show();
			validado="no";
		}


		if(validado=="si"){
			$("#form-contacto").submit();
		} 
	});

});