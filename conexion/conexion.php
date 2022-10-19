
<?php
session_start();
$name=$_SESSION['usuario'];

echo "Hola $name";




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 1</title>
    <link rel="stylesheet" type="text/css" href="conexion.css">

</head>
<body>
    <divclass="contenedor">
        <div>
            <div>
                <div><h1 alig>Bienvenido al sistema SGIC</h1></div>
                <div><h2>¿A que modulo deseas ingresar?</h2></div>
            </div>
        </div>
        <div>
            <div class=h3><label for="">Selecciona el boton para elegir un modulo</label></div>
            <div>
                <Button class="b1" type="submit" id="sgc">SGC</Button>
            </div>
            <div>
                <button class="b2" type="submit" id="inv">Inventario</button>
            </div>
        </div>
        <form action="logOut.php" method="POST">
            <div>
                <button class="b3" type="submit" name="salir" >Cerrar Sesión</button>
            </div>
        </form>
    </div>
</body>
</html>