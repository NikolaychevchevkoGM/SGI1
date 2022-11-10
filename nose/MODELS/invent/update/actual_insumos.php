<?php
    include_once("../../conex.php");
    
    $id=$_GET['updateId'];

    if(isset($_POST['enviar'])){
        $nombre=$_POST['nomb_insumo'];
        $desc=$_POST['desc_insumo'];
        $fecha=$_POST['fecha_ingreso'];
        $unidades=$_POST['unidades_insumo'];
        $proveedor=$_POST['proveedor_id'];

        $sql = "UPDATE `insumos` SET nomb_insumo='$nombre', descripcion='$desc', fecha_ingreso='$fecha', unidades=$unidades, proveedor_id='$proveedor' WHERE id_insumo='$id'";
        $result = mysqli_query($conex,$sql);

        if($result){
            header('location: ../vista_insumos.php');
        }

    }
    $result = mysqli_query($conexion, "SELECT * FROM insumos WHERE id_insumo ='".$_GET['updateId']."'");
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../insumos.css">
    <title>insumos</title>
</head>
<body> 
    <section class="form-register">
        <h4>Actualizar registro</h4>
        <form action="" method="post">
            <input type="text" name="id" value="<?php echo $row['id_insumo']?>"> <p style="color: black;"> Nombre del Insumo </p>
            <input class="controls" type="text" name="nomb_insumo" id="nombInsumo" value="<?php echo $row['nomb_insumo'];?>"> <p style="color: black;"> Descripcion</p>
            <input class="controls" name="desc_insumo" id="descInsumo" value="<?php echo $row['descripcion'];?>"> <p style="color: black;">Fecha de ingreso</p>
            <input class="controls" type="date" name="fecha_ingreso" id="fechaIngreso" value="<?php echo $row['fecha_ingreso'];?>"> <p style="color: black;">Unidades</p>
            <input class="controls" type="text" name="unidades_insumo" id="unidadesInsumo" value="<?php echo $row['unidades'];?>"> <p style="color: black;">ID del proveedor</p>
            <input class="controls" type="text" name="proveedor_id" id="proveedorId" value="<?php echo $row['proveedor_id'];?>">
            <input class="botons" type="submit" value="Actualizar">
        </form>
        <!-- <center><b><a href="php/vista_insumos.php" target="_blank"><h4>Ir al inventario de insumos</h4></a></b></center>
        <center><b><a href="productos.html" target="_blank"><h4>¿Agregar un producto?</h4></a></b></center>
        <center><b><a href="proveedores.html" target="_blank"><h4>¿Agregar un proveedor?</h4></a></b></center> -->
    </section>
</body>
</html>