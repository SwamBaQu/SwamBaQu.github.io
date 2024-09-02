const cerrarnav = document.getElementById('cerrar');
const menuhorizontaal = document.getElementById('menuhorizontal');
const contenedorbarranaav = document.getElementById('contenedorbarranav');

cerrarnav.addEventListener("click", () => {
    console.log("Botón cerrar clickeado");
    menuhorizontaal.classList.add('menuhorizontal');
    menuhorizontaal.classList.remove('menuhorizontalmobile');

    contenedorbarranaav.classList.remove('burgeron');
})

