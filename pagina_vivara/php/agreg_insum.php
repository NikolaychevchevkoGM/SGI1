<?php
    include_once(dirname(__FILE__).'/config.php');

    $nombre = $_REQUEST['nomb_insumo'];
    $descripcion = $_REQUEST['desc_insumo'];
    $fecha = $_REQUEST['fecha_ingreso'];
    $unidades = $_REQUEST['unidades_insumo'];
    $proveedor = $_REQUEST['proveedor_id'];

    $sql = "INSERT into insumos ( nomb_insumo, descripcion, fecha_ingreso, unidades, proveedor_id)
    VALUES ('$nombre', '$descripcion', '$fecha', '$unidades', '$proveedor')";

    if(mysqli_query($conex, $sql)){
        echo "<h3> Datos agregados exitosamente </h3> <br>"
        . "<a href='insumos.html'> Volver a agregar un insumo </a> <br>"
        . "<a href='vista_insumos.php'> Ver inventario de insumos </a>";
    } else {
        echo "ERROR: Ingreso de datos."
        . mysqli_error($conex);
    }

?>