
// document.getElementById('form1').addEventListener('submit', function(e){
//     var usuario=document.querySelector('#nombUs').value;
//     var contraseña=document.querySelector('#pasword').value;

//     e.preventDefault();


//     if(usuario.trim()==='' || contraseña.trim()===''){
//         Swal.fire({
//             icon:'error',
//             title: 'ERROR',
//             text: 'FALTAN CAMPOS POR LLENAR',
//             footer: 'CRUD CONTACTO'
//         });
//         return;
//     };
//     iniciarS(usuario,contraseña);
// });



// function iniciarS(){

    
//     let formIni=new FormData(document.getElementById('form1'));
//     // formIni.append("nombUs",usuario);
//     // formIni.append("pasword",contraseña);

//     fetch('../MODELS/main/formIni.php',{
//         method: 'POST',
//         body:formIni
//     })
//     .then(res => res)
//     .then( data =>{
//         console.log(data);
//         // let spc=``;
//         // data.map(item=>{
//         //     spc=`
//         //         <h1> Hola ${item.nom_Usu} </h1>
//         //     `
//         // })
//         // document.write(spc);
//         // if(data='true'){
//         //         Swal.fire({
//         //             icon:'success',
//         //             title: 'REGISTRO EXITOSO',
//         //             text: `Bienvenido ${usuario} ` ,
//         //             footer: 'CRUD CONTACTO'
//         //         });
//         //         return;
//         // }else{
//         //     Swal.fire({
//         //         icon:'error',
//         //         title: 'ERROR',
//         //         text: 'Contraseña o usuario incorrectos',
//         //         footer: 'CRUD CONTACTO'
//         //     });
//         //     return;
//         // }
//     });
// }