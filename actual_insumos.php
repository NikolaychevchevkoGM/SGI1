<?php
    include_once(dirname(__FILE__).'/config.php');
    if(count($_POST)>0) { mysqli_query($conex,"UPDATE insumos set 
        
        nomb_insumo ='" . $_POST['nomb_insumo']."',
        descripcion ='" . $_POST['desc_insumo']."',
        fecha_ingreso ='" . $_POST['fecha_ingreso']."',
        unidades ='". $_POST['unidades_insumo']."',
        proveedor_id ='".$_POST['proveedor_id']."'");
    }

$result=mysqli_query($conex,"SELECT * FROM insumos WHERE id_insumo='".$_GET['id']."'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
    <link rel="stylesheet" href="insumos.css">
    <title>update insumos</title>
</head>
<body>
    <form name="frmuser" method="post" action="">
    <div><?php if (isset($message)) {echo $message;} ?>
    </div>

    <div style="padding-botom:5px;">

    <a href="vista_insumos.php">vista de insumos</a>
    </div>
    <section class="form-register">
        <h4>Actualizacion de insumo</h4>
        
            <input type="text" name="nomb_insumo" class="controls"  id="nombInsumo" value=<?php echo $row['nomb_insumo']; ?>>ingrse el nombre 
          
            <textarea name="desc_insumo" class="controls"  id="descInsumo" cols="30" rows="10" maxlength="300"value=<?php echo $row['descripcion']; ?>>"Ingrese la descripción (máximo 300 caracteres)"
        
            </textarea>
            <input type="date" name="fecha_ingreso" class="controls"  id="fechaIngreso" value=<?php echo $row['fecha_ingreso']; ?>>"Ingrese la fecha de ingreso"
        
            <input type="text" name="unidades_insumo" class="controls"  id="unidadesInsumo" value=<?php echo $row['unidades']; ?>>"Ingrese las unidades"
        
            <input type="text" name="proveedor_id" class="controls"  id="proveedorId" value=<?php echo $row['proveedor_id']; ?>>"Ingrese el ID del proveedor"
        
            <input type="submit" name="submit" class="botons"  value="Actualizar insumo">
        
        </form>
    </section>
</body>
</html>