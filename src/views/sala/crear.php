<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/index/index.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1>crear sala</h1>
    <form action="<?= URL_BASE; ?>sala/crear" method="POST">

        <label for="id">Id sala:</label>
        <input type="number" id="id" name="id" required
            value="<?= $sala->getId() ?>"><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required
            value="<?= $sala->getNombre() ?>"><br><br>

        <label for="sala">Sala:</label>
        <input type="text" id="sala" name="sala" required
            value="<?= $sala->getSala() ?>"><br><br>

        <label for="ubicacion">Ubicacion:</label>
        <input type="text" id="ubicacion" name="ubicacion" required
            value="<?= $sala->getUbicacion() ?>"><br><br>

        <button type="submit">Registrar Sala</button>
    </form>
</body>

</html>