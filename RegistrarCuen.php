<?php


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

?>
<html>
    <head>
        <link rel="stylesheet" href="http://localhost/PCPLANET/REGISTRO.css" type="text/css"/>
        <title>REGISTRO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        
        <div class="wrapper">
           <form action="verificar.php" method="POST" >
               <h1>CREAR CUENTA</h1>
                <div class="input-box">
                   <input type="text" name="Nombre" placeholder="Nombre" required> 
                   <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" name="Apellidos" placeholder="Apellidos" required> 
                    <i class='bx bxs-user'></i>
                </div>  
                <div class="input-box">
                    <input type="text" name="Email" placeholder="Email" required> 
                    <i class='bx bx-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="Contrasena" placeholder="Contraseña" required> 
                    <i class='bx bxs-lock-alt'></i>
                </div>
               
               <input type="submit" class="button" value="Crear Cuenta">
               
                <div class="register-link">
                   <p>¿Ya tienes cuenta?  <a href="InicioSesion.php"> Iniciar sesion</a></p>        
               </div>  
           </form>
        </div>

        
    </body>
</html>
