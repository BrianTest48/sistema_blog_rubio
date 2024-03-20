<?php
    class Articulo extends Conectar{

        public function get_articulos(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM articulos ORDER BY id DESC";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_last_articulos(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM articulos ORDER BY id DESC LIMIT 4;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_articulo_id($cur_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM articulos WHERE id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cur_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
       
    }
?>