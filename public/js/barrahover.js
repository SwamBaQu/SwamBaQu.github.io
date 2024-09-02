const listItems = document.querySelectorAll('.menuhorizontal > li');
const seleccion = document.querySelector('.seleccion');

const handleHover = (event) => {
    const target = event.target;

    if (target.closest('.menuvertical')) return;

    const aElement = target.closest('li').querySelectorAll('a');
    let itemRect, menuRect;

    aElement.forEach(a => {
        if (a.contains(target)) {
            itemRect = a.getBoundingClientRect();
            menuRect = a.closest('.menuhorizontal').getBoundingClientRect();
        }
    });

    if (itemRect) {
        seleccion.style.width = `${itemRect.width}px`;
        seleccion.style.left = `${itemRect.left - menuRect.left}px`;
    }
};

listItems.forEach(item => {
    item.addEventListener('mouseover', handleHover);
    const links = item.querySelectorAll('a');
    links.forEach(link => {
        link.addEventListener('mouseover', handleHover);
    });
});

document.querySelector('.menuhorizontal').addEventListener('mouseleave', () => {
    seleccion.style.width = '0';
});