
//CODIGO PARA EVITAR QUE SE RECARGUIE LA PAGINA AL ENVIAR EL FORMULARIO
//MÁS EL CODIGO PARA ENVIAR LOS DATOS DEL FORMUARLIO AL DOCUMENTO PHP QUE LOS GUARDA ENLA BASE DE DATOS
//MÁS CODIGO PARA LIMPIAR LAS CAMPOS UNA VEZ ENVIADOS LOS DATOS
document.getElementById('formEnc').addEventListener('submit',function(e){

    e.preventDefault();

    let formE=new FormData(document.getElementById("formEnc"));
  
    fetch('regisE.php',{
    method: 'POST',
    body: formE 
    })
    .then(res => res.json())
    .then(data=> {
        // console.log(data);
        if(data='true'){
            document.getElementById('nomProd').value="";
            document.getElementById('cantL').value="";
            document.getElementById('cantXl').value="";
            document.getElementById('dateT').value="";
            document.getElementById('dateTentr').value="";
            document.getElementById('nomTrabajador').value="";
            echo("Pedido realizado con exito");
        }
    });
});


