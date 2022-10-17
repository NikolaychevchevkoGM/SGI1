fetch('llamarE.php')
.then(res => res.json())
.then(data =>{

    let espc='';

    data.map(item=>{
        espc+=`
        <tr>
            <td>${item.id_Enc}</td>
            <td>${item.nombreP}</td>
            <td>${item.cant_Lotes}</td>
            <td>${item.cantXlotes}</td>
            <td>${item.fecha_echo}</td>
            <td>${item.fecha_Entrada}</td>
            <td>${item.persona_recibe}</td>
        </tr>
        `
    })
    document.getElementById('tlb').innerHTML=espc
})