<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require 'Conexion1.php';

    $id = $_GET['id'];
    $total = ['total']
    
?>

<html lang="es">
	<head>
		<title>PAGAR</title>
                 <link rel="stylesheet" href="http://localhost/PCPLANET/ELIMINAR.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
                <link rel="stylesheet" href="http://localhost/PCPLANET/CARRITO.css" type="text/css"/>
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <link href="css/bootstrap-theme.css" rel="stylesheet">
                <link rel="icon" href="Logo.ico">
	</head>
	
	<body>
		<div class="wrapper">
                    <div class="row">
				<div class="row" style="text-align:center">
				<h3>DATOS DE ENVIO Y PAGO</h3>								
				</div>
                        
                    <div class="row">
            </div>

            <form class="form-horizontal" method="POST" action="update.php" >            
                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" /> 

                <div class="form-group">

                    <label for="nombre" class="col-sm-2 control-label">DOMICILIO</label>
                   <div class="col-sm-10">
                        <input type="text" class="form-control" id="producto" name="DOMICILIO" placeholder="DOMICILIO" value="" required style="background-color: rgba(255, 255, 255, .2); color: #fff; border: none;" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">CODIGO POSTAL</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="precio" name="CP" placeholder="C.P" value=""  required style="background-color: rgba(255, 255, 255, .2); color: #fff; border: none; " required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">NUM. TARJETA</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="precio" name="CP" placeholder="No. Tarjeta" value=""  required style="background-color: rgba(255, 255, 255, .2); color: #fff; border: none;" required>
                    </div>
                </div>

                <div class="botones">
                    <div class="botones-bot" style="text-align:center">
                        <a class="animated-button" href="Pagado.php" >PAGAR</a>
                    </div>
                </div>
               

                
            </form>
                        
			<div class="row">
				<div class="row" style="text-align:center">
				<a href="Carrito.php" class="animated-button">REGRESAR</a>
				
				</div>
			</div>
		</div>
	</body>
</html>

