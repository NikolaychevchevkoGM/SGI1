<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 1</title>
    <link rel="stylesheet" href="../../ASSETS/CSS/admin/invent/vista_productos.css"></link>
    <title>Productos</title>
</head>
  <body>

  <?php require('lateral.php') ?>
  <?php require('head.php') ?>

    <b> <center><h1>PRODUCTOS</h1></center> </b> <br> <br>
      <center> <table border="6">
                    <thead>
                      <tr align="center">
                        <th>ID</th>
                        <th>Nombre producto</th>
                        <th>Descripcion</th>
                        <th>Color</th>
                        <th>Material</th>
                        <th>Cantidad de lotes</th>
                        <th>Cantidad por lote</th>
                        <th>Eliminar</th>
                        <th>Ver/Editar</th>
                      </tr>
                    </thead>
                      <tbody data-link="row" class="rowlink" id="tblPro">
                    </tbody>
                  </table>
                  <a href="form_productos.php">¿Agregar otro producto?</a>
          </center>

    <script src="../../ASSETS/JS/invent/verPro.js" ></script>

    </body>
</html>
