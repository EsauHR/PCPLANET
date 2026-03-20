<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */



require 'Conexion1.php';

$nombre = $_POST['Nombre'];
$apellidos = $_POST['Apellidos'];
$email = $_POST['Email'];
$contrasena = $_POST['Contrasena'];

$sql = "INSERT INTO cuenta (Nombre, Apellidos, Email, Contrasena) VALUES ('$nombre', '$apellidos', '$email', '$contrasena')";
$resultado = $mysqli->query($sql);
?>

<html lang="es">
    <link rel="stylesheet" href="http://localhost/PCPLANET/VERIFICAR.css" type="text/css"/>
    <body>
        <div class="wrapper">
            <div class="row">
                <div class="row2" style="text-align:center">
                <?php if ($resultado) { ?>
                        <h3>CUENTA CREADA</h3>
                    <?php } else { ?>
                        <h3>ERROR AL CREAR</h3>
                    <?php } ?>

                    <a href="RegistrarCuen.php" class="button">Regresar</a>

                </div>
            </div>
        </div>
    </body>
