<!-- <div class="widget widget-gallery">
    <div class="box-widget-title">

    </div>
    <div class="image">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../assets/img/1slider.jpg" class="d-block w-100 banner img-fluid" alt="image gallery 1">
                </div>
                <div class="carousel-item">
                    <img src="../../assets/img/2slider.jpg" class="d-block w-100 banner img-fluid" alt="image gallery 2">
                </div>
                <div class="carousel-item">
                    <img src="../../assets/img/3slider.jpg" class="d-block w-100 banner img-fluid" alt="image gallery 3">
                </div>
            </div>

 
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
</div> -->


<div class="widget widget-gallery">
    <div class="box-widget-title">
        <!-- Título del widget, si lo deseas -->
    </div>
    <div class="image">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators" id="carouselIndicators"></ol>

            <!-- Imágenes del slider -->
            <div class="carousel-inner" id="carouselInner"></div>

            <!-- Controles del slider -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->


<!-- <script>

    var rutas = 'https://admin.alexrubiosanmiguel.com/assets/portada/';

    document.addEventListener("DOMContentLoaded", function() {
        // Hacer la consulta AJAX al servidor
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '../../controller/portadacontrolador.php?op=listar', true);
        xhr.setRequestHeader('Content-Type', 'application/json');

        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                var response = JSON.parse(xhr.responseText);
                console.log(response);

                response.forEach(function(item, index) {
                    var image = item.imagen;
                    var indicatorClass = (index === 0) ? 'active' : ''; // Activa el primer indicador
                    var carouselItemClass = (index === 0) ? 'carousel-item active' : 'carousel-item';

                    // Agrega el indicador al carrusel
                    var indicators = document.getElementById('carouselIndicators');
                    var li = document.createElement('li');
                    li.setAttribute('data-target', '#carouselExampleIndicators');
                    li.setAttribute('data-slide-to', index.toString());
                    li.className = indicatorClass;
                    indicators.appendChild(li);

                    // Agrega la imagen al carrusel
                    var carouselInner = document.getElementById('carouselInner');
                    var div = document.createElement('div');
                    div.className = carouselItemClass;
                    var img = document.createElement('img');
                    img.src = rutas + image; // Cambia 'rutas' por la ruta adecuada
                    img.className = 'd-block w-100 banner img-fluid';
                    img.alt = 'image gallery ' + (index + 1);
                    div.appendChild(img);
                    carouselInner.appendChild(div);
                });
            } else {
                console.error('Error al obtener imágenes:', xhr.statusText);
            }
        };

        xhr.onerror = function() {
            console.error('Error al obtener imágenes:', xhr.statusText);
        };

        xhr.send();
    });
</script> -->