<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Blog Alex Rubio - Login</title>
    <?php require_once('../Main/mainheadpanel.php'); ?>
    <style>
        .container-post {
            display: flex;
            /* Usamos flexbox para centrar el contenido */
            justify-content: center;
            /* Centramos horizontalmente */
            align-items: center;
            /* Centramos verticalmente */
            height: 70vh;
            /* Altura del contenedor */
        }

         /* Estilos adicionales para el formulario */
         form {
            width: 100%;
            text-align: center;
        }

        .form-control {
            margin-bottom: 10px;
            width: 100%;
        }

        .btn {
            margin-top: 10px;
            font-size: 12px;
        }

        /* Estilos adicionales para la imagen */
        .login-image {
            max-width: 300px;
            margin-bottom: 10px;
        }
        /* Estilos para los label */
        label {
            text-align: left; /* Orientación a la izquierda */
            display: block; /* Asegura que los labels se muestren en una línea separada */
            font-size: 12px; /* Tamaño de letra aumentado */
            font-weight: bold; /* Texto en negrita */
        }
    </style>
</head>

<body>



    <?php
    require_once('../Main/preloader.php');
    //require_once('../Main/headpanel.php');
    ?>


    <!-- *****************************************************************
    ** Section ***********************************************************
    ****************************************************************** -->

    <section class="masterpb-container content-posts">


        <!-- CONTENT -->
        <div class="content post-full-width col-xs-12">

            <div class="container-post">

                <!-- ARTICLE 1 -->
                <article style="width: 50%;">
                    <h2><a href="javascript:(0)">INICIAR SESION</a></h2>

                    <form id="login-form" method="POST">
                        <img src="../../public/img/logo-footer.png" alt="Logo de la empresa" class="login-image">
                        <div class="post-text">
                            <label for="username">Usuario:</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="post-text">
                            <label for="password" >Contraseña:</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <button class="btn btn-primary" type="submit">Ingresar</button>
                    </form>

                </article>




            </div><!-- POST-CONTAINER -->


        </div>



        <div class="clearfix"></div>




    </section>


    <?php
    //require_once('../Main/footer.php'); 
    require_once('../Main/mainjs.php');
    ?>

    <script src="./login.js"></script>

</body>

</html>