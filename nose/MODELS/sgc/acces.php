<?php

// require('../conex.php');

// $usuario=($_POST['nombUs']);
// $contraseña=($_POST['pasword']);

// try{

//     $sql=("SELECT * FROM usuario WHERE nomUs=$usuario");

//     $query=$conexion->prepare($sql);

//     $query->bindParam(1,$usuario);
//     $query->bindParam(2,$contraseña);

//     $query->execute() or die(PDO::ERRMODE_WARNING);

//     $result=$query;

//     $data=[];

//     if($result>=1){
//         while($item=$result->fetch(PDO::FETCH_OBJ)){
//             $data[]=[
//                 'nombre'=>$item->nombre,
//                 'apellidos'=>$item->apellidos,
//                 'nom_Usu'=>$item->nom_Usu,
//                 'tel'=>$item->tel,
//                 'email'=>$item->email,
//                 'nom_E'=>$item->nom_E,
//                 'contr'=>$item->contr,
//                 'tipo_de_usu'=>$item->tipo_de_usu,
//             ];
//         }

//         if($this->nom_usu==$usuario && $this->contr==$contraseña){
//             header("Location: ../../ViewAd/elige.php");
//         }else{
            
//             header("Location: ../../main/inicioS.html");
//             echo json_encode('false');
//         }
//     }else{
//         // setTimeout(2000ms);
//         header("Location: ../../main/inicioS.html");
//         echo json_encode('false');
//     }
// }catch(PDOExpetion $e){
//     echo "No se puedo hacer la consulta", $e->getMessage();

// }


?>