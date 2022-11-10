<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ASSETS/CSS/pagPr/regis.css">
    <title>Agregar un encargo</title>
</head>
<body class="bdo3">

    <?php require_once('lateral.php');?>
    <?php require_once('head.php');?>
    

    <div class="container2" >
        <div class="title" >Realizar encargo</div>
        <form action="" method="post" id="formEnc">
            <div class="user-details" >
                <div class="input-box">
                    <label for="" name="nombreCliente" ><span class="details">Nombre del cliente</span class="barra"></label><!--Aca ira el id del cliente-->
                    <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" placeholder="Ingrese el nombre del cliente">
                </div>
                <div class="input-box">
                    <label for="" name="nomP"><span class="details">Nombre del producto</span class="barra"></label><!--Aca ira el id del producto-->
                    <input type="text"  name="nomP" id="nomP" placeholder="Ingrese el nombre del producto">
                </div>
                <!--Aca en estos dos campos, esta informacion deberia de poderse traer solo con el id del producto, pero tambien
                    se puede ingresar manualmente y se podria comparar si la cantidad que se esta ingresando concuerda con la cantidad
                    que hay en la tabla "Producto"
                -->
                <div class="input-box">
                    <label for="" name="dateT" ><span class="details">Fecha de realización</span class="barra"></label>
                    <input type="date" name="dateT" id="dateT" placeholder="Ingrese la fecha de realización">
                </div>
                <div class="input-box">
                    <label for="" name="dateTentr"><span class="details">Fecha de entrada</span class="barra"></label>
                    <input type="date"  name="dateTentr" id="dateTentr" placeholder="Ingrese la fecha de entrada">
                </div>
                <div class="input-box">
                    <label for="" name="trabajador"><span class="details">persona que recibe</span class="barra"></label>
                    <input type="text"  name="trabajador" id="trabajador" placeholder="Ingrese el nombre de la persona que recibe">
                </div>
                <div class="input-box">
                    <label for="" name="describ" ><span class="details">Descripción del encargo</span class="barra"></label>
                    <textarea name="describ" id="describ" placeholder="Describa el encargo" cols="57" rows="4"></textarea>
                </div> 
            </div>
            <div class="button">
               <a href="inicioS.php "><input type="submit" value="Realizar "></a>
            </div>
        </form>
    </div>
    <script src="../../ASSETS/JS/regularExpres.js" ></script>
    <script src="../../ASSETS/JS/Admsgc/regisPed.js" ></script>
    <script src="../../ASSETS/JS/sweetalert2.all.min.js" ></script>
    
</body>
</html>