<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= URL_BASE_PATH ?>public/img/logos/miniDOPAv2darkU.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>DOPA - Panel de Administrador</title>
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/panelcrear.css">
    <script src="<?= URL_BASE_PATH ?>public/js/barrahover.js" async defer></script>
    <script src="<?= URL_BASE_PATH ?>public/js/iconouserhover.js" async defer></script>
    <script src="<?= URL_BASE_PATH ?>public/js/burgeropen.js" async defer></script>
    <script src="<?= URL_BASE_PATH ?>public/js/burgerclose.js" async defer></script>
    <script src="<?= URL_BASE_PATH ?>public/js/sala/async.js"></script>
</head>

<body>
    <header>
        <div class="contenedorlogo" id="logo-header">
            <div class="headercontenedor">
                <div class="burgercontenedor">
                    <button class="abrirburger" id="abrir">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div class="contenedordopa">
                    <a href="<?= URL_BASE ?>admin/panelAdmin">
                        <img src="<?= URL_BASE_PATH ?>public/img/logos/DOPAv2darkU.png" alt="LogoDopa" class="logo">
                    </a>
                </div>
                <div class="contenedoriconos">
                    <a href="#" title="Mi Perfil" class="linkmiperfil"><img src="<?= URL_BASE_PATH ?>public/img/perfil/iconoperfil.png" alt="ImagenPerfil" class="imagenperfil"></a>
                </div>
            </div>
        </div>
        <div class="navresponsive">
            <div class="contenedorbarranav" id="contenedorbarranav">
                <ul class="menuhorizontal" id="menuhorizontal">
                    <li class="liboton">
                        <button class="cerrarburger" id="cerrar">
                            <i class="fa-solid fa-xmark fa-xl"></i>
                        </button>
                    </li>
                    <li>
                        <div class="lisubcontenedor">
                            <a href="<?= URL_BASE ?>sala/nuevo">CREAR SALAS</a>
                        </div>
                    </li>
                    <li>
                        <div class="lisubcontenedor">
                            <a href="<?= URL_BASE ?>sala/listar">LISTAR SALAS</a>
                        </div>
                    </li>
                    <span class="seleccion"></span>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="formulariocontenedor">
            <div class="formulario">
                <div class="botonborrar" title="Eliminar Sala">
                    <form action="<?= URL_BASE ?>sala/borrar" method="post" id="FormBorrar">
                        <input type="hidden" id="id" name="id" value="<?= $sala->getId() ?>">
                        <button type="button" value="Eliminar Sala" id="BtnBorrar"><i class="fa-solid fa-trash-can" id="iconoBorrar"></i></button>
                    </form>
                </div>
                <div class="mensajeborrar" id="mensajeBorrar">
                    <p>¡Sala Eliminada!</p>
                </div>
                <div class="titulo">
                    <h1>Editar Sala</h1>
                </div>
                <form action="<?= URL_BASE; ?>sala/modificar" method="post" id="FormModificar">
                    <input type="hidden" value="<?= URL_BASE; ?>" id="urlbase">
                    <div class="campos">
                        <div class="arriba">
                            <div class="izquierda">
                                <input type="hidden" id="id" name="id" required
                                    value="<?= $sala->getId() ?>">
                            </div>
                            <div class="derecha">
                            </div>
                        </div>
                        <div class="abajo">
                            <div class="campo">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" disabled
                                    value="<?= $sala->getNombre() ?>">
                                <span class="input-linea"></span>
                            </div>
                            <div class="campo">
                                <label for="sala">Sala</label>
                                <input type="text" id="sala" name="sala"
                                    value="<?= $sala->getSala() ?>" required>
                                <span class="input-linea"></span>
                            </div>
                            <div class="campo">
                                <label for="ubicacion">Ubicación</label>
                                <input type="text" id="ubicacion" name="ubicacion"
                                    value="<?= $sala->getUbicacion() ?>" disabled>
                                <span class="input-linea"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mensaje" id="mensaje">
                        <p>¡Cambios Guardados!</p>
                    </div>
                    <div class="botonsubmit">
                        <input type="button" value="Guardar Cambios" id="BtnEnviar">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>