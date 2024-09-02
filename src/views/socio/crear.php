<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/index/index.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1>crear socio</h1>
    <form action="<?= URL_BASE ?>socio/crear" method="POST">

        <label for="id">Id Socio:</label>
        <input type="hidden" id="id" name="id" required
            value="<?= $socio->getId() ?>"><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required
            value="<?= $socio->getNombre() ?>"><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required
            value="<?= $socio->getApellido() ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required
            value="<?= $socio->getEmail() ?>"><br><br>

        <label for="infomedica">Infomedica:</label>
        <input type="text" id="infomedica" name="infomedica" required
            value="<?= $socio->getInfomedica() ?>"><br><br>

        <label for="ci">Ci:</label>
        <input type="text" id="ci" name="ci" required
            value="<?= $socio->getCi() ?>"><br><br>

        <button type="submit">Registrar Socio</button>
    </form>
</body>

</html>