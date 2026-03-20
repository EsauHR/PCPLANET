<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
session_start();
    
    require 'Conexion3.php';
    
    if(isset($_SESSION['user_id']))
    {
    $records = $conn->prepare('SELECT id, Email, Contrasena FROM cuenta WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
    $user = null;

    if(count($results) > 0){
        $user = $results;
      }
    }
?>
<html>
    <head>
                <link rel="stylesheet" href="http://localhost/PCPLANET/COMPUTADORAS.css" type="text/css"/>
        <link rel="stylesheet" href="COMPONENTES.css" type="text/css"/>
        <title>COMPONENTES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ICONOS -->
        <link rel="icon" href="Logo.ico">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>

    <body>
        <header class="header">
            <div class="menu container">
                <a class="logo">PCPLANET</a>
                <input type="checkbox" id="menu"/>
                <label for="menu">
                    <img src="img-inicio/menu.png" class="menu-icono" alt="">
                </label>

                <nav class="navbar">
                    <ul class="men">
                        <li><a href="Principal.php">INICIO</a></li>
                        <li><a href="Computadoras.php">COMPUTADORAS</a></li>
                        <li><a class="active">COMPONENTES</a></li>
                        <li><a href="Nosotros.html">NOSOTROS</a></li>
                    </ul>
                </nav> 
                <div>
                    <ul>
                        <li class="submenu">
                            <?= $user['Email']; ?>
                            <a href="logout.php"><i class='bx bx-log-out'></i></a>
                            <a href="Carrito.php"><i class='bx bx-cart'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <section class="home">
            <div class="de-gradient-edge-bottom"></div>
            <img class="img-slide active" src="img-compo/Fond.jpg"></img>

            <div class="content active">
                <h1>Los mejores<br><span>Componentes para PC</span></h1>
                <a class="button-1" href="#productos">VER PRODUCTOS</a>
            </div>
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </section> 
        <script src="Productos.js" defer data-deferred="1"></script> 

        <!-- PROCESADORES -->
        <section class="top-products" id="productos">
            <h1>PROCESADORES</h1>
            <div class="container-cad">
                <!--Producto 1-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/Procesadores/Proc-1.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="INTEL CORE I9">
                        <h2 class="price">$12999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="12999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>
                <!--Producto 2-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/Procesadores/Proc-2.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="AMD RYZEN 5">
                        <h2 class="price">$4999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="4999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>
                <!--Producto 3-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/Procesadores/Proc-3.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="AMD RYZEN 3">
                        <h2 class="price">$3999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="3999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>
                <!--Producto 4-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/Procesadores/Proc-4.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="INTEL CORE I5">
                        <h2 class="price">$6999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="6999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>               
            </div>
        </section>

        <!-- TARJETAS GRAFICAS -->
        <section class="top-products">
            <h1>TARJETAS GRAFICAS</h1>
            <div class="container-cad">
                <!--Producto 1-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/TarjetasG/TarG-1.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="PNY RTX 4090">
                        <h2 class="price">$31999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="31999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>
                <!--Producto 2-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/TarjetasG/TarG-2.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="ASUS RADEON RX6600">
                        <h2 class="price">$10999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="10999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>
                <!--Producto 3-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/TarjetasG/TarG-3.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="EVGA RTX 3080">
                        <h2 class="price">$30999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="30999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>
                <!--Producto 4-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/TarjetasG/TarG-4.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="ASUS DUAL RTX 4060">
                        <h2 class="price">$14999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="14999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>               
            </div>
        </section>

        <!-- TARJETAS MADRE -->
        <section class="top-products">
            <h1>TARJETAS MADRE</h1>
            <div class="container-cad">
                <!--Producto 1-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/TarjetasM/TarM-1.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="ROG MOTHERBOARD">
                        <h2 class="price">$20999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="20999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>
                <!--Producto 2-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/TarjetasM/TarM-2.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="TUF MOTHERBOARD">
                        <h2 class="price">$12999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="12999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div> 
                <!--Producto 3-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compo/TarjetasM/TarM-3.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="ASUS MOTHERBOARD">
                        <h2 class="price">$17999</h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="17999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>   
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container container-footer">
                <div class="menu-footer">
                    <div class="contact-info">
                        <p class="title-footer">Información de Contacto</p>
                        <ul>
                            <li>Dirección: 71 Pennington Lane Vernon Rockville, CT 06066</li>
                            <li>Teléfono: 123-456-7890</li>
                            <li>Fax: 55555300</li>
                            <li>EmaiL: sebasgay.com</li>
                        </ul>
                        <div class="social-icons">
                            <span class="facebook">
                                <i class='bx bxl-facebook'></i>
                            </span>
                            <span class="twitter">
                                <i class='bx bxl-twitter' ></i>
                            </span>
                            <span class="youtube">
                                <i class='bx bxl-youtube' ></i>
                            </span>
                            <span class="pinterest">
                                <i class='bx bxl-pinterest-alt' ></i>
                            </span>
                            <span class="instagram">
                                <i class='bx bxl-instagram' ></i>
                            </span>
                        </div>
                    </div>

                    <div class="information">
                        <p class="title-footer">Información</p>
                        <ul>
                            <li><a href="#">Acerca de Nosotros</a></li>
                            <li><a href="#">Información Delivery</a></li>
                            <li><a href="#">Politicas de Privacidad</a></li>
                            <li><a href="#">Términos y condiciones</a></li>
                            <li><a href="#">Contactános</a></li>
                        </ul>
                    </div>

                    <div class="my-account">
                        <p class="title-footer">Mi cuenta</p>
                        <ul>
                            <li><a href="#">Mi cuenta</a></li>
                            <li><a href="#">Historial de ordenes</a></li>
                            <li><a href="#">Lista de deseos</a></li>
                            <li><a href="#">Boletín</a></li>
                            <li><a href="#">Reembolsos</a></li>
                        </ul>
                    </div>

                    <div class="newsletter">
                        <p class="title-footer">Boletín informativo</p>
                        <div class="content">
                            <p>
                                Suscríbete a nuestros boletines ahora y mantente al
                                día con nuevas colecciones y ofertas exclusivas.
                            </p>
                            <input type="email" placeholder="Ingresa el correo aquí...">
                            <button>SUSCRIBIRSE</button>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p> Desarrollado por Sebastian y Joksan &copy; 2024 </p>
                    <img src="img-compo/payment.png" alt="Pagos">
                </div>
            </div>
        </footer>	
    </body>
</html>