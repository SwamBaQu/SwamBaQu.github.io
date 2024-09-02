<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/index/index.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1>crear usuario</h1>
    <form action="<?= URL_BASE; ?>usuario/crear" method="POST">

        <label for="id">Id usuario:</label>
        <input type="number" id="id" name="id" required
            value="<?= $usuario->getId() ?>"><br><br>

        <label for="nombre">Usuario:</label>
        <input type="text" id="nombre" name="nombre" required
            value="<?= $usuario->getUsuario() ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required
            value="<?= $usuario->getEmail() ?>"><br><br>

        <label for="password">Contraseña:</label>
        <input type="text" id="password" name="password" required
            value="<?= $usuario->getPassword() ?>"><br><br>

        <button type="submit">Registrar Usuario</button>
    </form>
</body>

</html>