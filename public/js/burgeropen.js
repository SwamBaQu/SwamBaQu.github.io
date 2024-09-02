const abrir = document.getElementById('abrir');
const menuhorizontal = document.getElementById('menuhorizontal');
const contenedorbarranav = document.getElementById('contenedorbarranav');

abrir.addEventListener("click", () => {
    menuhorizontal.classList.add('menuhorizontalmobile');
    menuhorizontal.classList.remove('menuhorizontal');

    contenedorbarranav.classList.add('burgeron');
})
 
