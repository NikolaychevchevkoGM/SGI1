fetch('../../MODELS/sgc/callPed.php',{
    method:'GET'
})
.then(res => res.json())
.then(data =>{
    let espc='';

    data.map(item=>{
        espc+=`
        <tr>
            <td>${item.id_CodP}</td>
            <td>${item.nom_Usu}</td>
            <td>${item.nombre}</td>
            <td>${item.fecha_realizado}</td>
            <td>${item.fecha_llego}</td>
            <td>${item.persona_recibe}</td>
            <td>${item.estado}</td>
            <td><button><a href="">Eliminar</button></td>
            <td><button><a href="">Ver/Editar</button></td>
        </tr>
        `
    })
    document.getElementById('verPed').innerHTML=espc
})