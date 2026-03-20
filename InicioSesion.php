<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
session_start();

include 'Conexion2.php';
$link = Conectarse();

if(!empty($_POST['Email']) && !empty($_POST['Contrasena']))
    {
        $email = $_POST["Email"];
        $password = $_POST["Contrasena"];
        $query="SELECT id, Email, Contrasena FROM cuenta WHERE Email='$email' AND Contrasena='$password'";
        $q= mysql_query($query,$link);
        
        if($fila= mysql_fetch_array($q))
        {
            $_SESSION['user_id'] = $fila['id'];
            header('Location: /PCPLANET/Principal.php');
           
        }
        else
        {
            echo '<script> window.alert("email o contrasena incorrectos")</script>';
        }
        
        $message = '';
    }    
?>

<html>
    <head>
        <link rel="stylesheet" href="SESION.css" type="text/css"/>
        <title>INICIAR SESION</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        
        <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
        <?php endif; ?>
        
        <div class="wrapper">
           <form action="InicioSesion.php" method="POST">
               <h1>INICIAR SESION</h1>
               <div class="input-box">
                   <input type="text" name="Email" placeholder="Email" required> 
                   <i class='bx bxs-user'></i>
                </div>  
                <div class="input-box">
                    <input type="password" name="Contrasena" placeholder="Contraseña" required> 
                    <i class='bx bxs-lock-alt'></i>
                </div>
               
               <div class="remember-forgot">
                   <label><input type="checkbox">¿Guardar contraseña?</label>
                   <a href="#">¿Olvidaste tu contra?</a>    
               </div> 
               
               <input type="submit" class="button" value="Iniciar Sesion">
               
               <div class="register-link">
                   <p>¿Eres nuevo?<a href="RegistrarCuen.php"> Crear una cuenta</a></p>        
               </div>  
           </form>
        </div>
       
    </body>
</html>
