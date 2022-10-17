<?php

include_once('index.php');

$sql=("SELECT nombre, apellidos, tel,email,rol_id FROM usuarios");

$query=$conexion->prepare($sql);
$query->execute() or die(); 
$resultado=$query;

$data=[];

while($item = $resultado->fetch(PDO::FETCH_OBJ)){

    $data[]=[
        'nombre'=>$item->nombre,
        'apellidos'=>$item->apellidos,
        'tel'=>$item->tel,
        'email'=>$item->email,
        'rol_id'=>$item->rol_id
    ];
}
echo json_encode($data);
?>