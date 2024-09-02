const iconofile = document.getElementById('iconofile');

iconofile.addEventListener('mouseover', () => {
    iconofile.classList.add('fa-solid');
    iconofile.classList.remove('fa-regular');
})

iconofile.addEventListener('mouseleave', () => {
    iconofile.classList.add('fa-regular');
    iconofile.classList.remove('fa-solid');
})
