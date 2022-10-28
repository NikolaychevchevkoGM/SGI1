<?php
    include_once(dirname(__FILE__).'/config.php');

    $nombre = $_REQUEST['nomb_proveedor'];
    $numero = $_REQUEST['num_contacto'];
    $direccion = $_REQUEST['direccion_prov'];

    $sql = "INSERT into proveedores (nomb_proveedor, num_contacto, direccion)
    VALUES ('$nombre', '$numero', '$direccion')";

    if(mysqli_query($conex, $sql)){
        echo "<h3> Datos agregados exitosamente </h3> <br>"
        . "<a href='insumos.html'> Volver a agregar un proveedor </a> <br>"
        . "<a href='vista_proveedores.php'> Ver inventario de proveedores </a>";
    } else {
        echo "ERROR: Ingreso de datos. <br>"
        . mysqli_error($conex);
    }

?>