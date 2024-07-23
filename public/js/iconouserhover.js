const iconouser = document.getElementById('iconouser');

iconouser.addEventListener('mouseover', () => {
    iconouser.classList.add('fa-solid');
    iconouser.classList.remove('fa-regular');
})

iconouser.addEventListener('mouseleave', () => {
    iconouser.classList.add('fa-regular');
    iconouser.classList.remove('fa-solid');
})
