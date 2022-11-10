<?php
include_once("conex.php");

function fetchAll(mysqli $conex){
    $data = [];
    $sql = "SELECT * FROM proveedores";
    $result = $conex->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_object()){
            $data[] = $row;
        }
    }
    return $data;
}

?>