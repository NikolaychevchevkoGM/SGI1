<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ASSETS/CSS/admin/sgc/tablaUss.css">
    <title>Usuarios</title>
</head>
<body>
    <?php require_once('lateral.php');?>
    <?php require_once('head.php');?>
    <div id="main-container">
        <table border="2px">
            <thead>
                <tr>
                    <th >Nombre</th>
                    <th >Apellidos</th>
                    <th >Contacto</th>
                    <th >Correo</th>
                    <th >Empresa para la que trabaja</th>
                    <th >Tipo de usuario</th>
                    <th >Eliminar</th>
                    <th>Ver Perfil/Editar</th><!--Este boton debe llevar a la pagina "perfilUs"-->
                </tr>
            </thead>
            <tbody id="verUs">
            </tbody>
        </table>
    </div>
    <script src="../../ASSETS/JS/Admsgc/callUs.js" ></script>
</body>
</html>