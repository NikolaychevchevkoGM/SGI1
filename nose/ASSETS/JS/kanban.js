const tooDo=document.querySelectorAll(".list_Todo");
const estados= document.querySelectorAll(".status");
let dragObjeto= null;

//-----Esta seccion es la que permite arrastar elementos----//
tooDo.forEach((todo)=>{
    todo.addEventListener("dragstart", dragStart);
    todo.addEventListener("dragend", dragEnd);
});

function dragStart(){
    dragObjeto=this;
    console.log("dragStar");
}
function dragEnd(){
    dragObjeto=this;
    console.log("dragEnd");
}
//---------------Finaliza acá---------------------------//

//-----Esta sección es la que permite que las columnas
//-----Detecten el elemento que se esta arrastrando----//
estados.forEach(status =>{
    status.addEventListener('dragover', dragOver);
    status.addEventListener("dragenter", dragEnter);
    status.addEventListener("dragleave", dragLeave);
    status.addEventListener("drop", dragDrop);
})

function dragOver(e){
    e.preventDefault();
    // console.log("dragOver")
}

function dragEnter(){
    this.style.border= "1px dashed #ccc"
    console.log("dragEnter");
}

function dragLeave(){
    this.style.border= "none"
    console.log("dragLeave");
}
function dragDrop(){
    this.style.border= "none"
    this.appendChild(dragObjeto);
    console.log("dropped");
}



/*Modal o ventana emergente al dar click en el boton añadir*/

const btns= document.querySelectorAll("[data-target-modal]");
const cerrar_modal=document.querySelectorAll(".close-modal");
const overlay=document.getElementById("overlay");

btns.forEach((btn) => {
    btn.addEventListener("click", ()=>{
        document.querySelector(btn.dataset.targetModal).classList.add("active");
        overlay.classList.add("active");
    });
});

cerrar_modal.forEach((btn)=>{
    btn.addEventListener("click",()=>{
        const modal= btn.closest(".modal");
        modal.classList.remove('active');
        overlay.classList.remove('active');
    });
});

window.onclick=(event)=>{
    if(event.target==overlay){
        const modals=document.querySelectorAll(".modal");
            modals.forEach((modulo)=>modulo.classList.remove("active"));
            overlay.classList.remove("active");
    }
}



//----Gnerar el HTML de la tarea que se quiere agregar---//

const hacer=document.getElementById("hacer_submit");

hacer.addEventListener("click", crearTarea);

function crearTarea(){

    const hacer_div=document.createElement("div");
    const vlr_input=document.getElementById('hacer_input').value;
    const txt= document.createTextNode(vlr_input);

    hacer_div.appendChild(txt);
    hacer_div.classList.add("list_Todo");
    hacer_div.setAttribute("draggable", true);

    /*Crear el icono del span */
    const span=document.createElement("span");
    const span_txt= document.createTextNode("\u00D7")
    span.classList.add("close");
    span.appendChild(span_txt);
    hacer_div.appendChild(span);

    // console.log(hacer_div)
    no_status.appendChild(hacer_div)//con esta linea nos permite crear las tareas 

    hacer_div.addEventListener("dragstart", dragStart);//estas dos lineas nos permiten mover la cantidad de elementos creado que queramos 
    hacer_div.addEventListener("dragend", dragEnd);

    document.getElementById("hacer_input").value="";//hace que el campo no quede con inforación previamiente guardada
    span.addEventListener("click",()=> {
        span.parentElement.style.display="none"
    });


    toDo_form.classList.remove("active");//y estas hacen que se cierre correctamenta la ventana emergente
    overlay.classList.remove("active");
}



//----Funcion para eliminar un tarea del tablero----//

const close_btns= document.querySelectorAll(".close");


    //esta funcion solo nos permite cerrar un elemento, por lo tanto debemos pasarla a la funcion de arriba
    //y debemos camibiar el paramatro "btn" por la varibale que crea y guarda el icono de la X en la funcion de arriba, en este caso "span"
close_btns.forEach((btn)=>{ 
    btn.addEventListener("click",()=> {
        btn.parentElement.style.display="none"
    });
}); 