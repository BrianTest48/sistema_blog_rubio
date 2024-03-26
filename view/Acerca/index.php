<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Blog Alex Rubio - Acerca De</title>
    <?php require_once('../Main/mainheadpanel.php'); ?>
</head>

<body>


    <?php
    require_once('../Main/preloader.php');
    require_once('../Main/headpanel.php');
    ?>

    <!-- *****************************************************************
    ** Section ***********************************************************
    ****************************************************************** -->

    <section class="masterpb-container content-posts" style="margin-top: 5px;">

        <?php
            require_once('../Main/carousel.php');
        ?>


        <!-- CONTENT -->
        <div class="content about-us col-xs-8">

            <div class="container-post">

                <!-- ARTICLE 1 -->
                <article>
                    <h2><a href="#">ACERCA DE MI</a></h2>
                    <div class="post-image">
                        <img src="../../assets/img/foto.JPG" alt="post image 1" id="acer_imagen">
                    </div>
                    <div class="post-text">
                        <p class="text" id="acer_mensaje" style="font-size: 15px;">Alex Rubio - San Miguel Bienvenidos a mi blog, donde exploraré cómo la tecnología puede transformar y mejorar nuestro entorno, centrándome específicamente en cómo un distrito puede prosperar y evolucionar con la implementación de soluciones tecnológicas innovadoras! Acompáñenme mientras analizo estrategias, tendencias y casos de estudio que demuestran cómo la tecnología puede impulsar el desarrollo, la eficiencia y la calidad de vida en un distrito. ¡Juntos, descubriremos las infinitas posibilidades de construir comunidades más inteligentes y conectadas!</p>


                        <!-- <ul class="bullet">
                            <li class="text">Cum sociis natoque penatibus et magnis dis parturient montes </li>
                            <li class="text">Nascetur ridiculus mus. Maecenas vitae tristique ipsum</li>
                            <li class="text">Etiam hendrerit arcu nec scelerisque pulvinar</li>
                            <li class="text">Praesent at ligula quis metus placerat semper</li>
                        </ul>

                        <div class="gallery">
                            <div class="item-gallery-left">
                                <img src="img/all-img/about-us-gallery-1.jpg">
                                <img src="img/all-img/about-us-gallery-2.jpg">
                            </div>
                        </div>

                         -->


                    </div>

                </article>

            </div><!-- POST-CONTAINER -->

        </div>


        <!-- SIDEBAR -->
        <div class="sidebar about-us col-xs-4">

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


    </section>


    <!-- *****************************************************************
    ** Footer ************************************************************
    ****************************************************************** -->

    <?php
    require_once('../Main/footer.php');
    require_once('../Main/mainjs.php');
    ?>

    <script src="./acerca.js"></script>

</body>

</html>