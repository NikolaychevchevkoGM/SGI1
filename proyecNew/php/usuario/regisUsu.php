<?php

require_once(dirname(__FILE__)."../config.php");

$valida['success']=array('success'=>false, 'mensjae'=>"");

if($_POST){
    echo"Hola si llego un mensaje";
}

//     $correo=$_POST['correo'];
//     $nombre=$_POST["nombre"];
//     $tel=$_POST['tel'];
//     $contraseña=$_POST['contraseña'];

//     $sql="SELECT * FORM usus WHERE correo=$correo";
//     $result=$cx->query($sql);
//     $n=$result->num_rows;
//     if($n==0){

//         $sqlInsert="INSERT INTO usus() VALUES($correo,$nombre,$tel)";
//         if($cx->query($sqlInsert)===true){

//             $valida['success']=true;
//             $vailo['mensaje']="SE GUARDO CORRECTAMENTE";
//         }else{
//             $valida['success']=false;
//             $vailo['mensaje']="NO SE PUDO GUARDAR ";

//         }

//     }else{
//         $valida['success']=false;
//         $valida['mensaje']="El correo ya esta en uso";
//     }

// }else{
//     $valida['success']=false;
//     $valida['mensaje']="NO SE PUDO GUARDAR";
// }
// echo json_encode($vailo)



?>