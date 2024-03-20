$(document).ready(function() {
    $('#login-form').submit(function(event) {
        // Evitar que el formulario se envíe de forma predeterminada
        event.preventDefault();

        // Obtener los valores de usuario y contraseña del formulario
        var username = $('#username').val();
        var password = $('#password').val();

        // Validar que los campos no estén vacíos
        if (username.trim() === '' || password.trim() === '') {
            //alert('Por favor, ingrese su nombre de usuario y contraseña.');
            swal('Por favor, ingrese su nombre de usuario y contraseña.', '', 'error');
            return;
        }

        // Enviar los datos del formulario por AJAX
        $.ajax({
            url: 'url_de_tu_controlador', // Especifica la URL de tu controlador
            method: 'POST', // Método de solicitud HTTP
            data: $(this).serialize(), // Serializa los datos del formulario
            success: function(response) {
                // Aquí puedes manejar la respuesta del servidor
                // Por ejemplo, mostrar una alerta de éxito con SweetAlert
                if (response === 'success') {
                    //swal('¡Éxito!', 'Inicio de sesión exitoso', 'success');
                } else {
                    swal('¡Error!', 'Inicio de sesión fallido', 'error');
                }
            },
            error: function() {
                // Manejar errores en la solicitud AJAX
                swal('¡Error!', 'Ha ocurrido un error al procesar la solicitud', 'error');
            }
        });
    });
});
