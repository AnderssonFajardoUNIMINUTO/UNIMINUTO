<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "C3LY72AHLQ", "CWG5wsh8rF", "C3LY72AHLQ");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
