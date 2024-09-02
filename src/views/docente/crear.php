<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/index/index.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1>crear docente</h1>
    <form action="<?= URL_BASE; ?>docente/crear" method="POST">

        <label for="ci">Id docente:</label>
        <input type="number" id="ci" name="ci" required
            value="<?= $docente->getCi() ?>"><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required
            value="<?= $docente->getNombre() ?>"><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required
            value="<?= $docente->getApellido() ?>"><br><br>

        <label for="horario">Horario:</label>
        <input type="text" id="horario" name="horario" required
            value="<?= $docente->getHorario() ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required
            value="<?= $docente->getEmail() ?>"><br><br>

        <label for="oficio">Oficio:</label>
        <input type="text" id="oficio" name="oficio" required
            value="<?= $docente->getOficio() ?>"><br><br>

        <button type="submit">Registrar Docente</button>
    </form>
</body>

</html>