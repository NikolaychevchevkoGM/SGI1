<?php
include_once("conex.php");

$producto=isset($_POST['nomProd'])? $_POST['nomProd'] :'';
$cantidadLotes=isset($_POST['cantL'])? $_POST['cantL'] :'';
$cantidadXlotes=isset($_POST['cantXl'])? $_POST['cantXl'] :'';
// $describ=isset($_POST['describ'])? $_POST['describ'] :'';
$fecha_Realizado=isset($_POST['dateT'])? $_POST['dateT'] :'';
$fecha_Llegada=isset($_POST['dateTentr'])? $_POST['dateTentr'] :'';
$receptor=isset($_POST['nomTrabajador'])? $_POST['nomTrabajador'] :'';


try{

    $query=$conexion->prepare('INSERT INTO encargos(nombreP,cant_Lotes,cantXlotes,fecha_echo,fecha_Entrada,persona_recibe)VALUES(?,?,?,?,?,?)');

    $query->bindParam(1,$producto);
    $query->bindParam(2,$cantidadLotes);
    $query->bindParam(3,$cantidadXlotes);
    // $query->bindParam(4,$describ);
    $query->bindParam(4,$fecha_Realizado);
    $query->bindParam(5,$fecha_Llegada);
    $query->bindParam(6,$receptor);
    
    $query->execute() or die(PDO::ERRMODE_WARNING);

    echo json_encode('data');

}catch(PDOException $e){
    echo "No se puede realizar el registro <br>".$e->getMessage();
}





?>