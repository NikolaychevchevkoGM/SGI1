
//barra lateral

const btnToggle = document.querySelector('.toggle-btn') 

btnToggle.addEventListener('click', function () {
    document.getElementById('sidebar').classList.toggle('active');
})

//modal

const openModal = document.querySelector('.imagenPerfil');
const modal = document.querySelector('.modal')
const closeModal = document.querySelector('.modal__close')

openModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.add('modal--show')
});

closeModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove('modal--show')
})

//cerrar

const cerrar = document.querySelector('#cerrar')

cerrar.addEventListener('click', () => {

    const site = 'http://localhost/';

    window.close(site);
})