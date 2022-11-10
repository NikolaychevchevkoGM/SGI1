<?php

require_once('conex.php');

$cedu= isset($_POST['cc'])? $_POST['cc'] :''; //Esto es una ooperador ternario y nos permite validar que el campo no venga vacio
$nombre= isset($_POST['nombUs'])? $_POST['nombUs'] :'';
$apellidos= isset($_POST['lastNa'])? $_POST['lastNa'] :'';
$tel= isset($_POST['tel'])? $_POST['tel'] :'';
$correo= isset($_POST['email'])? $_POST['email'] :'';
$rol= isset($_POST['rol'])? $_POST['rol'] :'';
$contraseña= isset($_POST['psword'])? $_POST['psword'] :'';

// try{


//     $query=$conexion->prepare('INSERT INTO usuario(id_cc,nombre,apellidos,nom_Usu,tel,email,contr,rol_id,estado)VALUES(?,?,?,?,?,?,?,?,1)');






// }catch(PDOExeption $e){
//     echo $e->getMessage();

// }

if($_POST){
    echo "hola, si llego una variable ";
}


?>