<?php
    include_once(dirname(__FILE__).'/config.php');

    $nombre = $_REQUEST['nomb_prod'];
    $color = $_REQUEST['color_prod'];
    $tipo = $_REQUEST['tipo_material'];
    $descripcion = $_REQUEST['desc_prod'];
    $cantidad_lotes = $_REQUEST['cantidad_lotes'];
    $cant_por_lotes = $_REQUEST['cant_por_lote'];

    $sql = "INSERT into productos (nomb_producto, descripcion, color, material, cant_lotes, cant_por_lote)
    VALUES ('$nombre', '$descripcion', '$color', '$tipo', '$cantidad_lotes', '$cant_por_lotes')";

    if(mysqli_query($conex, $sql)){
        echo "<h3> Datos agregados exitosamente </h3> <br>"
        . "<a href='insumos.html'> Volver a agregar un producto </a> <br>"
        . "<a href='vista_productos.php'> Ver inventario de productos </a>";
    } else {
        echo "ERROR: Ingreso de datos. <br>"
        . mysqli_error($conex);
    }

?>