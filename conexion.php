<?php

$nombre=$_POST['nom'];
$apellido=$_POST['ape'];
$cargo=$_POST['cargo'];
$rut=$_POST['rut']."-".$_POST['digito'];
$fecha=$_POST['fecha'];

//si existte empleado y campos no estan vacios



//  conecion a BD

$enlaceBD=mysqli_connect("localhost","admin","1234","apolo") or die ("no se conecto a la BD!");

if($enlaceBD && !empty($nombre) && !empty($apellido) && !empty($cargo) && !empty($rut) && !empty($fecha))
{

// insercion de datos en la tabla

$insert_user=mysqli_query($enlaceBD,"INSERT INTO empleado(
																nombre,
																apellido,
																rut,
																cargo,
																fecha
														) VALUES ('".$nombre."',
																  '".$apellido."',
																  '".$rut."',
																  '".$cargo."',
																  ".$fecha.
																  ")");
if($insert_user){
	echo "Se guardaron los datos.";
}else{
	echo ("No se lograron cargar los datos.").mysqli_error($enlaceBD);
}
echo "Datos Enviado Correctamente";
}
else 
{
echo "Error al Enviar Datos.";
}
?>