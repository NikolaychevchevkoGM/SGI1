<?php
include_once("conex.php");

$cc= isset($_POST['cc'])? $_POST['cc'] :''; //Esto es una ooperador ternario y nos permite validar que el campo no venga vacio
$usuario= isset($_POST['nombre'])? $_POST['nombre'] :'';
$apellidos= isset($_POST['segNomb'])? $_POST['segNomb'] :'';
$tel= isset($_POST['tel'])? $_POST['tel'] :'';
$correo= isset($_POST['email'])? $_POST['email'] :'';
$contraseña= isset($_POST['psword'])? $_POST['psword'] :'';
$rol= isset($_POST['rol'])? $_POST['rol'] :'';


try{

    $query=$conexion->prepare('INSERT INTO usuarios(id_cc,nombre,apellidos,tel,email,contra,rol_id)VALUES(?,?,?,?,?,?,?)');

    $query->bindParam(1,$cc);
    $query->bindParam(2,$usuario);
    $query->bindParam(3,$apellidos);
    $query->bindParam(4,$tel);
    $query->bindParam(5,$correo);
    $query->bindParam(6,$contraseña);
    $query->bindParam(7,$rol);

    $query->execute() or die(PDO::ERRMODE_WARNING);

    echo json_encode('true');


}catch(PDOException $e){
    echo $e->getMessage();
}




?>