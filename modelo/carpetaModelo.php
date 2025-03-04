<?php
require_once "conexion.php";
class ModeloCarpeta {

    static public function mdlInfoCarpetas() {
        $stmt = Conexion::conectar()->prepare( "select * from carpetas" );
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }

    static public function mdlRegCarpeta( $data ) {

        $nombre_carpeta = $data["nombre_carpeta"];

        date_default_timezone_set( "America/La_Paz" );
        $fecha = date( "Y-m-d" );

        $stmt = Conexion::conectar()->prepare( "INSERT INTO carpetas(nombre_carpeta, fecha_creacion) VALUES('$nombre_carpeta',  '$fecha')" );

        if ( $stmt->execute() ) {
            return "correcto";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt->null;
    }

    static public function mdlEditCarpeta( $data ) {

        $idCarpeta = $data["idCarpeta"];
        $nombre_carpeta = $data["nombre_carpeta"];

        $stmt = Conexion::conectar()->prepare( "update carpetas set nombre_carpeta='$nombre_carpeta' where id_carpeta=$idCarpeta" );

        if ( $stmt->execute() ) {

            return "correcto";

        } else {

            return "error";
        }

        $stmt->close();
        $stmt->null;
    }
    
     static public function mdlInfoCarpeta( $id ) {
    $stmt = Conexion::conectar()->prepare( "SELECT * FROM carpetas where id_carpeta=$id" );
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

    static public function mdlEliCarpeta( $data ) {
        $stmt = Conexion::conectar()->prepare( "delete from carpetas where id_carpeta=$data" );

        if ( $stmt->execute() ) {
            return "correcto";
        } else {
            return "error";
        }
        $stmt->close();
        $stmt->null;
    }
    
    //Archivos
    static public function mdlInfoArchivos() {
        $stmt = Conexion::conectar()->prepare( "select * from archivos" );
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }

}
