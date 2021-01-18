<?php 

	$destino="sebastian.beltran@ucp.edu.co";
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$direccion = $_POST["direccion"];
	$ciudad = $_POST["ciudad"];
	$telefono = $_POST["telefono"];
	$correo = $_POST["correo"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Numbre: " . $nombre . "\nApellido: " . $apellido . "\nCedula: " . $cedula . "\nDireccion: " . $direccion . "\nCiudad: " . $ciudad . "\nTelefono: " . $telefono . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
	mail($destino,"Contacto",$contenido);
	header("Location:gracias.html");
	
 ?>