const listItems = document.querySelectorAll('.menuhorizontal > li');
const seleccion = document.querySelector('.seleccion');

const handleHover = (event) => {
    const target = event.target;

    if (target.closest('.menuvertical')) return;

    const aElement = target.closest('li').querySelector('a');
    const itemRect = aElement.getBoundingClientRect();
    const menuRect = aElement.closest('.menuhorizontal').getBoundingClientRect();
    seleccion.style.width = `${itemRect.width}px`;
    seleccion.style.left = `${itemRect.left - menuRect.left}px`;
};

listItems.forEach(item => {
    item.addEventListener('mouseover', handleHover);
    const link = item.querySelector('a');
    if (link) {
        link.addEventListener('mouseover', handleHover);
    }
});

document.querySelector('.menuhorizontal').addEventListener('mouseleave', () => {
    seleccion.style.width = '0';
});