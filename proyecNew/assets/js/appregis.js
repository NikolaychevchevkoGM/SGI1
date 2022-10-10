
const registrar=async()=>{

    var correo=document.querySelector("#correo").value;
    var nombre=document.querySelector("#usuario").value;
    var tel=document.querySelector("#tel").value;
    var contraseña=document.querySelector("#contraseña").value;

    if(correo.trim()==='' || 
    nombre.trim()===''||
    tel.trim()===''||
    contraseña.trim()===''
    ){
        Swal.fire({
            icon:'error',
            title: 'ERROR',
            text: 'FALTA LLENAR CAMPOS',
            footer: 'CRUD CONTACTO'
        })
        return;
    };

    if(!validarEmail(correo)){
        Swal.fire({
            icon:'error',
            title: 'ERROR',
            text: 'INTRODUCE UN CORREO VALIDO',
            footer: 'CRUD CONTACTO'
        });
        return;
    };

    if(!validarNombre(nombre)){
        Swal.fire({
            icon:'error',
            title: 'ERROR',
            text: 'INTRODUCE UN NOMBRE DE USUARIO VALIDO',
            footer: 'CRUD CONTACTO'
        });
        return;
    };

    if(!validarTel(tel)){
        Swal.fire({
            icon:'error',
            title: 'ERROR',
            text: 'INTRODUCE UN NUMERO DE CONTACTO VALIDO',
            footer: 'CRUD CONTACTO'
        });
        return;
    };
    
    if(!validarPsw(contraseña)){
        Swal.fire({
            icon:'error',
            title: 'ERROR',
            text: 'INTRODUZCA UNA CONTRASEÑA VÁLIDA <br>[Mayusculas, minusculas, numeros y minimo 8 caracteres]',
            footer: 'CRUD CONTACTO'
        });
        return;
    };

    //INSERTAR A LA BASE DE DATOS


    const datos=new FormData();
    datos.append("correo",correo);
    datos.append("usuario",nombre);
    datos.append("tel",tel);
    datos.append("contraseña",contraseña);


    var resp= await fetch("./php/usuario/regisUsu.php" ,{
        method:'POST',
        body:datos
    });

    Swal.fire({
        icon:'success',
        title: 'EXITO',
        text: 'RESPUESTA'+resp,
        footer: 'CRUD CONTACTO'
    });



}