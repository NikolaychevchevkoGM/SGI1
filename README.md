<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-info bg-primary bg-gradient">
    <section class="d-flex justify-content-center">
        <div class="card col-sm-6 p-3">             
            <div class="mb-3">
                <center><h4>ENCARGOS</h4></center>
            </div>
           <div class="mb-2"> 
                <form action="">
                    <div class="mb-2">
                        <label for="nombreP">Nombre del producto</label>
                        <input type="text" class="form-control" name="nombreP" id="nombreP" placeholder="Ingrese el nombre del producto">
                    </div>
                    <div class="mb-2">
                        <label for="cantidadLotes">Cantidad de lotes</label>
                        <input type="text" class="form-control" name="cantidadLotes" id="cantidadLotes" placeholder="Ingrese la cantidad de lotes">
                    </div>
                    <div class="mb-2">
                        <label for="cantidadXlotes">Cantidad por lotes</label>
                        <input type="text" class="form-control" name="cantidadXlotes" id="cantidadXlotes" placeholder="Ingrese la cantidad por lotes">
                    </div>
                    <div class="mb-2">
                        <label for="descripEncargo">Descripción del encargo</label>
                        <textarea name="descripEncargo" id="descripEncargo" class="form-control" placeholder="Describa el encargo" cols="57" rows="4"></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="nombreCliente">Nombre del cliente</label>
                        <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" placeholder="Ingrese el nombre del cliente">
                    </div>
                    <div class="mb-2">
                        <label for="empresaCliente">Empresa del cliente</label>
                        <input type="text" class="form-control" name="empresaCliente" id="empresaCliente" placeholder="Ingrese la empresa del cliente">
                    </div>
                    <div class="mb-2">
                        <label for="fechaRealiz">Fecha de realización</label>
                        <input type="date" class="form-control" name="fechaRealiz" id="fechaRealiz" placeholder="Ingrese la fecha de realización">
                    </div>
                    <div class="mb-2">
                        <label for="fechaEntrada">Fecha de entrada</label>
                        <input type="date" class="form-control" name="fechaEntrada" id="fechaEntrada" placeholder="Ingrese la fecha de entrada">
                    </div>
                    <div class="mb-2">
                        <label for="personaRecib">persona que recibe</label>
                        <input type="text" class="form-control" name="personaRecib" id="personaRecib" placeholder="Ingrese el nombre de la perona que recibe">
                    </div>
                    <div class="mb-2">
                        <label for="correoElect">Correo electrónico</label>
                        <input type="text" class="form-control" name="correoElect" id="correoElect" placeholder="Ingrese el correo electrónico de quien recibe">
                    </div>
                    <div class="mb-2">
                        <center><button class="btn btn-primary">Enviar</button></center>
                    </div>
                    
                </form>
            </div>
        </div> 
    </section>
</body>
</html>
