<?php 

	$destino="sebastian.beltran@ucp.edu.co";
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$telefono = $_POST["telefono"];
	$correo = $_POST["correo"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Numbre: " . $nombre . "\nApellido: " . $apellido . "\nTelefono: " . $telefono . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
	mail($destino,"Contacto",$contenido);
	header("Location:gracias.html");
	
 ?>
