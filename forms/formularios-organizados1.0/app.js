var cc=document.getElementById('cc');
var nombre=document.getElementById('nombre');
var segNomb=document.getElementById('segNomb');
var tel=document.getElementById('tel');
var email=document.getElementById('email');
var psword=document.getElementById('psword');
var error=document.getElementById('error');
error.style.color ='red';


function enviarFormulario(){
    console.log('Enviando formulario...');

    var mensajesError = []

    if(cc.value== null || cc.value === ''){
    mensajesError.push('ingresa tu cédula');
    }

    if(nombre.value== null || nombre.value === ''){
    mensajesError.push('ingresa tu nombre');
    }

    if(segNomb.value=== null || segNomb.value === ''){
    mensajesError.push('ingresa tu segundo nombre');
    }

    if(tel.value=== null || tel.value === ''){
    mensajesError.push('ingresa tu teléfono');
    }

    if(email.value=== null || email.value === ''){
    mensajesError.push('ingresa tu correo');
    }

    if(psword.value=== null || psword.value === ''){
    mensajesError.push('ingresa tu contraseña');
    }

   error.innerHTML = mensajesError.join(',');

    return false;
}