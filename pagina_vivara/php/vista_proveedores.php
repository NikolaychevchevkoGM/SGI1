<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="vista_proveedores.css"></link>
    <title>Proveedores</title>
</head>
<body>
  <?php
  include_once('config.php');
  $query = ("SELECT * FROM proveedores");
  echo "<b> <center>PROVEEDORES</center> </b> <br> <br>";

  if ($result = $conex->query($query)) {
    $table = '<center> <table border=6>
                      <tr align="center">
                          <th> ID </th>
                          <th>Nombre Proveedor</th>
                          <th>numero de contacto</th>
                          <th>direccion</th>
                      </tr>
    </center>';
      while ($row =mysqli_fetch_array($result)) {
        $table .= '
      <tr align="center">
                          <td>'.$row["id_proveedor"].'</td>
                          <td>'.$row["nomb_proveedor"].'</td>
                          <td>'.$row["num_contacto"].'</td>
                          <td>'.$row["direccion"].'</td>

                      </tr>
    ';
    }
    $table .= '</table>';
    echo $table;
      }
    
        echo "<b><a href='../proveedores.html' target='_blank'><h4>¿Agregar otro proveedor?</h4></a></b>";
        echo "<b><a href='../insumos.html' target='_blank'><h4>¿Agregar un insumo?</h4></a></b>";
        echo "<b><a href='../productos.html' target='_blank'><h4>¿Agregar un producto?</h4></a></b>";

  ?>
</body>
</html>
