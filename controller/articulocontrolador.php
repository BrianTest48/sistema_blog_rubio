<?php
    /* Llamando a cadena de Conexion */
    require_once("../config/conexion.php");
    /* Llamando a la clase */
    require_once("../model/Articulo.php");
    /* Inicializando Clase */
    $articulo = new Articulo();

    /* Opcion de solicitud de controller */
    switch($_GET["op"]){
        case "listar_tags":
            $datos=$articulo->get_articulos_tag($_POST['tag']);
            
            echo json_encode($datos);
        break;
       
        case "listar":
                $datos=$articulo->get_articulos();
                
                echo json_encode($datos);
            break;
        case "listar_ultimos":
            $datos=$articulo->get_last_articulos();
            echo json_encode($datos);
            break;
        case "mostrar":
            $datos = $articulo->get_articulo_id($_POST["art_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["id"] = $row["id"];
                    $output["titulo"] = $row["titulo"];
                    $output["extracto"] = $row["extracto"];
                    $output["fecha"] = $row["fecha"];
                    $output["texto"] = $row["texto"];
                    $output["thumb"] = $row["thumb"];
                }
                echo json_encode($output);
            }
            break;
    }
?>