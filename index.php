<?php
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
<h1>Registro De Contribuyentes</h1>
<input type="button" value="Nuevo Registro" id="registro" onclick="abrir();" class="nuevo-registro">

<a class="ba" href="http://localhost/sat/database.php">Base de datos</a>



<form action="php/registrar.php" id="form-register" style="display: none;" method="post" class="form-register">
	<h2 id="form-titulo" class="form-titulo">Datos Nuevo Contribuyente</h2>
	<div class="contenedor-inputs">
		<input type="text" id="rfc" name="rfc" placeholder="RFC" class="input-48" required>
		<select name="rpp" class="rpp" >
			<option value=""selected>Seleccione RPP</option>
			<option value="Veracruz">Veracruz</option>
			<option value="Cordoba" >Boca Del Rio</option>
			<option value="Tlacotalpan">Tlacotalpan</option>
			<option value="Cosamaloapan">Cosamaloapan</option>
			<option value="Cordoba">Cordoba</option>
			<option value="Orizaba">Orizaba</option>
			<option value="Huatusco">Huatusco</option>
			<option value="Zongolica">Zongolica</option>
		  </select>
		<input type="text" id="nocontrol" name="nocontrol" placeholder="No.Control" class="input-100" required>
		<input type="text" id="fechacreacion" name="fechacreacion" placeholder="Fecha Creacion" class="input-48" required>
		<input type="text" id="domhist" name="domhist" placeholder="Domicilios Hist" class="input-48"required >
		<input type="text" id="fechaemision" name="fechaemision" placeholder="Fecha Emision" class="input-100" required>
		<input type="text" id="nooficio" name="nooficio" placeholder="No. Oficio" class="input-100" required>
		<input type="text" id="saldoloc" name="saldoloc" placeholder="Saldo Localizado" class="input-100" required>
		<input type="text" id="fecharespuesta" name="fehcarespuesta" placeholder="Fecha De Respuesta" class="input-100" required>
		<input type="submit" value="Guardar" id="btn-guardar" class="btn-guardar">
		<input type="button" value="Cerrar" onclick="cerrar();" class="Cerrar">
		
		
	</div>
</form >
<form action="" method="get" id="formbuscar" class="formbuscar">

<input type="text" name="busqueda" class="busqueda" placeholder="Buscar RFC" required> <br>
<input type="submit" name="enviar" value="buscar" class="buscar">
<a class="b" href="http://localhost/sat/index.php">Limpiar Busqueda</a>

</form>
<script>
	function abrir(){
	document.getElementById('form-register').style.display = 'block';
	document.getElementById('formbuscar').style.display = 'none';
	document.getElementById('registro').style.display = 'none';
	
}
function cerrar(){
	document.getElementById('form-register').style.display = 'none';
	document.getElementById('registro').style.display = 'block';
	document.getElementById('formbuscar').style.display = 'block';
}
function buscar(){
	document.getElementById('buscarrfc').style.display = 'block';
	document.getElementById('form-register').style.display = 'block';
	document.getElementById('registro').style.display = 'none';
	document.getElementById('btn-guardar').style.display = 'none';
	document.getElementById('form-titulo').style.display = 'none';
}


</script>
<br>
<br>
<br>

<?php


   if(isset($_GET['enviar'])){
		$busqueda = $_GET['busqueda'];

		$consulta = $con->query("SELECT * FROM contribuyentes WHERE rfc LIKE '%$busqueda%'");

		while ($row = $consulta->fetch_array()){
			
			echo '<strong>'."RFC:  ".'</strong>'. $row['rfc'].'<br>';
            echo '<td>'.'<b>'."RPP:  ".'</b>'.$row['rpp'].'<br>';
			echo '<b>'."NO. CONTROL:  ".'</b>'.$row['nocontrol'].'<br>';
			echo '<b>'."FECHA DE CREACION:  ".'</b>'.$row['fechacreacion'].'<br>';
			echo '<b>'."DOMICILIO HISTORICO:  ".'</b>'.$row['domhist'].'<br>';
			echo '<b>'."FECHA EMISION:  ".'</b>'.$row['fechaemision'].'<br>';
			echo '<b>'."NO. OFICIO:  ".'</b>'.$row['nooficio'].'<br>';
			echo '<b>'."SALDO LOCALIZADO:  ".'</b>'.$row['saldoloc'].'<p>________________________________________________</p>';
          
		}

   }
   ?>
	
</body>
</html>
