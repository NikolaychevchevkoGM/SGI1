<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="proveedores.css">
    <title>proveedores</title>
</head>
<body>
    <?php require('lateral.php') ?>
    <?php require('head.php') ?>
    
    <section class="form-register">
        <h4>Registro de proveedor</h4>
        <form method="post" id="agreg_prov">
            
            <input class="controls" type="text" name="nomb_proveedor" id="nombProveedor" placeholder="Ingrese el nombre">
            <input class="controls" type="text" name="num_contacto" id="numContacto" placeholder="Ingrese el numero de contacto">
            <input class="controls" type="text" name="direccion_prov" id="direccionProv" placeholder="Ingrese la direccion del proveedor">
            <input class="botons" type="submit" value="Registrar proveedor">

            <center><b><a href="vista_proveedores.php" target="_blank"><h4>Ir al inventario de proveedores</h4></a></b></center>
            <center><b><a href="productos.html" target="_blank"><h4>¿Agregar un producto?</h5></a></b></center>
            <center><b><a href="insumos.html" target="_blank"><h4>¿Agregar un insumo?</h4></a></b></center>
        </form>
    </section>
</body>
</html>