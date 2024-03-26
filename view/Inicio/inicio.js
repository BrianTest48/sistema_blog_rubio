var registrosJSON = []; // Aquí guardas tus registros obtenidos de la base de datos
var indiceInicial = 0;
var segmento = 10;

var ruta = 'https://admin.alexrubiosanmiguel.com/assets/img/';

$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: '../../controller/tagcontrolador.php?op=listar_tag', 
        dataType : 'JSON',
        success: function(data) {

            data.forEach(function(tag) {
                var html = '<a href="#" onclick="MostrarTag(`'+tag.nombre+'`)">'+ tag.nombre +'</a>';          
                $('.tags-container').append(html);
            });
            
            
            
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Manejo de errores
        }
    });

    $.ajax({
        type: 'POST',
        url: '../../controller/articulocontrolador.php?op=listar', // Ruta de tu script PHP que manejará la solicitud POST
        dataType : 'JSON',
        success: function(response) {
            //$('#respuesta').html(response); // Mostrar la respuesta del servidor en un div
            //console.log(response);
            registrosJSON = response;
            mostrarArticulos();
            
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Manejo de errores
        }
    });

    $.ajax({
        type: 'POST',
        url: '../../controller/articulocontrolador.php?op=listar_ultimos', 
        dataType : 'JSON',
        success: function(data) {
            //$('#respuesta').html(response); // Mostrar la respuesta del servidor en un div
            console.log(data);

            data.forEach(function(post) {
                var html = '<div class="item">';
                html += '<img src="' + ruta + post.thumb + '" alt="' + post.titulo + '" class="post-image post-image-left">';
                html += '<div class="info-post">';
                html += '<h5><a href="#" onclick="Seguir('+post.id+')">' + post.titulo + '</a></h5>';
                html += '<span class="date">' + formatearFecha(post.fecha) + '</span>';
                html += '</div>';
                html += '<div class="clearfix"></div>';
                html += '</div>';
                
                $('#post-container').append(html);
            });
            
            
            
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Manejo de errores
        }
    });

    $('#enviarCorreo').click(function() {
        // Obtener el valor del campo de correo electrónico
        var correo = $('#correo_destinatario').val();

        // Validar si el campo de correo electrónico está vacío
        if (correo === '') {
            // Si está vacío, muestra un mensaje de error con SweetAlert2
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, ingrese su dirección de correo electrónico.',
            });
        } else {
            // Si no está vacío, enviar una solicitud AJAX a tu controlador
            $.ajax({
                url: '../../controller/boletincontrolador.php?op=guardar',
                method: 'POST',
                data: { correo: correo }, // Aquí puedes enviar cualquier otro dato necesario
                dataType: 'JSON',
                success: function(response) {
                   
                    if(response.success){
                        Swal.fire({
                            icon: 'success',
                            title: '¡Éxito!',
                            text: '¡Correo electrónico registrado correctamente!',
                        });
                    }else {
                        Swal.fire({
                            icon: 'warning',
                            title: '',
                            text: response.mensaje,
                        });
                    }
                    

                    $("#suscripcionForm")[0].reset();
                },
                error: function(xhr, status, error) {
                    // Manejar el error en caso de que ocurra durante la solicitud AJAX
                    console.error(error);
                    // Mostrar una notificación de error con SweetAlert2
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ha ocurrido un error al enviar el correo electrónico.',
                    });
                }
            });
        }
    });

     // Obtener el parámetro "tag" de la URL
     var urlParams = new URLSearchParams(window.location.search);
     var tag = urlParams.get('tag');
 
     // Verificar si se recibió el parámetro "tag"
     if (tag) {
         // Realizar la solicitud AJAX con el parámetro "tag"
         MostrarTag(tag);
     }
});

function mostrarArticulos() {
    // Limpiar la vista antes de mostrar los nuevos artículos
    $('#articulos').empty();

    // Iterar sobre los artículos en el segmento actual
    for (var i = indiceInicial; i < Math.min(indiceInicial + segmento, registrosJSON.length); i++) {
        var registro = registrosJSON[i];
        // Aquí debes construir el HTML para mostrar el artículo y agregarlo al contenedor '#articulos'
        // Construir el HTML para el registro actual
        var html = '';
        if (i % 2 !== 0) {
            html += '<div class="container-post column-right col-xs-6">';
        } else {
            html += '<div class="container-post column-left col-xs-6">';
        }
        html += '<article>';
        html += '<h3><a href="#">' + registro.titulo + '</a></h3>';
        html += '<div class="post-image"><img class="image-articulo" src="'+ ruta + registro.thumb + '" alt="post image"></div>';
        html += '<div class="post-text">';
        html += '<span class="date info">' +formatearFecha(registro.fecha) + '</span>';
        html += '<p class="text texto-truncado">' + registro.extracto + '</p>';
        html += '</div>';
        html += '<div class="post-info">';
        html += '<div class="post-by"><a onclick="Seguir('+registro.id+')">Seguir Leyendo</a></div>';
        html += '<div class="clearfix"></div>';
        html += '</div>';
        html += '</article>';
        html += '</div>';
        
        // Agregar el HTML al nuevo contenedor de artículos
        $('#articulos').append(html);
    }
}

function MostrarTag(valor){
    console.log(valor);

    $.ajax({
        type: 'POST',
        url: '../../controller/articulocontrolador.php?op=listar_tags',
        data : { tag : valor }, 
        dataType : 'JSON',
        success: function(data) {
            console.log(data);

            registrosJSON = data;
            mostrarArticulos();
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Manejo de errores
        }
    });
}


function formatearFecha(valor) {

    var fecha = new Date(valor);
    // Definir los nombres de los meses en español
    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    // Obtener el día, mes y año de la fecha
    var dia = fecha.getDate();
    var mes = meses[fecha.getMonth()];
    var anio = fecha.getFullYear();

    // Crear la cadena de texto formateada
    var fechaFormateada = dia + " " + mes + " de " + anio;

    // Retornar la fecha formateada
    return fechaFormateada;
}


// Manejador de eventos para el botón "siguiente"
$('#btnSiguiente').on('click', function() {
    if (indiceInicial + segmento < registrosJSON.length) {
        indiceInicial += segmento;
        mostrarArticulos();
    }
});

// Manejador de eventos para el botón "anterior"
$('#btnAnterior').on('click', function() {
    if (indiceInicial - segmento >= 0) {
        indiceInicial -= segmento;
        mostrarArticulos();
    }
});

function Seguir(valor){
    console.log("SeguirLeyendo");
    console.log(valor);

    window.location.href = "../Articulo/index.php?id=" + encodeURIComponent(valor);

}


// Función para agregar la clase 'active' al enlace correspondiente
function setActiveLink() {
    var currentUrl = window.location.href;
    var links = document.querySelectorAll('.masterpb-menu a');

    links.forEach(function(link) {
        if (link.href === currentUrl) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Ejecutar la función al cargar la página
window.onload = setActiveLink;
