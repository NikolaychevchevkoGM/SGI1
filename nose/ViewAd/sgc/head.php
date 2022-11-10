<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ASSETS/CSS/sidehead.css">
    <title>Document</title>
</head>
<body>
    

    <header>
        <h1 id="T"></h1><!--debe de ir titulo dinamico--> 
        <div>
        <img class="imagenPerfil" src="../../ASSETS/IMGS/usuario.png" alt=""> 
        <!-- <button  class="imagenPerfil">Nicolay</button> -->

        </div>
    </header>

    <section class="modal">
        <div class="modal__container">
            <img class="modal__img" src="../../ASSETS/IMGS/usuario.png" alt="">
            <!-- <button   class="modal__img" >Nicolay</button> -->
            <h2 class="modal__title"></h2>
            <p class="modal__paragraph"></p>
            <a class="paragraph" href="#">Mi Perfil</a>
            <a class="paragraph" href="#">Configuración</a>
            <button class="paragraph" onclick="cerrarS()" >Cerrar Sesión</button>
            <a class="modal__close" id="cerrar" href="#">cerrar</a>
        </div>
    </section>

    <script src="../../ASSETS/JS/sidehead.js"></script>
</body>
</html>