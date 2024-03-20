var ruta = 'https://admin.alexrubiosanmiguel.com/assets/img/';
var ruta_cont = 'https://admin.alexrubiosanmiguel.com/assets/acercademi/';

$(document).ready(function() {

    //Obtener Datos del Modulo
    $.ajax({
        type: 'POST',
        url: '../../controller/acercademicontrolador.php?op=mostrar', 
        data : { acer_id : 1 },
        dataType : 'JSON',
        success: function(data) {
            //$('#respuesta').html(response); // Mostrar la respuesta del servidor en un div
            console.log(data); 
            $('#acer_imagen').attr('src', ruta_cont + data.imagen );
            $('#acer_mensaje').html(data.mensaje);
            
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
});

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
