<?php

$Chost = "localhost";
$Cuser = "root";
$Cpass = "";
$Cdb = "bdregistros";

$con = new mysqli($Chost,$Cuser,$Cpass,$Cdb);

if($con->connect_error){
	die("ha ocurrido un error");
}


$conexion = mysqli_connect("localhost", "root", "","bdregistros");
if (!$conexion){
	echo 'Error al conectar en la base de datos';
}
else{
	echo ''.'<br>';
}
?>