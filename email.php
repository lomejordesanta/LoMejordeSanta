<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$mensaje = $_POST['mensaje'];

echo "Hola buenos dias<br/>". "Mi Nombre Es:  ". $nombre."<br/>".
 "Mi Correo Electronico Es:  ".$email."<br/>".
  "Mi Numero Telefonico Es:  ".$numero."<br/>".
   "Este es mi mensaje:<br/>  ".$mensaje;

$correo=["Hola buenos dias<br/>". "Mi Nombre Es:  ". $nombre."<br/>".
 "Mi Correo Electronico Es:  ".$email."<br/>".
  "Mi Numero Telefonico Es:  ".$numero."<br/>".
   "Este es mi mensaje:<br/>  ".$mensaje;]
if(mail('oscarenriquemartineztambito@gmail.com', $nombre, $mensaje))
{
	echo "Su Mensaje Fue Enviado Con Exito, GRACIAS!";
}
else{
	echo"Ocurrio Un Error Al Enviar El Mensaje, Intente de nuevamente si el error vuelve a ocurrir hagalo más tarde GRACIAS!";
}
?>
