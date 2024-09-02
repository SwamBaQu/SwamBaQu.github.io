const botondireccion = document.getElementById('botondireccion');
const iconodireccion = document.getElementById('iconodireccion');

const botondireccion1 = document.getElementById('botondireccion1');
const iconodireccion1 = document.getElementById('iconodireccion1');

const botondireccion2 = document.getElementById('botondireccion2');
const iconodireccion2 = document.getElementById('iconodireccion2');

botondireccion.addEventListener('mouseover', () => {
    iconodireccion.classList.add('fa-bounce');
})

botondireccion.addEventListener('mouseleave', () => {
    iconodireccion.classList.remove('fa-bounce');
})



botondireccion1.addEventListener('mouseover', () => {
    iconodireccion1.classList.add('fa-bounce');
})

botondireccion1.addEventListener('mouseleave', () => {
    iconodireccion1.classList.remove('fa-bounce');
})



botondireccion2.addEventListener('mouseover', () => {
    iconodireccion2.classList.add('fa-bounce');
})

botondireccion2.addEventListener('mouseleave', () => {
    iconodireccion2.classList.remove('fa-bounce');
})
