<?php

$mysqli = new mysqli('localhost','root','12345678','proyecto');
    
    if($mysqli->connect_error){
        die('error en la conexion' . $msqli->connect_error);
    }



?>


