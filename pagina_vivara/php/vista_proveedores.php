<?php
include_once('config.php');
$query = ("SELECT * FROM proveedores");
echo "<b> <center>PRODUCTOS</center> </b> <br> <br>";

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
  
?>
