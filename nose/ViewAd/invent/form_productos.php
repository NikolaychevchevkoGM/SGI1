<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productos.css">
    <title>productos</title>
</head>
<body>
    <?php require('lateral.php') ?>
    <?php require('head.php') ?>

    <section class="form-register">
        <h4>Registro de productos</h4>
        <form action="" method="post" id="agreg_prod">
        <input class="controls" type="text" name="nombProd" id="nombProd" placeholder="Ingrese el nombre">
        <input class="controls" type="text" name="colorProd" id="colorProd" placeholder="Ingrese el color">
        <input class="controls" type="text" name="tipoMaterial" id="tipoMaterial" placeholder="Ingrese el tipo de material">
        <textarea class="controls" name="descProd" id="descProd" placeholder="Ingrese la descripción del producto"></textarea>
        <input class="controls" type="text" name="cantidadLotes" id="cantidadLotes" placeholder="Cantidad de lotes">
        <input class="controls" type="text" name="cantPorLote" id="cantPorLote" placeholder="Cantidad en cada lote">
        <input class="botons" type="submit" value="Registrar producto">

        <center><b><a href="vista_productos.php" target="_blank"><h4>Ir al inventario de productos</h4></a></b></center>
        <center><b><a href="insumos.html" target="_blank"><h4>¿Agregar un insumo?</h4></a></b></center>
        <center><b><a href="proveedores.html" target="_blank"><h4>¿Agregar un proveedor?</h4></a></b></center>
    </form>
    </section>

    <script src="../../ASSETS/JS/invent/enviarProd.js"></script>
    <script src="../../ASSETS/JS/sweetalert2.all.min.js"></script>
</body>
</html>