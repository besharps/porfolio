<?php 

session_start();

// archivo que chequea la info y la envia por mail una vez verificado todos los campos

if(isset($_POST['enviar']) ){

	//Validación del nombre

	if(isset($_POST["nombre"])){

		$nombre=$_POST["nombre"];		

		if(strlen(trim($nombre)) <2 || strlen(trim($nombre)) >50 ){
			$e=2;
		}   // Nombre corto o demasiado largo


		//Validando email
		if(isset($_POST["email"]) ){

			$email=$_POST["email"];

			if( strlen(trim($email))<6 || strlen(trim($email))>40 ){
				$e=4;	
			}   // Email demasiado corto o largo

			if(!strpos($email,"@")){
				$e=5;	
			} 

			// Validación del mensaje
			if(isset($_POST["mensaje"])){

				$mensaje=$_POST["mensaje"];

				if( strlen(trim($mensaje)) <2 || strlen(trim($mensaje)) >1000 ){
					$e=7;	
				}  // Mensaje muy corto o largo				

				else{		

					// Ahora se envía el e-mail usando la función mail() de PHP
					$destinatario = "infobesharps@gmail.com"; 
					$asunto = "Mensaje de contacto del Portfolio Be Sharps"; 
					

					//para el envío en formato HTML 
					$headers = "MIME-Version: 1.0\r\n"; 
					$headers .= "Content-type: text/html; charset=utf-8\r\n"; 

					//dirección del remitente 
					$headers .= "From: ".$nombre."<".$email.">\r\n"; 

					//dirección de respuesta, si queremos que sea distinta que la del remitente 
					$headers .= "Reply-To:".$email."\r\n"; 

					//direcciones que recibián copia 
					//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

					//direcciones que recibirán copia oculta 
					//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 		

					$resultado=mail($destinatario,$asunto,$mensaje,$headers); 

					if($resultado){
						$e=10;// Email enviado correctamente
					}

					else{
						$e=11;// error al enviar email!!
					}	

				}
					
			}	

			else{
				$e=6; // Mensaje no seteado
			}

		}

		else{
			$e=3; // No está seteado el email
		}

	}

	else{
		 $e=1; // No está seteado el nombre		
	}	

}

else{

	$e=7;
}


$_SESSION['error']=$e;

header("location:index.php");	

?>