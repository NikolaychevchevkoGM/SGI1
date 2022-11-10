<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ASSETS/CSS/admin/invent/insumos.css">
    <title>insumos</title>
</head>
<body>

    <?php require('lateral.php') ?>
  <?php require('head.php') ?>

    <section class="form-register">
        <h4>Registro de insumos</h4>
        <form action="" method="post" id="agreg_insum">
            <input class="controls" type="text" name="nombInsumo" id="nombInsumo" placeholder="Ingrese el nombre">
            <textarea class="controls" name="descInsumo" id="descInsumo" cols="30" rows="10" maxlength="300" placeholder="Ingrese la descripción (máximo 300 caracteres)"></textarea>
            <input class="controls" type="date" name="fechaIngreso" id="fechaIngreso" placeholder="Ingrese la fecha de ingreso">
            <input class="controls" type="text" name="unidadesInsumo" id="unidadesInsumo" placeholder="Ingrese las unidades">
            <input class="controls" type="text" name="proveedorId" id="proveedorId" placeholder="Ingrese el ID del proveedor">
            <input class="botons" type="submit" value="Registrar insumo">
        </form>
        <center><b><a href="vista_insumos.php" target="_blank"><h4>Ir al inventario de insumos</h4></a></b></center>
        <center><b><a href="productos.html" target="_blank"><h4>¿Agregar un producto?</h4></a></b></center>
        <center><b><a href="proveedores.html" target="_blank"><h4>¿Agregar un proveedor?</h4></a></b></center>
    </section>


    <script src="../../ASSETS/JS/invent/enviarIns.js"></script>
    <script src="../../ASSETS/JS/sweetalert2.all.min.js"></script>
    
</body>
</html>