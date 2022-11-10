<?php
    include_once('../../conex.php');

    $nombre = $_REQUEST['nombInsumo'];
    $descripcion = $_REQUEST['descInsumo'];
    $fecha = $_REQUEST['fechaIngreso'];
    $unidades = $_REQUEST['unidadesInsumo'];
    $proveedor = $_REQUEST['proveedorId'];


try{
    $sql = 'INSERT into insumos (nomb_insumo, descripcion, fecha_ingreso, unidades, proveedor_id)
    VALUES (?,?,?,?,?)';

    $query=$conexion->prepare($sql);

    $query->bindParam(1,$nombre);
    $query->bindParam(2,$descripcion);
    $query->bindParam(3,$fecha);
    $query->bindParam(4,$unidades);
    $query->bindParam(5,$proveedor);

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

?>