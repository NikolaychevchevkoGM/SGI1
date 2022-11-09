<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../proyectof/css/regis.css">
    <link rel="shortcut icon" href="../proyectof/img/hexagono.png">
    <title>Registrarse</title>
</head> 
<body>
    <div class="container">
        <div class="title">Registrarse</div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                   <span class="details">Cédula</span class="barra">
                   <input type="text" placeholder="Introduce tu cédula" required> 
                </div>
                <div class="input-box">
                   <span class="details">Nombres</span class="barra">
                   <input type="text" placeholder="Introduce tus nombres" required> 
                </div>
                <div class="input-box">
                   <span class="details">Apellidos</span class="barra">
                   <input type="text" placeholder="Introduce tus apellidos" required> 
                </div>
                <div class="input-box">
                   <span class="details">Nombre de usuario</span class="barra">
                   <input type="text" placeholder="Introduce tu nombre de usuario" required> 
                </div>
                <div class="input-box">
                   <span class="details">Correo electrónico</span class="barra">
                   <input type="text" placeholder="Introduce tu correo electrónico" required> 
                </div>
                <div class="input-box">
                   <span class="details">Número de contacto</span class="barra">
                   <input type="text" placeholder="Introduce tu número" required> 
                </div>
                <div class="input-box">
                   <span class="details">Contraseña</span class="barra">
                   <input type="password" placeholder="Crea tu contraseña" required> 
                </div>
                <div class="input-box">
                   <span class="details">Contraseña</span class="barra">
                   <input type="password" placeholder="Confirma tu contraseña" required> 
                </div>
            </div>
            <div>
                <a href="#">Términos y condiciones</a>
                <p><input type="checkbox" >Acepto términos y condiciones</p>
            </div>
            <div class="button">
               <a href="inicioS.php "><input type="submit" value="Registrar"></a>
            </div>
        </form>
    </div>
    
</html>