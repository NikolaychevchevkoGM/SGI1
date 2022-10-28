<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="vista_insumos.css"></link>
    <title>Insumos</title>
</head>
<body>
  <?php
  include_once('config.php');
  $query = ("SELECT * FROM insumos");
  echo "<h3><b> <center>INSUMOS</center> </b></h3> <br> <br>";

  if ($result = $conex->query($query)) {
  $table = '<center> <table border=6>
                      <tr align="center">
                          <th> ID </th>
                          <th>Nombre insumo</th>
                          <th>Descripcion</th>
                          <th>Fecha</th>
                          <th>Cantidad de lotes</th>
                          <th>ID proveedor</th>
                      </tr>
    </center>';
      while ($row =mysqli_fetch_array($result)) {
        $table .= '<tbody data-link="row" class="rowlink">
                      <tr align="center">
                          <td>'.$row["id_insumo"].'</td>
                          <td>'.$row["nomb_insumo"].'</td>
                          <td>'.$row["descripcion"].'</td>
                          <td>'.$row["fecha_ingreso"].'</td>
                          <td>'.$row["unidades"].'</td>
                          <td>'.$row["proveedor_id"].'</td>
                      </tr>
                    </tbody>
    ';
    }
    $table .= '</table>';
    echo $table;
      }

      echo "<b><a href='../insumos.html' target='_blank'><h4>¿Agregar otro insumo?</h4></a></b>";
      echo "<b><a href='../productos.html' target='_blank'><h4>¿Agregar un producto?</h4></a></b>";
      echo "<b><a href='../proveedores.html' target='_blank'><h4>¿Agregar un proveedor?</h4></a></b>";
  ?>

</body>
</html>

