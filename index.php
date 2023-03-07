<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Coca cola es la bebida y bla bla bla bla">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="bebida, gaseosa, cola">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            Inicio - Coca Cola
        </title>
        <link rel="shortcut icon" href="./img/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./fonts.css">

    </head>
    <body>
        <header>
            <div class="container">
                <a href="index.html">
                    <img src="./img/logo.svg" class="logo">
                </a>
                <nav>
                    <a href="#inicio">Inicio</a>
                    <a href="#nosotros">Nosotros</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#galeria">Galeria</a>
                    <a href="#contactenos">Contáctenos</a>
                </nav>
                <a href="#" class="hamb"><i class="icon-menu"></i></a>
            </div>
        </header>
    <main>
        <section id="inicio">
            <img src="./img/bannerprincipal.jpg">
            <div class="bloque-inicio">
                <h1>Bienvenidos a Coca Cola</h1>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Praesent at auctor 
                    nisi. Sed ultricies non odio ac 
                    sagittis.
                </p>
                <a href="#nosotros" class="boton boton-rojo">Ver más</a>
            </div>
        </section>
        <section id="nosotros" class="seccion">
            <div class="container">
                <p>Aliquam vel nisi in dolor 
                tempor tincidunt. Pellentesque finibus 
                condimentum eros, eu fringilla neque 
                malesuada at. Aliquam rhoncus elementum 
                risus, eu fermentum metus rhoncus quis. 
                Suspendisse vitae nisi nisi.</p>
            </div>
        </section>
        <section id="servicios"  class="seccion">
            <div class="container">
                <div class="row">
                    <div class="columna columna-33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="./img/servicio1.jpg">
                            </div>
                            <div class="bloque-contendio-servicio">
                                <h3>Servicio 1</h3>
                                <p>eu fringilla neque 
                                malesuada at. Aliquam rhoncus elementum 
                                risus, eu fermentum metus rhoncus quis. 
                                Suspendisse vitae nisi nisi.</p>
                                <a href="#" class="boton boton-blanco">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="columna columna-33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="./img/servicio2.jpg">
                            </div>
                            <div class="bloque-contendio-servicio">
                                <h3>Servicio 2</h3>
                                <p>eu fringilla neque 
                                malesuada at. Aliquam rhoncus elementum 
                                risus, eu fermentum metus rhoncus quis. 
                                Suspendisse vitae nisi nisi.</p>
                                <a href="#" class="boton boton-blanco">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="columna columna-33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="./img/servicio3.jpg">
                            </div>
                            <div class="bloque-contendio-servicio">
                                <h3>Servicio 3</h3>
                                <p>eu fringilla neque 
                                malesuada at. Aliquam rhoncus elementum 
                                risus, eu fermentum metus rhoncus quis. 
                                Suspendisse vitae nisi nisi.</p>
                                <a href="#" class="boton boton-blanco">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="galeria">
            <div class="container-fluid">
                <div class="row">
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="./img/servicio1.jpg">
                            <h4>Imaen1</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="./img/servicio2.jpg">
                            <h4>Imaen2</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="./img/servicio3.jpg">
                            <h4>Imaen3</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="./img/servicio4.jpg">
                            <h4>Imaen4</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="./img/servicio5.jpg">
                            <h4>Imaen5</h4>
                        </div>
                    </div>
                    <div class="columna-33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="./img/servicio6.jpg">
                            <h4>Imaen6</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contactenos" class="seccion">
            <iframe width="520" height="400" 
            frameborder="0" id="gmap_canvas"
            src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=calle%2013%206%208%20Neiva+(Coca%20Cola)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <div class="container-fluid">
                <div class="row">
                    <div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
                        <form action="index.php" method="post">
                            <div class="form-block">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-block">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-block">
                                <textarea name="mensaje" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-block bloque-ultimo">
                                <input type="submit" class="boton boton-negro" value="Enviar">
                            </div>
                            <?php

                                if($_SERVER["REQUEST_METHOD"] == "POST")
                                {
                                    $nombre = $_POST["nombre"] ;
                                    $email = $_POST["email"] ;
                                    $mensaje = $_POST["mensaje"] ;

                                    if(isset($nombre))
                                    {
                                        if(isset($email))
                                        {
                                            if(isset($mensaje))
                                            {
                                                $para = "oscarleon.1548@hotmail.com";
                                                $asunto = "Prueba";
                                                $cuerpo = $nombre. "\n".$email."\n".$mensaje;
                                                $adicional = "From: oscarleon.1548@gmail.com"

                                                mail($para,$asunto,$cuerpo,$adicional);
                                            ?>
                                                <p>Envio exitoso</p>
                                            <?php
                                            }
                                        }
                                    }

                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="columna columna-25 columna-mobile-100">
                    <img src="./img/logo-blanco.png" class="logo-footer">
                    <p>
                        Adicionando su negocio a Google Maps 
                        también ayuda a los clientes potenciales 
                        a encontrarte más facilmente y permite 
                        a tu negocio de mantenerse al margen 
                        con prominencia en comparación con tus 
                        competidores
                    </p>
                </div>
                <div class="columna columna-25 columna-mobile-100">
                    <h3>
                        Temas Relacionados
                    </h3>
                    <ul>
                        <li><a href="#">Tema 1</a></li>
                        <li><a href="#">Tema 2</a></li>
                        <li><a href="#">Tema 3</a></li>
                    </ul>
                </div>
                <div class="columna columna-25 columna-mobile-100">
                    <h3>
                        Datos de Contacto
                    </h3>
                    <ul>
                        <li>oscar.1990@gmail.com</li>
                        <li>+13544323434</li>
                        <li>Av siempre Viva 1234<br>Springfield - 
                        Estados Unidos</li>
                    </ul>
                </div>
                <div class="columna columna-25 columna-mobile-100">
                    <h3>
                        Redes Sociales
                    </h3>
                    <ul class="redes">
                        <li>
                            <a href="#">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="barra-footer">
            &copy; Derechos de autor - 2022
        </div>
    </footer>
        <script src="./js/jquery.js"></script>
        <script src="./js/funciones.js"></script>
    </body>
</html>