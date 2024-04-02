<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="../../public/img/favicon.png" />

<link rel="stylesheet" type="text/css" href="../../public/css/fontawesome.min.css">
<!-- STYLES -->
<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../public/css/slippry.css">
<link rel="stylesheet" type="text/css" href="../../public/css/fonts.css">

<link rel="stylesheet" type="text/css" href="../../public/css/style.css">


<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Marck+Script&subset=cyrillic,latin-ext" rel="stylesheet">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<style>
    body {
        background-color: #F6F6F6;
    }

    .image-articulo{ 
        height: 220px; 
    }

    #text_post {
        font-size: 1.5rem;
    } 

    .post-by a {
        cursor: pointer;
    }

    .texto-truncado {
        /*width: 250px; 
        white-space: nowrap; 
        overflow: hidden; 
        text-overflow: ellipsis; */
        width: 250px; /* Ancho máximo del contenedor */
        white-space: normal; /* Permite que el texto se divida en varias líneas */
        overflow: hidden; /* Oculta el texto que se desborda del contenedor */
        text-overflow: ellipsis; /* Muestra puntos suspensivos cuando el texto se corta */
        display: block; /* Hace que el contenedor sea un bloque para forzar el salto de línea */
        text-align: left; /* Alinea el texto a la izquierda */
    }

    .post-image-left{
        width: 100px !important;
        height: 85px !important;
    }

    a.social-media{
        pointer-events: none !important;
    }

    /* Cambiar el tamaño de la fuente de SweetAlert2 */
    .swal2-popup {
        font-size: 16px; /* Ajusta el tamaño de la fuente según tu preferencia */
    }

    /* Opcional: Cambiar el tamaño de la fuente del título y el texto del cuerpo */
    .swal2-title {
        font-size: 20px; /* Ajusta el tamaño de la fuente del título según tu preferencia */
    }

    .swal2-content {
        font-size: 16px; /* Ajusta el tamaño de la fuente del contenido según tu preferencia */
    }


</style>