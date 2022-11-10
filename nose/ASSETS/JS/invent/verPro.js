fetch('../../MODELS/invent/select/select_productos.php')
.then(res =>res.json())
.then(data =>{

    let espc='';

    data.map(item=>{
        espc+=`
            <tr>
            <td>${item.id_codP}</td>
            <td>${item.nombre}</td>
            <td>${item.color}</td>
            <td>${item.tip_Material}</td>
            <td>${item.cant_Lotes}</td>
            <td>${item.cantXlot}</td>
            <td>${item.estado}</td>
            <td><button><a href="../../MODELS/invent/delete/borrar_insumos.php?deleteId=${item.id_insumo}">X</a></button></td>
            <td><button><a href="../../MODELS/invent/update/actual_insumos.php?updateId=${item.id_insumo}">X</a></button></td>
            </tr>
        `
    });
    document.getElementById('tblPro').innerHTML=espc;
});