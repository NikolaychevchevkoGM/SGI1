//Creamos una funcion para ecitar que la pagina se recargue

document.getElementById('fR2').addEventListener('submit',function(e){
    e.preventDefault(); //con estas dos lineas queda lista el evitar que se recargue la pagina

    let formulario=new FormData(document.getElementById('fR2'));

    fetch('registrar.php',{
        method:'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data=>{
        if(data=='true'){
            document.getElementById('cc').value="",
            document.getElementById('nombre').value="",
            document.getElementById('segNomb').value="",
            document.getElementById('tel').value="",
            document.getElementById('email').value="",
            document.getElementById('psword').value="",
            document.getElementById('rol').value=""
            alert("Usuario creado con exito");

        }else{
            console.log(data);
        }
    });
});