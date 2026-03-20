<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$host = 'localhost';
$db = 'proyecto';
$user = 'root';
$pass = '12345678';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

$nombre_de_columna = 'total';
$nombre_de_tabla = 'carro';

$sql = "SELECT SUM($nombre_de_columna) AS totalt FROM $nombre_de_tabla";
$stmt = $pdo->query($sql);
$result = $stmt->fetch();
$tot = $result['totalt'];
?> 


<?php
require 'Conexion1.php';

$where = "";

if (!empty($_POST)) {
    $valor = $_POST['id'];
    if (!empty($valor)) {
        $where = "WHERE id LIKE '%$valor'";
    }
}
$sql = "SELECT * FROM carro $where";
$resultado = $mysqli->query($sql);
?>

<?php
session_start();

require 'Conexion3.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, Email, Contrasena FROM cuenta WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>

<html lang="es">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/PCPLANET/CARRITO.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CARRITO</title>
         <!-- ICONOS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href="Logo.ico">
    </head>

    <body>
        
        
        <div class="wrapper">
            <!-- TABLA FEA -->
            <h1>CARRITO</h1>
            <table class="table table-striped">
            <thead>
                <tr style=" color: #fff;">
                    <th>ID</th>
                    <th>PRODUCTO</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>

                </tr>
            </thead>
            
            <tbody>
                <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr style=" color: #fff;">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['producto']; ?></td>
                            <td><?php echo $row['precio']; ?></td>
                            <td><?php echo $row['cantidad']; ?></td>
                            <td><?php echo $row['total']; ?></td>
                            <td><a href="Calcular.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                            <td><a href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
        
            <!-- MODAL -->
            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
                        </div>

                        <div class="modal-body">
                            ¿Desea eliminar este registro?
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger btn-ok">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SRIPT 1 -->
            <script>
                $('#confirm-delete').on('show.bs.modal', function (e) {
                    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

                    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                });
            </script>

            <!-- TEXTO -->
            <div class="texto-txt">
                    <form action="Pagar.php" method="post">
                        <label class="tex-1" for="total">Total:</label> $
                        <input class="tex-2" type="text" id="total" name="total" value="<?php echo htmlspecialchars($tot); ?>" readonly>
                        <input type="submit" class="animated-button" value="PAGAR" style=" text-decoration: none;"/>
                    </form>
                <a class="animated-button" style=" text-decoration: none;" href="Principal.php"/>INICIO</a>
            </div>
       
            <!-- SRIPT 2 -->
            <script>
                $('#confirm-delete').on('show.bs.modal', function (e) {
                    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

                    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                });
                
                 function alertar(texto) {
                    alert(texto);
                }
            </script>
    </div>
</body>
</html>

