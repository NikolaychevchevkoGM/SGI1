fetch('call.php')
.then(res => res.json())
.then(data =>{
    // console.log(data);

    let str='';
    data.map(item=>{
        str+=`
        <tr>
            <td>${item.nombre}</td>
            <td>${item.apellidos}</td>
            <td>${item.tel}</td>
            <td>${item.email}</td>
            <td>${item.rol_id}</td>
            <td>Eliminar</td>
            <td>Ver/Editar</td>
        </tr>
        `
    });
    document.getElementById('verUs').innerHTML=str;


});
