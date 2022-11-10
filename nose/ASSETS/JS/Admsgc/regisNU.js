     document.getElementById('form2-2').addEventListener('submit', function(e){

        var cc=document.querySelector('#cc').value;
        var nombre=document.querySelector('#nomb').value;
        var apell=document.querySelector('#lastNa').value;
        var usuario=document.querySelector('#nombUs').value;
        var tel=document.querySelector('#numC').value;
        var correo=document.querySelector('#email').value;
        var rol=document.querySelector('#rol').value;
        var contraseña=document.querySelector('#pasword').value;
        var contraseña2=document.querySelector('#pasword2').value;

        e.preventDefault();

        if(cc.trim()=='' || nombre.trim()==='' ||
        apell.trim()==='' || usuario.trim()==='' || tel.trim()==='' ||
        correo.trim()===''|| rol.trim()==='' || 
        contraseña.trim()==='' || contraseña2.trim()===''){
            Swal.fire({
                icon:'error',
                title: 'ERROR',
                text: 'FALTAN CAMPOS POR LLENAR',
                footer: 'CRUD CONTACTO'
            });
            return;
        };

        if(!validarCc(cc)){ 
            Swal.fire({
                icon:'error',
                title: 'ERROR',
                text: 'El numero ingresado debe ser de almenos 11 digitos',
                footer: 'CRUD CONTACTO'
            });
            return;
        }
        if(!validarNombre(nombre)){ 
            Swal.fire({
                icon:'error',
                title: 'ERROR',
                text: 'Ingrese un nombre valido',
                footer: 'CRUD CONTACTO'    
            });
            return;
        }
        if(!validarApe(apell)){ 
            Swal.fire({
                icon:'error',
                title: 'ERROR',
                text: 'Ingrese un apellido valido',
                footer: 'CRUD CONTACTO'
            });
            return;
        }
        if(!validarUsu(usuario)){ 
            Swal.fire({
                icon:'error',
                title: 'ERROR',
                text: 'Ingrese un usuario valido',
                footer: 'CRUD CONTACTO'
            });
            return;
        }
        if(!validarTel(tel)){ 
            Swal.fire({
                icon:'error',
                title: 'ERROR',
                text: 'El telefono debe ser de al menos 10 caracteres y solo numeros ',
                footer: 'CRUD CONTACTO'
            });
            return;
        }
        // if(!validarEmail(correo)){ 
        //     Swal.fire({
        //         icon:'error',
        //         title: 'ERROR',
        //         text: 'Ingrese un correo valido <br> Ejemplo: ejemplo@gmail.com',
        //         footer: 'CRUD CONTACTO'
        //     });
        //     return;
        // }
        if(!validarPsw(contraseña)){ 
            Swal.fire({
                icon:'error',
                title: 'ERROR',
                text: 'Debe ingresar una contraseña que contenga <br> Mayusuculas, minusculas y al menos un caracter especial, minimo de ocho digitos',
                footer: 'CRUD CONTACTO'
            });
            return;
        }
        if(!validarPsw2(contraseña2)){ 
            Swal.fire({
                icon:'error',
                title: 'ERROR',
                text: 'Debe ingresar una contraseña que contenga <br> Mayusuculas, minusculas y al menos un caracter especial, minimo de ocho digitos',
                footer: 'CRUD CONTACTO'
            });
            return;
        }

        if(contraseña2 !== contraseña ){
            Swal.fire({
                icon:'error',
                title: 'ERROR',
                text: 'Las contraseñas no coinciden',
                footer: 'CRUD CONTACTO'
            })
        }
    })


    


