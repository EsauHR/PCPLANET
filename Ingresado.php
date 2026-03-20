<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require 'Conexion1.php';
$producto = $_POST['producto'];
$precio = $_POST['pro'];
$cantidad = 1;
$total = ['total'];

$sql = "INSERT INTO carro (producto, precio, cantidad) VALUES ('$producto', '$precio', '$cantidad')";
$resultado = $mysqli->query($sql);
?>

<html>
    <head>
        <link rel="stylesheet" href="http://localhost/PCPLANET/INGRESADO.css" type="text/css"/>

    <div class="wrapper">
        
            <h1>AGREGADO AL CARRITO</h1>
            <div class="botones">
                <form class="bot1" action="Carrito.php">   
                    <input type=submit class="animated-button" value="Ir al carrito">
                </form>
                
                <form action="Principal.php">       
                    <input class="animated-button" type=submit value="Regresar">
                </form>
            </div>
    </div>

</head>
</html>
