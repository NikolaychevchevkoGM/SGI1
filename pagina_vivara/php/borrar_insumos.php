<?php

include_once('config.php');
// include_once('vista_insumos.php');



$update = $conex->prepare("DELETE FROM insumos WHERE id_insumo = ?");
$update->bind_param('i', $id);
$id = $_POST['id'];
$update->execute();

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