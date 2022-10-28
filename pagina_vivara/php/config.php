<?php
$usuario="root";
$contraseña="";
$db="inv_db";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conex = new mysqli("localhost",$usuario,$contraseña,$db);
// or die(mysqli_error($mysqli));

?>