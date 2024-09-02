<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/style2.css">
    <title>Listado de Autos</title>

</head>

<body>
    <?php require 'src/views/partials/menu.php'; ?>
    <h1>Listado de Sucursales</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>nombre</th>
            <th>editar</th>

        </tr>
        <?php foreach ($sucursales as $sucursal) : ?>
            <tr>
                <td><?= htmlspecialchars($sucursal->getId()) ?></td>
                <td><?= htmlspecialchars($sucursal->getNombre()) ?></td>
                <td><a href="<?= URL_BASE ?>autos/editar&id=<?= htmlspecialchars($sucursal->getId()) ?>">Editar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>