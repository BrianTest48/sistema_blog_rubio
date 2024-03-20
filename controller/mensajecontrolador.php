<?php
/* Llamando a cadena de Conexion */
require_once("../config/conexion.php");
/* Llamando a la clase */
require_once("../model/Mensaje.php");
/* Inicializando Clase */
$mensaje = new Mensaje();

/* Opcion de solicitud de controller */
switch ($_GET["op"]) {

        /*case "listar":
            $datos=$mensaje->get_mensaje();
            $data = Array();
            foreach ($datos as $row) {
                $sub_array = array();
                $sub_array[] = $row["id"];
                $sub_array[] = $row["correo"];
                $sub_array[] = $row["fecha"];
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);awdawdawd
            echo json_encode($results);
            break;*/

    case "guardar":
        if (isset($_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['mensaje'])) {
            $nombre = $_POST['nombre'];
            $celular = $_POST['telefono'];
            $correo = $_POST['correo'];
            $msg = $_POST['mensaje'];

            // Verificar si el correo ya ha enviado un mensaje
            $data = $mensaje->get_mensaje_por_correo($correo);

            // Si $data está vacío, significa que el correo no ha enviado un mensaje y podemos proceder a insertarlo
            if (empty($data)) {
                // Insertar el mensaje en la base de datos o realizar otras acciones necesarias
                $datos = $mensaje->insert_mensaje($nombre, $celular, $correo, $msg);

                // Crear el JSON response para un nuevo mensaje guardado exitosamente
                $response = array(
                    'success' => true,
                    'mensaje' => 'Mensaje guardado correctamente.',
                    'data' => $datos
                );
            } else {
                // El correo ya ha enviado un mensaje
                $response = array(
                    'success' => false,
                    'mensaje' => 'Este correo ya ha enviado una solicitud anteriormente.'
                );
            }

            // Devolver el JSON response
            echo json_encode($response);
        } else {
            // No se han proporcionado todos los datos necesarios
            $response = array(
                'success' => false,
                'mensaje' => 'No se han proporcionado todos los datos necesarios.'
            );

            // Devolver el JSON response
            echo json_encode($response);
        }
        break;
}
