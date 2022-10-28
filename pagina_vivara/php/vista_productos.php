<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="vista_productos.css"></link>
    <title>Productos</title>
</head>
<body>
  <?php
  include_once('config.php');
  $query = ("SELECT * FROM productos");
  echo "<b> <center>PRODUCTOS</center> </b> <br> <br>";

  if ($result = $conex->query($query)) {
    $table = '<center> <table border=6>
                      <tr align="center">
                          <th> ID </th>
                          <th>Nombre Productos</th>
                          <th>Descripcion</th>
                          <th>color</th>
                          <th>material</th>
                          <th>Cantidad de lotes</th>
                          <th>Cantidad por lotes</th>
                      </tr>
    </center>';
      while ($row =mysqli_fetch_array($result)) {
        $table .= '
      <tr align="center">
                          <td>'.$row["id_producto"].'</td>
                          <td>'.$row["nomb_producto"].'</td>
                          <td>'.$row["descripcion"].'</td>
                          <td>'.$row["color"].'</td>
                          <td>'.$row["material"].'</td>
                          <td>'.$row["cant_lotes"].'</td>
                          <td>'.$row["cant_por_lote"].'</td>

                      </tr>
    ';
    }
    $table .= '</table>';
    echo $table;
      }
        echo "<b><a href='../productos.html' target='_blank'><h4>¿Agregar otro producto?</h4></a></b>";
        echo "<b><a href='../insumos.html' target='_blank'><h4>¿Agregar un insumo?</h4></a></b>";
      echo "<b><a href='../proveedores.html' target='_blank'><h4>¿Agregar un proveedor?</h4></a></b>";
  ?>

</body>
</html>
