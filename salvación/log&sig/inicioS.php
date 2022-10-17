<?php

include_once("conex.php");

$usuario=$_POST['nombre'];
$correo=$_POST['email'];
$contraseña=$_POST['psword'];

$sql=("SELECT usuarios.nombre, usuarios.email,usuarios.contra,usuarios.rol_id FROM usuarios WHERE nombre='$usuario' AND email='$correo' AND contra='$contraseña' AND rol_id ");

$query=$conexion->prepare($sql);
$query->execute() or die(print($sql->errorInfo()));

$resultado=$query->fetch(PDO::FETCH_OBJ);

if($query='true'){
    echo"Bienvenido Admin";
}


?>