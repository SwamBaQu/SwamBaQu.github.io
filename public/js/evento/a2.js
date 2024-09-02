// Define una función async para manejar el evento click
async function handleClick() {
    try {
        // Crea un nuevo objeto FormData y agrega los datos
        const form = new FormData();
        form.append("id", "12");

        // Configura las opciones de la solicitud
        const options = {
            method: 'POST',
            body: form
        };

        // Realiza la solicitud usando fetch
        const response = await fetch('http://localhost/Proyecto/index.php?r=evento/borrar', options);

        // Verifica si la respuesta fue exitosa
        if (!response.ok) {
            throw new Error(`Error en la solicitud: ${response.statusText}`);
        }

        // Procesa la respuesta como JSON
        const result = await response.json();
        console.log(result);
        // Aquí puedes actualizar la interfaz de usuario o realizar otras acciones
    } catch (error) {
        // Maneja errores
        console.error('Error al eliminar el evento', error);
    }
}

// Selecciona el elemento con el ID 'eliminarEvento'
const eliminarElemento = document.getElementById('eliminarEvento');

// Verifica si el elemento existe para evitar errores
if (eliminarElemento) {
    // Asigna el manejador de eventos al elemento
    eliminarElemento.addEventListener('click', handleClick);
}
