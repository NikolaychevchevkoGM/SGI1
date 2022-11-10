<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="../../ASSETS/CSS/admin/invent/vista_insumos.css"></link>
      <title>Insumos</title>
  </head>
    <body>

    <?php require('lateral.php') ?>
    <?php require('head.php') ?>


      <b> <center><h1>INSUMOS</h1></center> </b> <br> <br>
      <center> <table border="6">
                <thead>
                  <tr align="center">
                    <th> ID </th>
                    <th>Nombre insumo</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Cantidad de lotes</th>
                    <th>ID proveedor</th>
                    <th>Eliminar</th>
                    <th>Ver/Editar</th>
                  </tr>
                </thead>
                <tbody data-link="row" class="rowlink" id="tblInsu">
                </tbody>
              </table>
              <a href="create/agreg_insumos.php">¿Agregar otro insumo?</a>
      </center>

      <script src="../../ASSETS/JS/invent/verInsu.js"></script>
    </body>
</html>