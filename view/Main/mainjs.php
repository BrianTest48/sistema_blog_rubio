<script src="../../public/js/jquery-1.12.4.min.js"></script>
<script src="../../public/js/slippry.js"></script>
<script src="../../public/js/main.js"></script>

<!-- Archivos JavaScript de Bootstrap 4 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>

    var rutas = 'https://admin.alexrubiosanmiguel.com/assets/portada/';

    $(document).ready(function() {
        // Hacer la consulta AJAX al servidor
        $.ajax({
            url: '../../controller/portadacontrolador.php?op=listar', // Cambia esto por la URL de tu script PHP que maneja la consulta a la base de datos
            method: 'POST', // Método HTTP a utilizar, por ejemplo GET o POST
            dataType: 'JSON',
            success: function(response) {
                console.log(response);


                response.forEach(function(item, index) {
                    console.log(rutas);
                    var image = item.imagen;
                    var indicatorClass = (index === 0) ? 'active' : ''; // Activa el primer indicador
                    var carouselItemClass = (index === 0) ? 'carousel-item active' : 'carousel-item';

                    // Agrega el indicador al carrusel
                    $('#carouselIndicators').append('<li data-target="#carouselExampleIndicators" data-slide-to="' + index + '" class="' + indicatorClass + '"></li>');

                    // Agrega la imagen al carrusel
                    $('#carouselInner').append('<div class="' + carouselItemClass + '"><img src="'+ rutas + image + '" class="d-block w-100 banner img-fluid" alt="image gallery ' + (index + 1) + '"></div>');
                });
            },
            error: function(xhr, status, error) {
                // Maneja el error si la consulta AJAX falla
                console.error('Error al obtener imagenes:', error);
            }
        });
    });
</script>