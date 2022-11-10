<?php
    include_once('../../conex.php');

    $nombre = $_REQUEST['nombProd'];
    $color = $_REQUEST['colorProd'];
    $tipo = $_REQUEST['tipoMaterial'];
    $desc = $_REQUEST['descProd'];
    $cant_lote = $_REQUEST['cantidadLotes'];
    $cant_x_lote= $_REQUEST['cantPorLote'];

try{
    $sql = 'INSERT into productos (id_codP, nomb_prod, color, material, descripcion, cant_lotes, cant_por_lote)
    VALUES ("003-5A",?,?,?,?,?,?)';

    $query=$conexion->prepare($sql);

    $query->bindParam(1,);
    $query->bindParam(2,$nombre);
    $query->bindParam(3,$color);
    $query->bindParam(4,$tipo);
    $query->bindParam(5,$desc);
    $query->bindParam(6,$cant_lote);
    $query->bindParam(7,$cant_x_lote);

    $query->execute() or die(PDO::ERRMODE_WARNING); 

    
    if($query){
    
        echo json_encode('true');
    }
    // } else {
    //     echo "ERROR: Ingreso de datos."
    //     .($conexion);
    // }

}catch(PDOException $e){
    echo "no se puedo realizar el registo <br>".$e->getMessage();
}

    // include_once('../conex.php');

    // $nombre = $_REQUEST['nomb_prod'];
    // $color = $_REQUEST['color_prod'];
    // $tipo = $_REQUEST['tipo_material'];
    // $descripcion = $_REQUEST['desc_prod'];
    // $cantidad_lotes = $_REQUEST['cantidad_lotes'];
    // $cant_por_lotes = $_REQUEST['cant_por_lote'];

    // $sql = "INSERT into productos (nomb_producto, descripcion, color, material, cant_lotes, cant_por_lote)
    // VALUES ('$nombre', '$descripcion', '$color', '$tipo', '$cantidad_lotes', '$cant_por_lotes')";

    // if(mysqli_query($conex, $sql)){
    //     echo "<h3> Datos agregados exitosamente </h3> <br>"
    //     . "<a href='insumos.html'> Volver a agregar un producto </a> <br>"
    //     . "<a href='vista_productos.php'> Ver inventario de productos </a>";
    // } else {
    //     echo "ERROR: Ingreso de datos. <br>"
    //     . mysqli_error($conex);
    // }

?>
