<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Un Encargo</title>
</head>
<body>


    <?php require_once('lateral.php');?>
    <?php require_once('head.php');?>
    
    <form action="">
        <div class="mb-2">
            <label for="nombreCliente">Nombre del cliente</label>
            <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" placeholder="Ingrese el nombre del cliente">
        </div>
        <div class="">
            <label for="">Nombre del producto</label>
            <input type="text"  name="" id="" placeholder="Ingrese el nombre del producto">
        </div>
        <!--Aca en estos dos campos, esta informacion deberia de poderse traer solo con el id del producto, pero tambien
            se puede ingresar manualmente y se podria comparar si la cantidad que se esta ingresando concuerda con la cantidad
            que hay en la tabla "Producto"
        -->
        <div class="">
            <label for="">Cantidad de lotes</label>
            <input type="text" class="" name="" id="" placeholder="Ingrese la cantidad de lotes">
        </div>
        <div class="">
            <label for="">Cantidad por lotes</label>
            <input type="text"  name="" id="" placeholder="Ingrese la cantidad por lotes">
        </div>
        <div class="">
            <label for="">Descripción del encargo</label>
            <textarea name="" id="" placeholder="Describa el encargo" cols="57" rows="4"></textarea>
        </div>
        <div class="">
            <label for="">Fecha de realización</label>
            <input type="date" name="" id="" placeholder="Ingrese la fecha de realización">
        </div>
        <div class="">
            <label for="fechaEntrada">Fecha de entrada</label>
            <input type="date"  name="" id="" placeholder="Ingrese la fecha de entrada">
        </div>
        <div class="">
            <label for="">persona que recibe</label>
            <input type="text"  name="" id="" placeholder="Ingrese el nombre de la persona que recibe">
        </div>
        <div class="">
            <label for="">Correo electrónico</label>
            <input type="text"  name="" id="" placeholder="Ingrese el correo electrónico de quien recibe">
        </div>
        <div class="">
            <button type="submit" >Enviar</button>
        </div>   
    </form>
    
</body>
</html>