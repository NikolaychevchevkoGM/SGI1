<?php
include_once('config.php');
$query = ("SELECT * FROM insumos");
echo "<b> <center>INSUMOS</center> </b> <br> <br>";

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
                        <td><form method="POST" action="borrar_insumos.php"><input type="hidden" value="'.$row['id_insumo'].'"><input type="submit" value="Delete"></form></td>
                    </tr>
                  </tbody>
  ';
  }
  $table .= '</table>';
  echo $table;
    }
  
?>

<!-- <td><b><a href="borrar_insumos.php"><input type="submit" value="Eliminar"></a></b></td> -->