<?php
    include_once(dirname(__FILE__).'/config.php');

    $codigo = $_REQUEST['cod_insumo'];
    $nombre = $_REQUEST['nomb_insumo'];
    $descripcion = $_REQUEST['desc_insumo'];
    $fecha = $_REQUEST['fecha_ingreso'];
    $unidades = $_REQUEST['unidades_insumo'];
    $proveedor = $_REQUEST['proveedor_id'];

    $sql = "INSERT into insumos (id_insumo, nomb_insumo, descripcion, fecha_ingreso, unidades, proveedor_id)
    VALUES ('$codigo', '$nombre', '$descripcion', '$fecha', '$unidades', '$proveedor')";

    if(mysqli_query($conex, $sql)){
        echo "<h3> Datos agregados exitosamente </h3> <br>"
        . "<a href='insumos.html'> Volver a agregar un insumo </a>";
    } else {
        echo "ERROR: Ingreso de datos."
        . mysqli_error($conex);
    }

?>