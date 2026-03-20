<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require 'Conexion1.php';

$where = "";
if (!empty($_POST)) {
    $valor = $_POST['id'];
    if (!empty($valor)) {
        $where = "WHERE Producto LIKE '$valor%'";
    }
}
$sql = "SELECT Producto,Precio FROM carrito $where";
$resultado = $mysqli->query($sql);
?>


<html lang="es">
    <head>
        <title>BUSCAR</title>
        <link rel="stylesheet" href="http://localhost/PCPLANET/BUSCAR.css" type="text/css"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>	
        <link rel="icon" href="Logo.ico">
    </head>

    <body>
        <div class="wrapper">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <b>PRODUCTO: </b> <input type="text" class="caja1" id="id" name="id" />
            <input type="submit" id="enviar" name="enviar" value="BUSCAR" class="btn btn-info" />
        </form>

        <table class="table table-striped" style="margin-top: 20px;">
            <thead>
                <tr style=" color: #fff;">
                    <th>PRODUCTO</th>
                    <th>PRECIO</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                    <tr style=" color: #000;" >
                        <td><?php echo $row['Producto']; ?></td>
                        <td><?php echo $row['Precio']; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
                     <a class="animated-button" style=" text-decoration: none;" href="Principal.html" />Inicio</a>
        </div>
</body>
</html>             

