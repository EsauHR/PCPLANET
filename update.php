<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


require 'Conexion1.php';
$id = $_POST['id'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$total = $_POST['total'];

$sql = "UPDATE carro SET producto='$producto', precio='$precio', cantidad='$cantidad', total='$total' WHERE id = '$id'";
$resultado = $mysqli->query($sql);
?>

<html lang="es">
    <head>
        <title>MENSAJE</title>
        <link rel="stylesheet" href="http://localhost/PCPLANET/UPDATE.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">

    </head>

    <body>
        <div class="wrapper">
            <div class="texto1">
                <div class="texto2" >
                    <?php if ($resultado) { ?>
                        <h3>REGISTRO MODIFICADO</h3>
                    <?php } else { ?>
                        <h3>ERROR AL MODIFICAR</h3>
                    <?php } ?>

                    <a href="Carrito.php" class="button">Regresar</a>

                </div>
            </div>
        </div>
    </body>
</html>

