<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

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


<html>
    <head>
        <link rel="stylesheet" href="http://localhost/PCPLANET/COMPUTADORAS.css" type="text/css"/>
        <title>COMPUTADORAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ICONOS -->
        <link rel="icon" href="Logo.ico">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body>
        
         <!-- HEADER -->
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
                        <li><a class="active">COMPUTADORAS</a></li>
                        <li><a href="Componentes.php">COMPONENTES</a></li>
                        <li><a href="Nosotros.php">NOSOTROS</a></li>
                    </ul>
                </nav> 
                <div>
                    <ul>
                        <li class="submenu">
                            <div class="usuario">  
                                <?= $user['Email']; ?>
                            </div>
                            <a href="logout.php"><i class='bx bx-log-out'></i></a>
                            <a href="Carrito.php"><i class='bx bx-cart'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- BANNER -->
        <section class="home">
            <div class="de-gradient-edge-bottomm"></div>
            <img class="img-slide active" src="img-compu/Fond-3.jpg"></img>
            <div class="content active">
                <h1>Lo mejor en<br><span>Computadoras</span></h1>
                <a href="#productos" class="button-1">VER PRODUCTOS</a>
            </div>
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </section> 

        <!-- RYZEN -->
        <section class="top-products" id="productos">
            <div class="de-gradient-edge-top"></div>
            <h1>RYZEN | RADEON</h1>
            <div class="container-cad">
                <!--Producto 1-->
                <div class="card">
                    <div class="imgBox">
                        <span class="descuento">-30%</span>
                        <img src="img-compu/r-1.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto" name="producto" value="GOLDEN PC RIZEN 9">
                        <h2 class="price">$25,829<span>$36,899</span></h2>
                        
                        <input type="text" class="tex2-precio" name="pro" value="25829">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>

                <!--Producto 2-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compu/r-2.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto1" name="producto" value="PC RTZ RADEON RX6100">
                        <h2 class="price">$27,999</h2>                     
                        <input type="text" class="tex2-precio" name="pro" value="27999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>

                <!--Producto 3-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compu/r-3.png" alt="compu1"/>
                        <span class="descuento">-33%</span>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto2" name="producto" value="BLACK NOIR RYZEN 7">
                        <h2 class="price">$27,462<span>$36,899</span></h2>                 
                        <input type="text" class="tex2-precio" name="pro" value="27462">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>

                <!--Producto 4-->
                <div class="card">
                    <div class="imgBox">
                        <img src="img-compu/r-4.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox">
                        <input type="text" id="1" class="tex1-texto2" name="producto" value="COMOON PC RYZEN 7">
                        <h2 class="price">$24,999</h2>             
                        <input type="text" class="tex2-precio" name="pro" value="24999">

                        <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                    </form>
                </div>               
            </div>
        </section>

        <!-- INTEL CORE -->
        <section class="top-products2">
            <h1>INTEL CORE</h1>
            <div class="container-cad2">
                <!--Producto 1-->
                <div class="card2">
                    <div class="imgBox2">
                        <img src="img-compu/i-1.png" alt="compu1"/>
                    </div>

                    <form action="ingresado.php" method="POST" class="contentBox2">
                        <input type="text" id="1" class="tex1-texto4" name="producto" value="MOONLIGHT CORE I7">
                        <h2 class="price2">$26,999</h2>                        
                        <input type="text" class="tex2-precio" name="pro" value="26999">
                        <input type="submit" value="Añadir" class="buy2">
                    </form>
                </div>

                <!--Producto 2-->
                <div class="card2">
                    <div class="imgBox2">
                        <img src="img-compu/i-2.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox2">
                        <input type="text" id="1" class="tex1-texto5" name="producto" value="WHITE PC CORE I5">
                        <h2 class="price2">$22,999</h2>                      
                        <input type="text" class="tex2-precio" name="pro" value="22999">
                        
                        <input type="submit" value="Añadir" class="buy2">
                    </form>
                </div>

                <!--Producto 3-->
                <div class="card2">
                    <div class="imgBox2">
                        <img src="img-compu/i-3.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox2">                       
                        <input type="text" id="1" class="tex1-texto6" name="producto" value="WHINTER CORE I9">
                        <h2 class="price2">$32,999</h2>
                        <input type="text" class="tex2-precio" name="pro" value="32999">
                        <input type="submit" value="Añadir" class="buy2">
                    </form>
                </div>

                <!--Producto 4-->
                <div class="card2">
                    <div class="imgBox2">
                        <img src="img-compu/i-4.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox2">                      
                        <input type="text" id="1" class="tex1-texto7" name="producto" value="GREYBOX CORE I9">
                        <h2 class="price2">$31,999</h2>
                        <input type="text" class="tex2-precio" name="pro" value="31999">
                        <input type="submit" value="Añadir" class="buy2">
                    </form>
                </div>             
            </div>
        </section>

        <!-- NVIDIA GEFORCE -->
        <section class="top-products3">
            <h1>NVIDIA GEFORCE</h1>
            <div class="container-cad3">
                <!--Producto 1-->
                <div class="card3">
                    <div class="imgBox3">
                        <img src="img-compu/a-1.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox3">                        
                        <input type="text" id="1" class="tex1-texto8" name="producto" value="SONIC PC RTX3060">
                        <h2 class="price3">$24999</h2>
                        <input type="text" class="tex2-precio" name="pro" value="24999">
                        <input type="submit" value="Añadir" class="buy3">
                    </form>
                </div>

                <!--Producto 2-->
                <div class="card3">
                    <div class="imgBox3">
                        <img src="img-compu/a-2.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox3">
                        <input type="text" id="1" class="tex1-texto9" name="producto" value="DEKU RTX RYZEN 9">
                        <h2 class="price3">$30999</h2>                        
                        <input type="text" class="tex2-precio" name="pro" value="30999">
                        <input type="submit" value="Añadir" class="buy3">
                    </form>
                </div>

                <!--Producto 3-->
                <div class="card3">
                    <div class="imgBox3">
                        <img src="img-compu/a-3.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox3">                     
                        <input type="text" id="1" class="tex1-texto10" name="producto" value="ALLIANCE RTX3090 I9">
                        <h2 class="price3">$40999</h2>
                        <input type="text" class="tex2-precio" name="pro" value="40999">
                        <input type="submit" value="Añadir" class="buy3">
                    </form>
                </div>
                <!--Producto 4-->
                <div class="card3">
                    <div class="imgBox3">
                        <img src="img-compu/a-4.png" alt="compu1"/>
                    </div>
                    <form action="ingresado.php" method="POST" class="contentBox3">                     
                        <input type="text" id="1" class="tex1-texto11" name="producto" value="CLASSIC SPIDERMAN I7">
                        <h2 class="price3">$28999</h2>
                        <input type="text" class="tex2-precio" name="pro" value="28999">
                        <input type="submit" value="Añadir" class="buy3">
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
                            <button class="button-2">SUSCRIBIRSE</button>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p> Desarrollado por Sebastian y Joksan &copy; 2024 </p>
                    <img src="img-compu/payment.png" alt="Pagos">
                </div>
            </div>
        </footer>	
</body>
</html>
