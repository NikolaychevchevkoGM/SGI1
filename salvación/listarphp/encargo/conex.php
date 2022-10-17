<?php

    function conectar(){
        $host="localhost";
        $dbname="pruebLog";
        $usu="root";
        try{
            $conx= new PDO("mysql:host=$host;dbname=$dbname",$usu,'');
            $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // echo json_encode("Conexion exitosa");

        }catch(PDOException $e){
            echo("No se pudo conectar correctamente con: $dbname, error:$e");
        }
        return $conx;
    }

$conexion=conectar();

?>