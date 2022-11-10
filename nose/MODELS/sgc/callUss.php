<?php

include_once('../conex.php');

$sql=("SELECT usuario.nombre, usuario.apellidos,usuario.tel,usuario.email,empresas.nom_E,tipUs.tipo_de_usu FROM usuario JOIN empresas ON usuario.info_Empr=empresas.id_Nit_Em JOIN tipUs ON usuario.rol_id=tipUs.id_TipU");

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
        'nom_E'=>$item->nom_E,
        'tipo_de_usu'=>$item->tipo_de_usu
    ];
}
echo json_encode($data);
?>