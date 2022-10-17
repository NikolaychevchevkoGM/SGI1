<?php

include_once("conex.php");

$cedula=$_POST['cc'];
$usuario=$_POST['nombre'];
$apellido=$_POST['segNomb'];
$tel=$_POST['tel'];
$correo=$_POST['email'];
$contraseña=$_POST['psword'];

$sql=("INSERT INTO usuarios(id_cc,nombre,apellidos,tel,email,contra,rol_id)VALUES(?,?,?,?,?,?,2)");

$sql=$conexion->prepare($sql);

$sql->bindParam(1,$cedula);
$sql->bindParam(2,$usuario);
$sql->bindParam(3,$apellido);
$sql->bindParam(4,$tel);
$sql->bindParam(5,$correo);
$sql->bindParam(6,$contraseña);

$sql->execute() or die(PDO::ERRMODE_WARNING);

?>