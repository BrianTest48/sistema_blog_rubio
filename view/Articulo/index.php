<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Blog Alex Rubio - Post</title>
    <?php require_once('../Main/mainheadpanel.php'); ?>
    <style>
        #text_post>* {
            display: contents !important;
            margin-bottom: 10px !important;

            /* Espacio entre los elementos hijos */
        }

        #text_post p {
            text-align: justify;
            font-family: 'Source Sans Pro';
        }

        /* #text_post span {
            text-align: justify;
            font-family: 'Source Sans Pro';
        } */

        #text_post img {
            display: block;
            /* Asegurar que las imágenes sean bloques */
            margin: 0 auto;
            /* Centrar las imágenes horizontalmente */
        }

        #text_post * {
            text-align: justify;
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

    <section class="masterpb-container content-posts" style="margin-top: 15px !important;">

        <?php
        require_once('../Main/carousel.php');
        ?>


        <!-- CONTENT -->
        <div class="content post-full-width col-xs-12">

            <div class="container-post">

                <!-- ARTICLE 1 -->
                <article>
                    <h2><a href="javascript:(0)" id="title_post">MAECENAS CONSECTETUR</a></h2>
                    <div class="post-image">
                        <img id="img_post" src="../../public/img/img_post_full_width/img_big.jpg" width="100%" height="400px" alt="post image 1">
                    </div>
                    <div class="box-data-info">
                        <span class="date info" id="date_post">07 JUNE 2016 - IMG - STYLE</span>
                    </div>
                    <div class="post-text">
                        <div class="container" id="text_post"></div>
                        <br>
                        <br>
                        <br>
                        <div id="art_20">
                            <div id="fb-root"></div>
                            <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v19.0&appId=800636855054213" nonce="1P8wBXBy"></script>
                            <div class="fb-comments" data-href="https://alexrubiosanmiguel.com/view/Articulo/index.php?id=20" data-width="100%" data-numposts="10"></div> -->
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v19.0&appId=313376648046573" nonce="lmASqbUM"></script>
                            <div class="fb-comments" id="div-comment" data-width="100%" data-numposts="50"></div>
                            <!-- <div class="fb-comments" data-href="https://alexrubiosanmiguel.com/view/Articulo/index.php?id=31" data-width="100%" data-numposts="50"></div> -->
                        </div>


                        <div class="social-post">
                            <a class="social" href="https://www.facebook.com/profile.php?id=100092524513379&mibextid=LQQJ4d" target="_blank"><img style="padding: 5px;" src="../../assets/icons/facebook.png" alt="Descripción del icono"></a>
                            <a class="social" href="https://twitter.com/AlexRubioAI" target="_blank"><img style="padding: 5px;" src="../../assets/icons/gorjeo.png" alt="Descripción del icono"></a>
                            <a class="social" href="https://www.instagram.com/alexrubio_sanmiguel/" target="_blank"><img style="padding: 5px;" src="../../assets/icons/instagram.png" alt="Descripción del icono"></a>
                            <a class="social" href="https://www.threads.net/@alexrubio_sanmiguel" target="_blank"><img style="padding: 5px;" src="../../assets/icons/threads.png" alt="Descripción del icono"></a>
                            <a class="social" href="https://www.tiktok.com/@alexrubio_sanmiguel" target="_blank"><img style="padding: 5px;" src="../../assets/icons/tik-tok.png" alt="Descripción del icono"></a>
                        </div>

                    </div>

                </article>


            </div><!-- POST-CONTAINER -->


        </div>

        <!-- NAVIGATION -->
        <div class="navigation">
            <a id="btnAnterior" href="../Inicio/" class="prev"><i class="icon-arrow-left8"></i> Regresar</a>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>




    </section>


    <?php
    require_once('../Main/footer.php');
    require_once('../Main/mainjs.php');
    ?>

    <script src="./articulo.js"></script>

</body>

</html>