<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    require 'Conexion1.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM carro WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
?>
<html lang="es">
    <head>
        <title>MOFIFICAR</title>
        <link rel="stylesheet" href="http://localhost/PCPLANET/CARRITO.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link rel="icon" href="Logo.ico">

    </head>

    <body>
        <div class="wrapper">
            <div class="row">
                <h3 style="text-align:center">MODIFICAR LA CANTIDAD</h3>
            </div>

            <form class="form-horizontal" method="POST" action="update.php" >            
                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" /> 

                <div class="form-group">

                    <label for="nombre" class="col-sm-2 control-label">PRODUCTO</label>
                   <div class="col-sm-10">
                        <input type="text" class="form-control" id="producto" name="producto" placeholder="Produto" value="<?php echo $row['producto']; ?>" required style="background-color: rgba(255, 255, 255, .2); color: #fff; border: none;">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">PRECIO</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" value="<?php echo $row['precio']; ?>"  required style="background-color: rgba(255, 255, 255, .2); color: #fff; border: none;">
                    </div>
                </div>

                <div class="form-group">
                <label for="cantidad" class="col-sm-2 control-label">CANTIDAD</label>
                <div class="col-sm-10">
                    <select class="form-control" id="cantidad" name="cantidad" style="background-color: rgba(255, 255, 255, .2); border: none;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="total" class="col-sm-2 control-label">TOTAL</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control" id="total" name="total" placeholder="Total" readonly style="background-color: rgba(255, 255, 255, .2); color: #fff; border: none;">
                </div>
            </div>   

                <div class="botones">
                    <div class="botones-bot">
                        <a href="Carrito.php" class="btn btn-default">REGRESAR</a>
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
        
        <script>
        document.getElementById('cantidad').addEventListener('change', calcularTotal);
        document.getElementById('precio').addEventListener('input', calcularTotal);

        function calcularTotal() {
            var precio = parseFloat(document.getElementById('precio').value);
            var cantidad = parseInt(document.getElementById('cantidad').value);
            if (!isNaN(precio) && !isNaN(cantidad)) {
                document.getElementById('total').value = (precio * cantidad).toFixed(2);
            }
        }
    </script>
    </body>
</html>
