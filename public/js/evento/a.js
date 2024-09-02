// Select the element with the ID 'eliminarEvento'
const eliminarElemento = document.getElementById('eliminarEvento');

// Check if the element exists to avoid errors
if (eliminarElemento) {
    // Add a click event listener to the element
    eliminarElemento.addEventListener('click', function () {
        // Your code to handle the click event goes here
        console.log('Elemento con ID "eliminarEvento" ha sido clicado');
        // You can place additional code here to handle the delete operation
    });
}



const form = new FormData();
form.append("id", "12");

const options = {
    method: 'POST',
    headers: { 'content-type': 'multipart/form-data; boundary=---011000010111000001101001' }
};

options.body = form;

fetch('http://localhost/Proyecto/index.php?r=evento/borrar', options)
    .then(response => response.json())
    .then(response => console.log(response))
    .catch(err => console.error(err));


