<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Usuarios</title>
</head>
<body>

    <?php require_once('lateral.php');?>
    <?php require_once('head.php');?>
    
    
    <div>
        <h1>Agregar Nuevo Usuario</h1>
    </div>
    <form action="#" method="" >
        <div class="">
            <label for="" name="" id="">Cédula</label>
            <input type="numeric" name="">
        </div>
        <div class="">
            <label for="" name="" id="">Nombre</label>
            <input type="text" name="">
        </div>
        <div class="">
            <label for="" name="" id="">Apellidos</label>
            <input type="text" name="">
        </div>
        <div class="">
            <label for="" name="" id="">Número de contacto</label>
            <input type="tel" name="">
        </div>
        <div class="">
            <label for="" name="" id="">Correo electrónico</label>
            <input type="text" name="email">
        </div>
        <!--en esta linea crear el formulario condicional, sobre si el usuario representa una empresa y despligue un formulario que se guardara en la tabla empresas-->

        <!-- <div>
            <label for="">Nit de la Empresa</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Nombre de la Empresa/label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Dirección</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Correo de la Empresa</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Representante legal de la Empresa</label>
            <input type="text" name="" id="">
        </div> -->

        <div>
            <label for="">Rol</label>
            <input type="numeric" name="" id="" placeholder="Ingrese su rol">
        </div>
        <div class="">
            <label for="" name="" id="">Contraseña</label>
            <input type="password" name="">
        </div>
        <div class="">
            <label for="" name="" id="">Contraseña</label>
            <input type="text" name="">
        </div>
        <div>
            <button>Crear Nuevo Usuario</button>
        </div>
    </form>


</body>
</html>