<?php

require_once('../conex.php');



// echo json_encode($_POST);
// var_dump($_POST);


if($_POST){

        $usuar=$_POST['nombUs'];
        $contra=$_POST['pasword'];
        
        try{
            $sql="SELECT usuario.nom_Usu, usuario.rol_id FROM usuario WHERE nom_Usu='$usuar' AND contr='$contra'";
            $query=$conexion->prepare($sql);
            $query->execute() or die(PDO::ERRMODE_WARNING);
        
            $resultado=$query;
        
            $data=[];
        
                if($resultado->rowCount()>=1){
                        while($item = $resultado->fetch(PDO::FETCH_OBJ)){
                
                        $data[]=[
                                'nom_Usu'=>$item->nom_Usu,
                                'rol_id'=>$item->rol_id
                        ];
                        }
                        echo json_encode($data);   
                }else{
                        echo json_encode('false');
                }
            
        }catch(PDOException $e){
            echo "error en la consulta" ,$e->getMessage();
        }
}
 




?>