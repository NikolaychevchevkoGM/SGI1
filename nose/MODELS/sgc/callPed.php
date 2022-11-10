<?php

include_once('../conex.php');


    try{
        $sql=("SELECT pedido.id_CodP, usuario.nom_Usu, producto.nombre,pedido.fecha_realizado,pedido.fecha_llego,pedido.persona_recibe,.pedido.estado FROM pedido JOIN usuario ON pedido.cliente_id=usuario.id_cc JOIN producto ON pedido.producto_id=producto.id_codP;");

        $query=$conexion->prepare($sql);
        $query->execute() or die(PDO::ERRMODE_WARNING);
        $result=$query;

        $data=[];

        
        while($item=$result->fetch(PDO::FETCH_OBJ)){

            $data[]=[
                'id_CodP'=>$item->id_CodP,
                'nom_Usu'=>$item->nom_Usu,
                'nombre'=>$item->nombre,
                'fecha_realizado'=>$item->fecha_realizado,
                'fecha_llego'=>$item->fecha_llego,
                'persona_recibe'=>$item->persona_recibe,
                'estado'=>$item->estado,
            ];
        }
        echo json_encode($data);
    }catch(PDOExeption $e){
        echo "Error en la consulta",$e->getMessage();
    }


?>