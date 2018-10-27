<?php


class Conectar {

    public static function conectarBD($BaseDeDatos) {
        $host = "localhost"; //define el servidor
        $basededatos = "$BaseDeDatos";   //define el nombre de la base de datbos
        $usuariodb = "root";    //nombre del usuario autorizado para la BD
        $clavedb = "";  //password del usuario
        try {   //bloque de proteccion de fallos mediante intentos
            $conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);//crea una instancia para conectar a BD
        } catch (Exception $e) {    //atrapa el posible error
            echo $e->errorMessage();    //muestra el error
            exit(0);    //termina el proceso
        }
        if ($conexion->connect_errno) {//verifica si la conexion tuvi algun error
            echo "<br>Error..!! No hay Conexion a BD ";
            $conexion = false;//retorna falso para indicar que fallo la conexion
            exit(0);
        }
        return($conexion);//retorna un objeto con la conexion a la bd
    }

}
