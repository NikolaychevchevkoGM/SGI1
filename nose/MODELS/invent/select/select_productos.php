<?php
include_once("../../conex.php");

try{
    $sql=("SELECT * FROM producto");

    $query=$conexion->prepare($sql);
    $query->execute() or die(PDO::ERRMODE_WARNING);
    $result=$query;

    $data=[];

    while($item=$result->fetch(PDO::FETCH_OBJ)){

        $data[]=[
            'id_codP'=>$item->id_codP,
            'nombre'=>$item->nombre,
            'color'=>$item->color,
            'tip_Material'=>$item->tip_Material,
            'cant_Lotes'=>$item->cant_Lotes,
            'cantXlot'=>$item->cantXlot,
            'estado'=>$item->estado,
        ];
    }
    echo json_encode($data);
}catch(PDOExeption $e){
    echo "Error en la consulta",$e->getMessage();
}

// function fetchAll(mysqli $conex){
//     $data = [];
//     $sql = "SELECT * FROM productos";
//     $result = $conex->query($sql);

//     if($result->num_rows > 0){
//         while($row = $result->fetch_object()){
//             $data[] = $row;
//         }
//     }
//     return $data;
// }

?>