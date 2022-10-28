<?php

include_once('config.php');
// include_once('vista_insumos.php');

function deleteInsumo(mysqli $conex, $id){
    $sql = "DELETE FROM insumos WHERE id_insumo ='".$id."'";
    $result = $conex->query($sql);
    
    if(!$result){
        throw new Exception("No se pudo eliminar el registro.");
    }
}

$id = '';

if(!empty($_REQUEST['id_insumo'])){
    $id = $_REQUEST['id_insumo'];
}

if(empty($id)){
    throw new Exception("No se pudo obtener la ID / Está vacía.");
}

deleteInsumo($conex, $id);

// $update = $conex->prepare("DELETE FROM insumos WHERE id_insumo = ?");
// $update->bind_param('i', $id);
// $id = $_POST['id'];
// $update->execute();

// $id = $_GET['id'];
// $query = "SELECT FROM insumos WHERE id_insumo = $id;";
// $registros = mysqli_query($conex,$query);
// $filas = mysqli_num_rows($registros);

// if ($filas > 0) {
//     mysqli_query($conex, "DELETE FROM insumos WHERE id_insumo='".$id."'");
// } else { echo "Hubo un error al borrar el dato"; }

// if(mysqli_query($conex,$query)){
//     echo "<center><b><h3> Esta fila ha sido eliminada exitosamente</h3></b></center>"
//     ."a";
// }
?>