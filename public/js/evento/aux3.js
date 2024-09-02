const form = new FormData();
form.append("id", "13");
form.append("titulo", "titulo");
form.append("hora_fecha", "'2024-12-24 14:00:00'");
form.append("capacidad", "20");
form.append("ubicacion", "ubicacion");
form.append("descripcion", "descripcion");

const options = {
    method: 'POST',
    headers: { 'content-type': 'multipart/form-data; boundary=---011000010111000001101001' }
};

options.body = form;

fetch('http://localhost/Proyecto/index.php?r=evento%2Fmodificar&r=evento%2Fmodificar', options)
    .then(response => response.json())
    .then(response => console.log(response))
    .catch(err => console.error(err));