document.getElementById('form2').addEventListener('submit',function(e){

var cc=document.querySelector('#cc').value;
var nombre=document.querySelector('#nomb').value;
var apell=document.querySelector('#lastNa').value;
var usuario=document.querySelector('#nombUs').value;
var tel=document.querySelector('#numC').value;
var correo=document.querySelector('#email').value;
var contraseña=document.querySelector('#pasword').value;
var contraseña2=document.querySelector('#pasword2').value;

e.preventDefault();

        if(cc.trim()=='' || nombre.trim()==='' ||
            apell.trim()==='' || usuario.trim()==='' ||
            tel.trim()==='' || correo.trim()===''|| 
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
        
        cuadroTyC();

});

function cuadroTyC(){
    Swal.fire({
        title: 'Términos y condiciones',
        text:   `
        Aviso de Privacidad de Protección de datos personales
        DATOS DEL RESPONSABLE Y/O ENCARGADO DEL TRATAMIENTO PROTECCIÓN DE DATOS PERSONALES
        Sistema de gestión e inventario
        Institución Universitaria: Salazar y Herrera
        Dirección:	Libertadores De América #52 - 49, Laureles - Estadio, Medellín, Antioquia Correo Electrónico: viv.sgc.inv@gmail.com 
        Teléfono: 3158832083
        SGI en cumplimiento con lo dispuesto en la Constitución Política de Colombia y la Ley Estatutaria 1581 de 2012 y sus normas reglamentarias y complementarias, garantiza de forma integral la protección y el ejercicio del derecho fundamental de Habeas Data de todos los titulares de la información de carácter personal, de la cual sea responsable o encargada de su tratamiento, así mismo da cumplimiento en todo momento a los derechos fundamentales a la intimidad, el buen nombre y la privacidad de las personas naturales, razón por la cual adopta y aplica la presente Política de tratamiento de la información.
        Esta Política define y establece los principios, políticas, procedimientos, derechos y obligaciones que la Ley 1581 de 2012 y las normas complementarias han desarrollado, garantizado e implementado para los titulares de la información de carácter personal. SGI es la responsable del tratamiento de Datos Personales y en cumplimiento a lo establecido en el artículo 13 del Decreto Reglamentario 1377 de 2013, adopta y hace público a todos los interesados la presente Política que contiene todos los elementos esenciales para el cumplimiento con la legislación correspondiente a la Protección de Datos Personales. 
        El Área de Servicio al Cliente de SGI (sistema de gestión e inventario) será la responsable de la atención de peticiones, consultas y reclamos ante la cual el titular de la información puede ejercer sus derechos a conocer, actualizar, rectificar y suprimir el dato y revocar la autorización correspondiente. SGI conforme a las disposiciones contenidas en la Ley 1581 de 2012, considerada como responsable y/o encargada del tratamiento de datos personales, desarrolla el presente aviso de privacidad y de protección de datos personales, en cuanto a la recolección, almacenamiento, uso, circulación o supresión; que se reciba de los titulares de datos personales, así como la finalidad para la cual han sido recolectados los mismos.
        
        SGI recolecta información personal de carácter sensible únicamente si los titulares deciden voluntariamente entregar este tipo de información, reconociendo que su suministro se enmarca dentro de las características habilitadas para tal propósito y las facultades de uso. Los datos se recaudan especialmente para la efectiva prestación de los servicios en los que se enmarca el objeto social de SGI., cuyas principales actividades corresponden a los servicios de inventario, seguimiento, control y logística.
         
         ` ,
        footer: 'CRUD CONTACTO'
    })

}
