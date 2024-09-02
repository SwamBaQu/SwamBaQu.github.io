<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/index/index.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1>crear evento</h1>
    <form action="<?= URL_BASE; ?>evento/crear" method="POST">

        <label for="id_evento">Id evento:</label>
        <input type="number" id="id_evento" name="id_evento" required
            value="<?= $evento->getId() ?>"><br><br>

        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" required
            value="<?= $evento->getTitulo() ?>"><br><br>

        <label for="Horafecha">Hora y fecha:</label>
        <input type="datetime-remote" id="Horafecha" name="Horafecha" required
            value="<?= $evento->getHoraFecha() ?>"><br><br>

        <label for="capacidad">Capacidad:</label>
        <input type="number" id="capacidad" name="capacidad" min="1" required
            value="<?= $evento->getCapacidad() ?>"><br><br>

        <label for="ubicacion">Ubicacion:</label>
        <input type="text" id="ubicacion" name="ubicacion" required
            value="<?= $evento->getUbicacion() ?>"><br><br>

        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" required
            value="<?= $evento->getDescripcion() ?>"><br><br>

        <button type="submit">Registrar Evento</button>
    </form>
</body>

</html>