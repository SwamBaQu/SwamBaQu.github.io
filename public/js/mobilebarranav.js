document.querySelectorAll('.desplegarul').forEach(button => {
    button.addEventListener('click', function () {
        const menuVertical = this.parentElement.nextElementSibling;
        const liSiguiente = this.parentElement.parentElement.nextElementSibling;
        const menuHeight = menuVertical.scrollHeight;
        const lisubcontenedor = this.parentElement;
        const botondesplegar = this;
        const liPropio = this.parentElement.parentElement;

        if (menuVertical && menuVertical.classList.contains('menuvertical')) {
            menuVertical.classList.toggle('visible');
        }

        if (lisubcontenedor) {
            lisubcontenedor.classList.toggle('lion');
        }   

        if (liPropio) {
            liPropio.classList.toggle('lipropioon');
        }          
        
        if (botondesplegar) {
            botondesplegar.style.transition = 'transform 0.3s ease';
            botondesplegar.classList.toggle('rotateboton')
        }

        if (liSiguiente) {
            liSiguiente.style.transition = 'margin-top 0.3s ease';

            if (liSiguiente.style.marginTop === '0px' || liSiguiente.style.marginTop === '') {
                liSiguiente.style.marginTop = `${menuHeight}px`;

            } else {
                liSiguiente.style.marginTop = '0px';

            }
        }
    });
});