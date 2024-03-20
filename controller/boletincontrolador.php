<?php
/* Llamando a cadena de Conexion */
require_once("../config/conexion.php");
/* Llamando a la clase */
require_once("../model/Boletin.php");
/* Inicializando Clase */
$boletin = new Boletin();

/* Opcion de solicitud de controller */
switch ($_GET["op"]) {

    case "listar":
        $datos = $boletin->get_correos();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["id"];
            $sub_array[] = $row["correo"];
            $sub_array[] = $row["fecha"];
            $data[] = $sub_array;
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case "guardar":
        // Verificar si se ha enviado un correo
        if (isset($_POST['correo'])) {
            $correo = $_POST['correo'];

            // Validar si el correo no está vacío
            if (!empty($correo)) {

                // Verificar si el correo ya está registrado
                $data = $boletin->get_registro_por_correo($correo);
                // Si $data está vacío, significa que el correo no está registrado y podemos proceder a insertarlo
                if (empty($data)) {
                    // Insertar el correo en la base de datos o realizar otras acciones necesarias

                    // Simplemente simulando la inserción para este ejemplo
                    $datos = $boletin->insert_boletin($correo);

                    // Crear el JSON response para un nuevo registro exitoso
                    $response = array(
                        'success' => true,
                        'mensaje' => 'Correo registrado correctamente.',
                        'data' => $datos
                    );
                } else {
                    // El correo ya está registrado
                    $response = array(
                        'success' => false,
                        'mensaje' => 'El correo ya está registrado.'
                    );
                }

                // Devolver el JSON response
                echo json_encode($response);
            } else {
                // Correo está vacío
                $datos = array('success' => false, 'mensaje' => 'El campo de correo está vacío. Por favor, ingrese un correo válido.');
                // Devolver el JSON response
                echo json_encode($datos);
            }
        } else {
            // No se ha enviado el correo
            $datos = array('success' => false, 'mensaje' => 'No se ha proporcionado ninguna dirección de correo.');

            // Devolver el JSON response
            echo json_encode($datos);
        }

        break;
}
