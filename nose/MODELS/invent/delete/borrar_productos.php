<?php

include_once('../conex.php');
// var_dump($_GET);
// die;

function deleteInsumo(mysqli $conex, $id){
    $sql = "DELETE FROM productos WHERE id_producto ='".$id."'";
    $result = $conex->query($sql);
    
    if(!$result){
        throw new Exception("No se pudo eliminar el registro.");
    }
}

$id = "";

if(!empty($_GET['id'])){
    $id = $_GET['id'];
}

if(empty($id)){
    throw new Exception("La ID está vacía/no existe.");
}

deleteInsumo($conex, $id);

header("Location: ../vista_productos.php");
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