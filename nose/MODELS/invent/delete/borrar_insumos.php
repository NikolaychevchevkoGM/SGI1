<?php

include_once('../../conex.php');
// var_dump($_GET);
// die;

function deleteInsumo(mysqli $conexion, $id){
    $sql = "DELETE FROM insumos WHERE id_insumo ='".$id."'";
    $result = $conex->query($sql);
    
    if(!$result){
        throw new Exception("No se pudo eliminar el registro.");
    }
}

$id = "";

if(!empty($_GET['deleteId'])){
    $id = $_GET['deleteId'];
}

if(empty($id)){
    throw new Exception("La ID está vacía/no existe.");
}

deleteInsumo($conexion, $id);

header("Location: ../vista_insumos.php");
die;


// $id = '';

// if(!empty($_REQUEST['id_insumo'])){
//     $id = $_REQUEST['id_insumo'];
// }

// if(empty($id)){
//     throw new Exception();
// }

// deleteInsumo($conex, $id);

?>