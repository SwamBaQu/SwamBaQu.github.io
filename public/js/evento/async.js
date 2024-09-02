document.addEventListener('DOMContentLoaded', () => {
    const urlbase = document.getElementById('urlbase').value;
    const FormModificar = document.getElementById('FormModificar');
    const FormBorrar = document.getElementById('FormBorrar');
    const BtnEnviar = document.getElementById('BtnEnviar');
    const BtnBorrar = document.getElementById('BtnBorrar');
    const mensaje = document.getElementById('mensaje');
    const mensajeBorrar = document.getElementById('mensajeBorrar');
    const iconoBorrar = document.getElementById('iconoBorrar');
    let GuardarisCooldown = false;
    let BorrarisCooldown = false;

    BtnEnviar.addEventListener('click', (event) => {
        console.log("editar");
        event.preventDefault(); // Prevenir el comportamiento por defecto
        event.stopPropagation(); // Prevenir la propagación del evento
        editarFormulario();
        mostrarMensaje();
    });

    BtnBorrar.addEventListener('click', (event) => {
        console.log("enviar");
        event.preventDefault(); // Prevenir el comportamiento por defecto
        event.stopPropagation(); // Prevenir la propagación del evento
        borrarFormulario(); // Llamada a la función asíncrona sin await
        mostrarMensajeBorrar();
        cambiaricono()
    });

    async function editarFormulario() {
        try {
            const formData = new FormData(FormModificar);
            let url = urlbase + "evento/modificar";
            // Aquí realizamos la petición asíncrona usando fetch
            const response = await fetch(url, { // Reemplaza 'https://example.com/api' con la URL de tu API
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error('Error en la solicitud, código de estado: ' + response.status);
            }

            // Obtener la respuesta como HTML (texto)
            const result = await response.text();
            console.log('Formulario enviado con éxito, respuesta HTML:', result);

            // Aquí puedes manipular el HTML resultante, por ejemplo, insertarlo en el DOM
            //document.getElementById('resultado').innerHTML = result;

        } catch (error) {
            console.error('Error al enviar el formulario:', error);
        }
    }

    async function borrarFormulario() {
        try {
            const formData = new FormData(FormBorrar);
            let url = urlbase + "evento/borrar";
            // Aquí realizamos la petición asíncrona usando fetch
            const response = await fetch(url, { // Reemplaza 'https://example.com/api' con la URL de tu API
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error('Error en la solicitud, código de estado: ' + response.status);
            }

            // Obtener la respuesta como HTML (texto)
            const result = await response.text();
            console.log('Formulario enviado con éxito, respuesta HTML:', result);

            // Aquí puedes manipular el HTML resultante, por ejemplo, insertarlo en el DOM
            //document.getElementById('resultado').innerHTML = result;

        } catch (error) {
            console.error('Error al enviar el formulario:', error);
        }
    }

    function mostrarMensaje() {
        if (!GuardarisCooldown) {
            mensaje.classList.add('visible');
            GuardarisCooldown = true;
            setTimeout(function () {
                mensaje.classList.remove('visible');
                GuardarisCooldown = false;
            }, 2000);
        }
    }

    function mostrarMensajeBorrar() {
        if (!BorrarisCooldown) {
            mensajeBorrar.classList.add('visible');
            BorrarisCooldown = true;
            GuardarisCooldown = true;
            setTimeout(function () {
                mensajeBorrar.classList.remove('visible');
            }, 2000);
        }
    }

    function cambiaricono() {
        iconoBorrar.classList.remove('fa-trash-can');
        iconoBorrar.classList.add('fa-xmark');
        iconoBorrar.classList.add('fa-xl');
    }
});
