var ruta = 'https://admin.alexrubiosanmiguel.com/assets/img/';
var ruta_contacto = 'https://admin.alexrubiosanmiguel.com/assets/contacto/';

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

    //Obtener Datos del Modulo
    $.ajax({
        type: 'POST',
        url: '../../controller/contactocontrolador.php?op=mostrar', 
        data : { cont_id : 1 },
        dataType : 'JSON',
        success: function(data) {
            //$('#respuesta').html(response); // Mostrar la respuesta del servidor en un div
            //console.log(data); 
            $('#cont_imagen').attr('src', ruta_contacto + data.imagen );
            $('#cont_mensaje').html(data.mensaje);
            
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

    $("#formularioComentario").submit(function(event) {
        // Evitar el comportamiento predeterminado del formulario
        event.preventDefault();

        // Obtener los valores de los campos del formulario
        var nombre = $(".nombre").val();
        var telefono = $(".telefono").val();
        var correo = $(".correo").val();
        var mensaje = $(".mensaje").val();

        // Realizar la solicitud AJAX
        $.ajax({
            type: "POST",
            url: "../../controller/mensajecontrolador.php?op=guardar", // Ruta a tu controlador
            data: {
                nombre: nombre,
                telefono: telefono,
                correo: correo,
                mensaje: mensaje
            }, // Datos que enviarás al controlador
            dataType: 'JSON',
            success: function(response) {
                // Manejar la respuesta del controlador
                //console.log(response); // Imprimir respuesta en la consola

                if(response.success){
                    Swal.fire({
                        icon: 'success',
                        title: '¡Comentario enviado!',
                        text: 'Gracias por tu comentario.',
                    });
                }else {
                    Swal.fire({
                        icon: 'warning',
                        title: '',
                        text: response.mensaje,
                    });
                }
                // Mostrar una notificación de éxito
                

                // Limpiar los campos del formulario después de enviar
                $("#formularioComentario")[0].reset();
            },
            error: function(xhr, status, error) {
                // Manejar errores de la solicitud AJAX
                console.error(xhr.responseText); // Imprimir error en la consola
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocurrió un error al procesar tu comentario. Por favor, inténtalo de nuevo más tarde.',
                });
            }
        });
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

function MostrarTag(valor){
    console.log(valor);
    var parametro = "tag=" + encodeURIComponent(valor); // Codificar el valor del parámetro
    window.location.href = "../Inicio?" + parametro;

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
