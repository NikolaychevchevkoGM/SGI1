<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ASSETS/CSS/admin/sgc/encarg.css">
    <title>tabla Pedidos</title>
</head>
<body>

    <?php require_once('lateral.php');?>
    <?php require_once('head.php');?>

<div id="main-container">
    <table border="2px">
        <thead>
            <tr>
                <th>Id Pedido</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Fecha de realización</th>
                <th>Fecha en la que llego</th>
                <th>Recibido Por</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody id="verPed">
            <!--Poner un boton que diga mas info, que me lleve a la pagina "infoEnc"
                Y poner el boton de eliminar y actualizar, el boton actualizar debe llevarlo
                a la pagina "infoEnc"
            -->
        </tbody>
    </table>
</div>

    <script src="../../ASSETS/JS/Admsgc/callPed.js" ></script>


</body>
</html>