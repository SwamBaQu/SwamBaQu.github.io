document.addEventListener('DOMContentLoaded', function () {
    // Select the elements with the specified IDs
    alert("");
    const guardarCambios = document.getElementById('guardarCambios');
    const eliminarEvento = document.getElementById('eliminarEvento');

    // Check if the elements exist to avoid errors
    if (guardarCambios) {
        // Add a click event listener to the "Guardar Cambios" button
        guardarCambios.addEventListener('click', function (event) {
            // Prevent the default form submission
            event.preventDefault();
            event.stopPropagation();
            //hacer la peticion 
            const form = new FormData(document.getElementById("formEdit"));
            // form.append("id", "13");
            // form.append("titulo", "titulo");
            // form.append("hora_fecha", "'2024-12-24 14:00:00'");
            // form.append("capacidad", "20");
            // form.append("ubicacion", "ubicacion");
            // form.append("descripcion", "descripcion");

            const options = {
                method: 'POST',
                headers: { 'content-type': 'multipart/form-data; boundary=---011000010111000001101001' }
            };

            options.body = form;

            fetch('http://localhost/Proyecto/index.php?r=evento%2Fmodificar&r=evento%2Fmodificar', options)
                .then(response => response.json())
                .then(response => console.log(response))
                .catch(err => console.error(err));

            // Your code to handle the click event for "Guardar Cambios" goes here
            console.log('Botón "Guardar Cambios" ha sido clicado');
        });
    }

    if (eliminarEvento) {
        // Add a click event listener to the "Eliminar Evento" button
        eliminarEvento.addEventListener('click', function (event) {
            console.log("eliminar");
            event.preventDefault();
            event.stopPropagation();
            //hacer la peticion 

            // Your code to handle the click event for "Eliminar Evento" goes here
            console.log('Botón "Eliminar Evento" ha sido clicado');
        });
    }
});