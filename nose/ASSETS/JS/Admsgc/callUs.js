fetch('../../MODELS/sgc/callUss.php')
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
            <td>${item.nom_E}</td>
            <td>${item.tip_de_usu}</td>
            <td><button><a href="">Eliminar</button></td>
            <td><button><a href="">Ver/Editar</button></td>
        </tr>
        `
    });
    document.getElementById('verUs').innerHTML=str;


});