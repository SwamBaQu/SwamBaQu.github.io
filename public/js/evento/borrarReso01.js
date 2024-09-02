document.addEventListener('DOMContentLoaded', function () {
    // Select the elements with the specified IDs
    const guardarCambios = document.getElementById('guardarCambios');
    const eliminarEvento = document.getElementById('eliminarEvento');

    // Check if the elements exist to avoid errors
    if (guardarCambios) {
        // Add a click event listener to the "Guardar Cambios" button
        guardarCambios.addEventListener('click', function (event) {
            // Prevent the default form submission
            event.preventDefault();
            // Your code to handle the click event for "Guardar Cambios" goes here
            console.log('Botón "Guardar Cambios" ha sido clicado');
        });
    }

    if (eliminarEvento) {
        // Add a click event listener to the "Eliminar Evento" button
        eliminarEvento.addEventListener('click', function () {
            // Your code to handle the click event for "Eliminar Evento" goes here
            console.log('Botón "Eliminar Evento" ha sido clicado');
        });
    }
});