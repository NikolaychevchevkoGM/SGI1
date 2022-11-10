const validarEmail=(correo)=>{
    return /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(correo.trim());
}

const validarNombre=(nombre)=>{
    return /^([a-z ñáéióú]{2,60})$/i.test(nombre.trim());
}

const validarApe=(apell)=>{
    return /^([a-z ñáéióú]{2,60})$/i.test(apell.trim());
}

const validarUsu=(usuario)=>{
    return /^([a-z ñáéióú]{2,60})$/i.test(usuario.trim());
}

const validarCc=(cc)=>{
    return /^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){3})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/.test(cc.trim());
}

const validarTel=(tel)=>{
    return /^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){3})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/.test(tel.trim());
}

const validarPsw=(contraseña)=>{
    return /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/.test(contraseña.trim());
}
const validarPsw2=(contraseña2)=>{
    return /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/.test(contraseña2.trim());
}