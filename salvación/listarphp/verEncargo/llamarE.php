<?php

include_once('conex.php');

$sql=("SELECT * FROM encargos");

$query=$conexion->prepare($sql);
$query->execute() or die(PDO::ERRMODE_WARNING);
$result=$query;

$data=[];

while($item=$result->fetch(PDO::FETCH_OBJ)){

    $data[]=[
        'id_Enc'=>$item->id_Enc,
        'nombreP'=>$item->nombreP,
        'cant_Lotes'=>$item->cant_Lotes,
        'cantXlotes'=>$item->cantXlotes,
        'fecha_echo'=>$item->fecha_echo,
        'fecha_Entrada'=>$item->fecha_Entrada,
        'persona_recibe'=>$item->persona_recibe,
    ];
}
echo json_encode($data)

?>