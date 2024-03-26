<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Blog Alex Rubio</title>
    <?php require_once('../Main/mainheadpanel.php'); ?>

    <style>
        .post-text {
            max-width: 100%;
            /* Establecer el ancho máximo para el contenedor del extracto */
            white-space: nowrap;
            /* Evitar el salto de línea */
            overflow: hidden;
            /* Ocultar el texto que exceda el ancho máximo */
            text-overflow: ellipsis;
            /* Agregar puntos suspensivos al final del texto truncado */
        }

        .post-image-left {
            width: 100px !important;
            height: 85px !important;
        }
    </style>
</head>

<body>

    <?php
    require_once('../Main/preloader.php');
    require_once('../Main/headpanel.php');
    ?>




    <!-- *****************************************************************
    ** Section ***********************************************************
    ****************************************************************** -->

    <section class="masterpb-container content-posts mt-0">

        <?php
        require_once('../Main/carousel.php');
        ?>


        <!-- CONTENT -->
        <div class="content blog-2-column-with-sidebar col-xs-12">
            <div class="content col-xs-8">

                <div id="articulos">

                </div>


                <div class="clearfix"></div>

                <!-- NAVIGATION -->
                <div class="navigation">
                    <a id="btnAnterior" class="prev"><i class="icon-arrow-left8"></i> Atras</a>
                    <a id="btnSiguiente" class="next">Siguiente <i class="icon-arrow-right8"></i></a>
                    <div class="clearfix"></div>
                </div>




            </div><!-- CONTENT COL-XS-8 -->



            <!-- SIDEBAR -->
            <div class="sidebar col-xs-4">



                <!-- <div class="widget about-me">
                    <div class="ab-image">
                        <img src="../../public/img/all-img/about-me.jpg" alt="about me">
                    </div>
                    <div class="ad-text">
                        <span class="signing">ad-theme</span>
                        <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
 -->

                <!-- LATEST POSTS -->
                <div class="widget latest-posts">
                    <h3>
                        <a class="widget-title" href="#">Ultimos Posts</a>
                    </h3>
                    <div class="posts-container" id="post-container">



                        <div class="clearfix"></div>
                    </div>
                </div>


                <!-- FOLLOW US -->
                <div class="widget follow-us">
                    <h3>
                        <a class="widget-title" href="#">Sigueme</a>
                    </h3>
                    <div class="follow-container">
                        <a class="social" href="https://www.facebook.com/profile.php?id=100092524513379&mibextid=LQQJ4d" target="_blank"><img style="padding: 5px;" src="../../assets/icons/facebook.png" alt="Descripción del icono"></a>
                        <a class="social" href="https://twitter.com/AlexRubioAI" target="_blank"><img style="padding: 5px;" src="../../assets/icons/gorjeo.png" alt="Descripción del icono"></a>
                        <a class="social" href="https://www.instagram.com/alexrubio_sanmiguel/" target="_blank"><img style="padding: 5px;" src="../../assets/icons/instagram.png" alt="Descripción del icono"></a>
                        <a class="social" href="https://www.threads.net/@alexrubio_sanmiguel" target="_blank"><img style="padding: 5px;" src="../../assets/icons/threads.png" alt="Descripción del icono"></a>
                        <a class="social" href="https://www.tiktok.com/@alexrubio_sanmiguel" target="_blank"><img style="padding: 5px;" src="../../assets/icons/tik-tok.png" alt="Descripción del icono"></a>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <!-- TAGS -->
                <div class="widget tags">
                    <h3>
                        <a class="widget-title" href="#">Tags</a>
                    </h3>
                    <div class="tags-container">
                        
                    </div>
                    <div class="clearfix"></div>
                </div>


                <!-- ADVERTISING -->
                <div class="widget advertising">
                    <div class="advertising-container">
                        <img src="../../public/img/350x300.png" alt="banner 350x300">
                    </div>
                </div>


                <!-- NEWSLETTER -->
                <div class="widget newsletter">
                    <h3>
                        <a class="widget-title" href="#">BOLETIN</a>
                    </h3>
                    <div class="newsletter-container">
                        <h4>NO TE PIERDAS NUESTRAS NOTICIAS</h4>
                        <p>Regístrate y recibe el <br> ultimas noticias de nuestra empresa</p>
                        <form id="suscripcionForm">
                            <input type="email" class="newsletter-email" id="correo_destinatario" placeholder="Su dirección de correo electrónico..">
                            <button type="button" id="enviarCorreo" class="newsletter-btn">Enviar</button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div> <!-- #SIDEBAR -->

            <div class="clearfix"></div>


        </div><!-- POST-CONTAINER -->



        </div>

        <div class="clearfix"></div>

        
    </section>

    <?php
    require_once('../Main/footer.php');
    require_once('../Main/mainjs.php');
    ?>




    <script src="./inicio.js"></script>

</body>

</html>