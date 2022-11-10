<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ASSETS/CSS/pagPr/regis.css">
    <title>Formulario Usuarios</title>
</head>
<body class="bdo2">

    <?php require_once('lateral.php');?>
    <?php require_once('head.php');?>
    
    
    <!-- <div>
        <h1>Agregar uevo usuario</h1>
    </div>
    <form action="" method="post" id="form2-2">
        <div class="">
            <label for="" name="cc" >Cédula</label>
            <input type="numeric" name="cc" id="cc">
        </div>
        <div class="">
            <label for="" name="nomb">Nombre</label>
            <input type="text" name="nomb" id="nomb">
        </div>
        <div class="">
            <label for="" name="lastNa" >Apellidos</label>
            <input type="text" name="lastNa" id="lastNa">
        </div>
        <div class="">
            <label for="" name="nombUs">Nombre de usuario</label>
            <input type="text" name="nombUs" id="nombUs">
        </div>
        <div class="">
            <label for="" name="numC" >Número de contacto</label>
            <input type="tel" name="numC" id="numC">
        </div>
        <div class="">
            <label for="" name="email">Correo electrónico</label>
            <input type="text" name="email" id="email">
        </div> -->
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

        <!-- <div>
            <label for="" name="rol">Rol</label>
            <input type="numeric" name="rol" id="rol" placeholder="Ingrese su rol">
        </div>
        <div class="">
            <label for="" name="pasword" >Contraseña</label>
            <input type="password" name="pasword" id="pasword">
        </div>
        <div class="">
            <label for="" name="pasword2" >Contraseña</label>
            <input type="text" name="pasword2" id="pasword2">
        </div>
        <div>
            <button type="submit" id="btn"  >Crear Nuevo Usuario</button>
        </div>
    </form> -->
    <div class="container2">
        <div class="title">Registrarse</div>
        <form action="" method="post" id="form2-2">
            <div class="user-details">
                <div class="input-box">
                   <label for="" name="cc"></label><span class="details">Cédula</span class="barra"></label>
                   <input type="text" name="cc" id="cc" placeholder="Introduce tu cédula" > 
                </div>
                <div class="input-box">
                   <label for="" name="nomb"><span class="details">Nombres</span class="barra"></label>
                   <input type="text"  name="nomb" id="nomb" placeholder="Introduce tus nombres"> 
                </div>
                <div class="input-box">
                   <label for="" name="lastNa"><span class="details">Apellidos</span class="barra"></label>
                   <input type="text"name="lastNa" id="lastNa"  placeholder="Introduce tus apellidos"> 
                </div>
                <div class="input-box">
                   <label for=""  name="nombUs" ><span class="details">Nombre de usuario</span class="barra"></label>
                   <input type="text" name="nombUs" id="nombUs" placeholder="Introduce tu nombre de usuario" > 
                </div>
                <div class="input-box">
                   <label for="" name="numC"><span class="details">Numero de contacto</span class="barra"></label>
                   <input type="tex" name="numC" id="numC" placeholder="Introduce tu correo electrónico"> 
                </div>
                <div class="input-box">
                   <label for="" name="email" ><span class="details">Correo electrónico</span class="barra"></label>
                   <input type="text" name="email" id="email" placeholder="Introduce tu número" > 
                </div>
                <div class="input-box">
                   <label for="" name="pasword" ><span class="details">Contraseña</span class="barra"></label>
                   <input type="password" name="pasword" id="pasword" placeholder="Crea tu contraseña" > 
                </div>
                <div class="input-box">
                    <label for="" name="rol">Rol</label>
                    <input type="number" name="rol" id="rol"min="1" max="2" placeholder="Ingrese su rol">
                </div>
                <div class="input-box">
                   <label for="" name="pasword2" ><span class="details">Contraseña</span class="barra"></label>
                   <input type="password" name="pasword2" id="pasword2" placeholder="Confirma tu contraseña"> 
                </div>
            </div>
            <div class="button">
               <a><input type="submit" value="Crear usuario"></a>
            </div>
        </form>

<script src="../../ASSETS/JS/regularExpres.js" ></script>
<script src="../../ASSETS/JS/Admsgc/regisNU.js" ></script>
<script src="../../ASSETS/JS/sweetalert2.all.min.js" ></script>

</body>
</html>