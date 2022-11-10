document.getElementById('agreg_prod').addEventListener('submit', function(e){

    e.preventDefault();

    let formIns=new FormData(document.getElementById('agreg_prod'));

    fetch('../../MODELS/invent/create/agreg_prod.php',{
        method:'POST',
        body:formIns
    })
    .then(res => res.json())
    .then(data=> {

        if(data='true'){

            document.getElementById('nombProd').value="";
            document.getElementById('colorProd').value="";
            document.getElementById('tipoMaterial').value="";
            document.getElementById('descProd').value="";
            document.getElementById('cantLotes').value="";
            document.getElementById('cantPorLotes').value="";
            Swal.fire({
                icon:'succes',
                title: 'Correcto',
                text: 'Registro exitoso',
                footer: 'Inventario'
            });
            return;
        }
    })



})