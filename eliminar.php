<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require 'Conexion1.php';

    $id = $_GET['id'];
	
    $sql = "DELETE FROM carro WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		<title>ELIMINAR</title>
                 <link rel="stylesheet" href="http://localhost/PCPLANET/ELIMINAR.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="wrapper">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>
				
				<a href="Carrito.php" class="animated-button">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
