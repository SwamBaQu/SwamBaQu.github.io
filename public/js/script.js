const nav = document.querySelector('.barranav');
const menuItems = document.querySelectorAll('.menuhorizontal > li > a');
const seleccion = document.querySelector('.seleccion');

menuItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        const { left, width } = item.getBoundingClientRect();
        const navLeft = nav.getBoundingClientRect().left;
        seleccion.style.width = `${width}px`;
        seleccion.style.left = `${left - navLeft}px`;
    });
});

nav.addEventListener('mouseleave', () => {
    seleccion.style.width = '0';
});