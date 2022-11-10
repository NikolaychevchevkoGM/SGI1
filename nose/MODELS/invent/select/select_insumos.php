<?php

include_once('../../conex.php');

try{
    $sql=("SELECT * FROM insumos");

    $query=$conexion->prepare($sql);
    $query->execute() or die(PDO::ERRMODE_WARNING);
    $result=$query;

    $data=[];

    while($item=$result->fetch(PDO::FETCH_OBJ)){

        $data[]=[
            'id_insumo'=>$item->id_insumo,
            'nomb_insumo'=>$item->nomb_insumo,
            'descripcion'=>$item->descripcion,
            'fecha_ingreso'=>$item->fecha_ingreso,
            'unidades'=>$item->unidades,
            'proveedor_id'=>$item->proveedor_id,
        ];
    }
    echo json_encode($data);
}catch(PDOExeption $e){
    echo "Error en la consulta",$e->getMessage();
}

// function fetchAll(mysqli $conex){
//     $data = [];
//     $sql = "SELECT * FROM insumos";
//     $result = $conex->query($sql);

//     if($result->num_rows > 0){
//         while($row = $result->fetch_object()){
//             $data[] = $row;
//         }
//     }
//     return $data;
// }

?>