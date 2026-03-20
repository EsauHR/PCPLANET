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
<html>
    <head>
        <link rel="stylesheet" href="http://localhost/PCPLANET/PRINCIPAL.css" type="text/css"/>
        <link rel="stylesheet" href="SLIDER.css" type="text/css"/>
        <title>PCPLANET</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ICONOS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href="Logo.ico">
    </head>
    <body>
        
        <!-- HEADER -->
        <header class="header">
            <div class="menu container2">
                <a class="logo">PCPLANET</a>
                <input type="checkbox" id="menu"/>
                <label for="menu">
                    <img src="img-inicio/menu.png" class="menu-icono" alt="">
                </label>

                <nav class="navbar">
                    <ul class="men">
                        <li><a class="active">INICIO</a></li>
                        <li><a href="Computadoras.php">COMPUTADORAS</a></li>
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
                            <a href="Buscar.php"><i class='bx bx-search-alt'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- SLIDER -->
        <section class="banner">
            <div class="carousel">
                <div class="carruseles" id="slider">
                    <section class="slider-section">
                        <a href="https://www.xtremepc.com.mx/" target="_blank"></a>
                        <img src="img-inicio/slider/Fond-1.png" alt="img1"/>
                    </section>
                    <section class="slider-section">
                        <img src="img-inicio/slider/Fond-2.jpg" alt="img2"/>
                    </section>
                    <section class="slider-section">
                        <img src="img-inicio/slider/Fond-3.jpg" alt="img3"/>
                    </section>
                    <section class="slider-section">
                        <img src="img-inicio/slider/Fond-4.jpg" alt="img3"/>
                    </section>
                    <section class="slider-section">
                        <img src="img-inicio/slider/Fond-5.jpeg" alt="img3"/>
                    </section>
                </div>
                <div class="btn-left"><i class='bx bxs-left-arrow'></i></div>
                <div class="slider-text">
                    <h1>TU PC MERECE LO MEJOR<br>Y NOSOTROS LO TENEMOS<br></h1>
                    <div class="main-btn">
                        <a href="#lista-1" class="button">COMPRAR AHORA</a>
                    </div>
                </div>
                <div class="btn-right"><i class='bx bxs-right-arrow'></i></div>
            </div>
        </section>

        <!-- TODO EL CONTENIDO -->
        <main class="main-content"> 
            <!-- CARACTERISTICAS -->
            <section class="container container-features">
                <div class="card-feature">
                    <i class='bx bxs-truck'></i>
                    <div class="feature-content">
                        <span>ENVIO GRATUITO</span>
                        <p>En pedido superior a $50,000</p>
                    </div>
                </div>
                <div class="card-feature2">
                    <i class='bx bx-dollar' ></i>
                    <div class="feature-content2">
                        <span>PAGO 100%</span>
                        <p>Seguro</p>
                    </div>
                </div>

                <div class="card-feature">
                    <i class='bx bxs-coupon'></i>
                    <div class="feature-content">
                        <span>Tarjeta regalo especial</span>
                        <p>Ofrece cupones a nuevos usuarios</p>
                    </div>
                </div>

                <div class="card-feature">
                    <i class='bx bxs-phone-call'></i>
                    <div class="feature-content">
                        <span>SERVICIO TECNICO</span>
                        <p>LLámenos 24/7 al 123-456-7890</p>
                    </div>
                </div>
            </section>

            <!-- CATEGORIAS -->
            <section class="container top-categories">
                <h2>CATEGORIAS PUPULARES</h2>
                <div class="container-categories">
                    <div class="card-category gaming">
                        <p>PC GAMING</p>
                        <a href="#">Ver más</a>
                    </div>
                    <div class="card-category proce">
                        <p>PROCESAORES</p>
                        <a class="a" href="#">Ver más</a>
                    </div>
                    <div class="card-category tecla">
                        <p>TECLADOS</p>
                        <a class="a" href="#">Ver más</a>
                    </div>
                </div>
            </section>

            <!-- OFERTAS DEL DIA -->
            <section class="container top-products"  id="lista-1">
                <h1>OFERTAS DEL DIA</h1>
                <div class="container-cad">
                    <!--Producto 1-->
                    <div class="card">
                        <div class="imgBox">
                            <span class="descuento">-30%</span>
                            <img src="img-inicio/of1.png" alt="compu1"/>
                        </div>
                        <form action="ingresado.php" method="POST" class="contentBox">
                            <input type="text" class="tex1-texto" id="1" name="producto" value="SKRIBBLE">
                            <h2 class="price">$27,899<span>$35,899</span></h2>
                            <input type="text" class="tex2-precio" name="pro" value="27899">
                            
                            <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                        </form>
                    </div>
                    
                    <!--Producto 2-->
                    <div class="card">
                        <div class="imgBox">
                            <span class="descuento">-25%</span>
                            <img src="img-inicio/of2.png" alt="compu1"/>
                        </div>
                        <form action="ingresado.php" method="POST" class="contentBox">
                            
                            <input type="text" id="1" class="tex1-texto1" name="producto" value="ELDER GUARDIAN">
                            <h2 class="price">$21,899<span>$35,439</span></h2>
                            <input type="text" class="tex2-precio" name="pro" value="21899">

                            <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                        </form>
                    </div>
                    <!--Producto 3-->
                    <div class="card">
                        <div class="imgBox">
                            <img src="img-inicio/of3.png" alt="compu1"/>
                            <span class="descuento">-33%</span>
                        </div>
                        <form action="ingresado.php" method="POST" class="contentBox">
                            
                            <input type="text" id="1" class="tex1-texto2" name="producto" value="SONIC">
                            <h2 class="price">$38,899<span>$75,439</span></h2>
                            <input type="text" class="tex2-precio" name="pro" value="38899">

                            <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                        </form>

                    </div>
                    <!--Producto 4-->
                    <div class="card">
                        <div class="imgBox">
                            <span class="descuento">-15%</span>
                            <img src="img-inicio/of4.png" alt="compu1"/>
                        </div>
                        <form action="ingresado.php" method="POST" class="contentBox">
                            
                            <input type="text" id="1" class="tex1-texto" name="producto" value="ALLIANCE">
                            <h2 class="price">$20,999<span>$40,599</span></h2>
                            <input type="text" class="tex2-precio" name="pro" value="20999">

                            <input type="submit" class="agregar-carrito buy" data-id="1" value="Añadir">
                        </form>
                    </div>
                </div>
            </section>

            <!-- GALERIA -->
            <section class="gallery">
                <img src="img-inicio/img1.jpg" alt="Gallery Img1" class="gallery-img-1"/>
                <img src="img-inicio/img2.jpeg" alt="Gallery Img2" class="gallery-img-2"/>
                <img src="img-inicio/img3.png" alt="Gallery Img3" class="gallery-img-3"/>
                <img src="img-inicio/img4.jpg"  alt="Gallery Img4" class="gallery-img-4"/>
                <img src="img-inicio/img5.jpg" alt="Gallery Img5" class="gallery-img-5"/>
            </section>

            <!-- MARCAS ALIADAS -->
             <section class="jarallax">
                <div class="de-gradient-edge-top"></div>
                <div class="de-gradient-edge-bottom"></div>
                <div class="container2 mt-3 game-cards">
                    <div class="flex flex-sb">
                        <div>
                            <div class="subtitle" data-aos="fade-right">Conoce nuestras</div>
                            <h2 class="title mt-15" data-aos="fade-left">MARCAS ALIADAS</h2>
                        </div>
                        <div data-aos="fade-left">
                            <a class="btn-2" href="#">Ver todas las marcas</a>
                        </div>
                    </div>
                    <div class="flex flex-wrap flex-sb g-cards">
                        <div class="gallery-item" data-aos="fade-right">
                            <div class="d-overlay">
                                <div class="d-text">
                                    <h4>RYZEN|RADEON</h4>
                                    <a class="btn_2" href="https://www.amd.com/es/products/processors/laptop/ryzen-for-everyday-productivity.html">Ver mas</a>
                                </div>
                            </div>
                            <img src="img-inicio/marcas/5.webp" class="img-fluid " alt="">
                        </div>
                        <div class="gallery-item" data-aos="fade-right">
                            <div class="d-overlay">
                                <div class="d-label">5% OFF En TODOS LOS PRODUCTOS</div>
                                <div class="d-text">
                                    <h4>INEL CORE</h4>
                                    <a class="btn_2 w-100" href="https://www.intel.la/content/www/xl/es/products/details/processors/core.html">Ver mas</a>
                                </div>
                            </div>
                            <img src="img-inicio/marcas/6.webp" class="img-fluid " alt="">
                        </div>
                        <div class="gallery-item" data-aos="fade-right" >
                            <div class="d-overlay">
                                <div class="d-text">
                                    <h4>ASUS</h4>
                                    <a class="btn_2 w-100" href="https://www.asus.com/mx/">Ver mas</a>
                                </div>
                            </div>
                            <img src="img-inicio/marcas/7.webp" class="img-fluid " alt="">
                        </div>
                        <div class="gallery-item sandbox" data-aos="fade-right">
                            <div class="d-overlay">
                                <div class="d-label">5% OFF En TODOS LOS PRODUCTOS  </div>
                                <div class="d-text">
                                    <h4>NVIDIA</h4>
                                    <a class="btn_2 w-100" href="https://www.nvidia.com/es-la/geforce/graphics-cards/">Ver mas</a>
                                </div>
                            </div>
                            <img src="img-inicio/marcas/8.webp" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section> 

            <!-- BLOGS -->
            <section class="container blogs">
                <h2>ULTIMOS BLOGS</h2>
                <div class="container-blogs">
                    <div class="card-blog">
                        <div class="container-img">
                            <img src="img-inicio/blo1.jpg" alt="Imagen Blog 1" />
                            <div class="button-group-blog">
                                <span>
                                    <i class='bx bx-search-alt'></i>
                                </span>
                                <span>
                                    <i class='bx bx-link' ></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-blog">
                            <h3>¿Qué procesador elegir para tu PC?</h3>
                            <span>10 marzo 2024</span>
                            <p>
                                Explora las diferentes opciones de procesadores 
                                disponibles en el mercado, desde modelos básicos
                                hasta los más avanzados, y cómo elegir el más adecuado
                                según las necesidades del usuario, ya sea para gaming, 
                                trabajo, edición de vídeo, etc.
                            </p>
                            <div class="btn-2">Leer más</div>
                        </div>
                    </div>
                    <div class="card-blog">
                        <div class="container-img">
                            <img src="img-inicio/blo2.jpg" alt="Imagen Blog 2" />
                            <div class="button-group-blog">
                                <span>
                                    <i class='bx bx-search-alt'></i>
                                </span>
                                <span>
                                    <i class='bx bx-link' ></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-blog">
                            <h3>Mitos comunes sobre la refrigeración de PC</h3>
                            <span>10 marzo 2024</span>
                            <p>
                                Desmitifica algunas ideas erróneas sobre 
                                la refrigeración de computadoras, como la 
                                necesidad de refrigeración líquida para todos
                                los sistemas de alta gama, y proporciona consejos 
                                sobre cómo mantener una temperatura óptima en tu PC.
                            </p>
                            <div class="btn-2">Leer más</div>
                        </div>
                    </div>
                    <div class="card-blog">
                        <div class="container-img">
                            <img src="img-inicio/blog3.png" alt="Imagen Blog 3" />
                            <div class="button-group-blog">
                                <span>
                                    <i class='bx bx-search-alt'></i>
                                </span>
                                <span>
                                    <i class='bx bx-link' ></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-blog">
                            <h3>Tendencias actuales en el mundo de las PC</h3>
                            <span>10 marzo 2024</span>
                            <p>
                                Explora las últimas tendencias en tecnología
                                de computadoras, como la llegada de nuevas 
                                arquitecturas de procesadores, avances en tarjetas 
                                gráficas, formatos de almacenamiento emergentes y 
                                cambios en el diseño de los componentes.
                            </p>
                            <div class="btn-2">Leer más</div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

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
                    <img src="img-inicio/payment.png" alt="Pagos">
                </div>
            </div>
        </footer>	

        <!-- SCRIPT -->
        <script src="slider.js"></script>
        
    </body>
</html>

