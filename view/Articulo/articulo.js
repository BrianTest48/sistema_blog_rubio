var ruta = 'https://admin.alexrubiosanmiguel.com/assets/img/';

$(document).ready(function() {

    var rutaActual = window.location.href;

    $('#div-comment').attr('data-href', rutaActual);
    /*var ruta20 = 'https://alexrubiosanmiguel.com/view/Articulo/index.php?id=31';

    if(rutaActual === ruta20){
        $('#art_20').show();
    }else {
        $('#art_20').hide();
    }*/

    //Ocultar Logo
    $('#box_logo').hide();

   // Obtener la cadena de consulta de la URL
    var queryString = window.location.search;

    // Parsear la cadena de consulta para obtener los parámetros
    var parametros = new URLSearchParams(queryString);

    // Obtener el valor del parámetro "parametro"
    var valorParametro = parametros.get("id");

    // Hacer lo que necesites con el valor del parámetro
    //console.log("El valor del parámetro es:", valorParametro);


    $.ajax({
        type: 'POST',
        url: '../../controller/articulocontrolador.php?op=mostrar', // Ruta de tu script PHP que manejará la solicitud POST
        data : { art_id : valorParametro},
        dataType : 'JSON',
        success: function(response) {
            //$('#respuesta').html(response); // Mostrar la respuesta del servidor en un div
            //console.log(response);   
            $('#title_post').html(response.titulo);
            $('#date_post').html(formatearFecha(response.fecha));
            $('#text_post').html(response.texto);
            $('#img_post').attr('src', ruta + response.thumb);
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Manejo de errores
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
