<?php


    function conectar(){
        $host="localhost";
        $dbname="pruebLog";
        $usu="root";
        try{
            $conx= new PDO("mysql:host=$host;dbname=$dbname",$usu,'');
            $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo json_encode("Conexion exitosa");

        }catch(PDOException $e){
            echo("No se pudo conectar correctamente con: $dbname, error:$e");
        }
        return $conx;
    }

$conexion=conectar();























//Conexion atravez de una clase para usar el modelo MVC
// class Conecsql{

//     private $host="localhost";
//     private $dbNmae="";
//     private $usuario="root";
//     private $pass="pruebLog";
//     private $conexi;

//     public function __construct(){
//         try{
//             $this->conexi=new PDO("mysqli:host=".this->host.";dbname=".this->dbname.this->usuario.this->pass);
//             $this->conexi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             echo"Conectado correctamente";
//         }catch(Exception $e){
//             echo"no se pudo conectar".$e->getMessage();
//         }
//     }
// }
// $conex=new Conecsql();

?>