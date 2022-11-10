fetch('../../MODELS/invent/select/select_insumos.php')
.then(res =>res.json())
.then(data =>{

    let espc='';

    data.map(item=>{
        espc+=`
            <tr>
            <td>${item.id_insumo}</td>
            <td>${item.nomb_insumo}</td>
            <td>${item.descripcion}</td>
            <td>${item.fecha_ingreso}</td>
            <td>${item.unidades}</td>
            <td>${item.proveedor_id}</td>
            <td><button><a href="../../MODELS/invent/delete/borrar_insumos.php?deleteId=${item.id_insumo}">X</a></button></td>
            <td><button><a href="../../MODELS/invent/update/actual_insumos.php?updateId=${item.id_insumo}">X</a></button></td>
            </tr>
        `
    });
    document.getElementById('tblInsu').innerHTML=espc;
})