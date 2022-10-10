<?php
$usuario="root";
$contraseña="";
$db="inv_db";
// $conex=mysqli_connect("localhost","root","","prueblogin")
// or die(mysql_error($mysqli));
try{

    $conex=new PDO('mysql:host=localhost;dbname='.$db,$usuario,$contraseña,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    echo"La conexion exitosa";

}catch(Exception $e){
    echo"Ocurrio Un Error En La Conexion".$e->getMessage();
}

/*diferencias entre include e include_once y require_once   

include=Inserta el archivo sin más. 

include_once=Recore todo el archivo para buscar si ya fue incluido o no (dura más y es un poco mas pesado);

*/



?>