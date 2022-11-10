<?php

    function conectar(){
        $host="localhost";
        $dbname="proyecf2";
        $usu="root";
        $cont="";
        try{
            $conx= new PDO("mysql:host=$host;dbname=$dbname",$usu,$cont);
            $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // echo json_encode("Conexion exitosa");

        }catch(PDOException $e){
            // echo 'error'.$e->getMessage();
            echo("No se pudo conectar correctamente con: $dbname, error:$e");
        }
        return $conx;
    }

$conexion=conectar();

?>