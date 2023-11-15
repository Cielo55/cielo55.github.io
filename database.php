<?php 

	$conexion=mysqli_connect('localhost','root','','bdregistros');

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulario de Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>mostrar datos</title>
</head>
<body>

<a class="ba" href="http://localhost/sat/index.php">VOLVER</a>
<h1 >BASE DE DATOS</h1>
<br>
<br>

	<table border="1" >
		<tr>
			<td>rfc</td>
			<td>rpp</td>
			<td>nocontrol</td>
			<td>fechacreacion</td>
			<td>domhist</td>	
			<td>fechaemision</td>
			<td>nooficio</td>
			<td>saldoloc</td>
		</tr>

		<?php 
		$sql="SELECT * from contribuyentes";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['rfc'] ?></td>
			<td><?php echo $mostrar['rpp'] ?></td>
			<td><?php echo $mostrar['nocontrol'] ?></td>
			<td><?php echo $mostrar['fechacreacion'] ?></td>
			<td><?php echo $mostrar['domhist'] ?></td>
			<td><?php echo $mostrar['fechaemision'] ?></td>
			<td><?php echo $mostrar['nooficio'] ?></td>
			<td><?php echo $mostrar['saldoloc'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>