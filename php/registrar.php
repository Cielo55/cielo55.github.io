<?php
include 'conexion.php';
//Recibir los datos y almacenarlos en variables
$rfc = $_POST["rfc"];
$rpp = $_POST["rpp"];
$nocontrol = $_POST["nocontrol"];
$fechacreacion = $_POST["fechacreacion"];
$domhist = $_POST["domhist"];
$fechaemision = $_POST["fechaemision"];
$nooficio = $_POST["nooficio"];
$saldoloc = $_POST["saldoloc"];
//Consulta para insertar
$insertar = "INSERT INTO contribuyentes(rfc, rpp, nocontrol, fechacreacion, domhist, fechaemision, nooficio, saldoloc) VALUES ('$rfc', '$rpp', '$nocontrol', '$fechacreacion', '$domhist', '$fechaemision', '$nooficio', '$saldoloc')";
//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}else{
	echo 'Usuario registrado exitosamente';
}
//Cerrrar conexion
mysqli_close($conexion);
