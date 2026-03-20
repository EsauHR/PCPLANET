<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    session_start();
    
    session_unset();
    
    session_destroy();
    
?>

<html>
    <head>
        <link rel="stylesheet" href="http://localhost/PCPLANET/INGRESADO.css" type="text/css"/>

    <div class="wrapper">
        
            <h1>SESION CERRADA</h1>
            <div class="botones">
                
                <form action="Principal.html">       
                    <input class="animated-button" type=submit value="Regresar">
                </form>
            </div>
    </div>

</head>
</html>