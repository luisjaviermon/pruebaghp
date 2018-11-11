<?php 
	$destino="luiis.montiel2297@gmail.com";
	$nombre=$_POST["nombre"];
	$correo=$_POST["correo"];
	$mensaje=$_POST["mensaje"];
	$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
	mail($destino,"desde php",$contenido);
	header("Location: principal.html");
 ?>