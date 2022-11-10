document.getElementById('agreg_insum').addEventListener('submit', function(e){

    e.preventDefault();

    let formIns=new FormData(document.getElementById('agreg_insum'));

    fetch('../../MODELS/invent/create/agreg_insum.php',{
        method:'POST',
        body:formIns
    })
    .then(res => res.json())
    .then(data=> {

        if(data='true'){

            document.getElementById('nombInsumo').value="";
            document.getElementById('descInsumo').value="";
            document.getElementById('fechaIngreso').value="";
            document.getElementById('unidadesInsumo').value="";
            document.getElementById('proveedorId').value="";
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