<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= URL_BASE_PATH ?>public/img/logos/miniDOPAv2darkU.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>DOPA - Gimnasio Polideportivo</title>
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/indexadmin.css">
    <script src="<?= URL_BASE_PATH ?>public/js/desaparecerlogo.js" async defer></script>
    <script src="<?= URL_BASE_PATH ?>public/js/barrahover.js" async defer></script>
    <script src="<?= URL_BASE_PATH ?>public/js/mobilebarranav.js" async defer></script>
    <script src="<?= URL_BASE_PATH ?>public/js/burgeropen.js" async defer></script>
    <script src="<?= URL_BASE_PATH ?>public/js/burgerclose.js" async defer></script>
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
                            <a href="<?= URL_BASE ?>admin/panelAdmin" class="linknav">INICIO</a>
                            <a href="#" class="linknavtactil">INICIO</a>
                            <button class="desplegarul">
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="menuvertical">
                            <li><a href="#eventos">Eventos</a></li>
                            <!-- <li><a href="#clases">Clases</a></li> -->
                            <li><a href="#usuarios">Usuarios</a></li>
                            <li><a href="#profesores">Docentes</a></li>
                            <li><a href="#salas">Salas</a></li>
                        </ul>
                    </li>
                    <span class="seleccion"></span>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="bienvenida">
            <h1> ¡BIENVENIDO AL PANEL DE <br> ADMINISTRACIÓN!</h1>
        </div>
        <div class="barraseparacion"></div>
        <div class="contenedor">
            <div class="gestionareventos gestion" id="eventos">
                <div class="tituloeventos tiulogestion">
                    <h2>Gestiona los Eventos</h2>
                </div>
                <div class="contenidoeventos contenidogestion">
                    <p>Gestiona los eventos que ofrece DOPA.</p>
                    <p>Crea, lista, modifica y elimina eventos.</p>
                    <a href="<?= URL_BASE ?>evento/listar" Titulo="Gestionar Eventos">Gestionar Eventos</a>
                </div>
            </div>
            <!-- <div class="gestionarclases gestion" id="clases">
                <div class="tituloclases titulogestion">
                    <h2>Gestiona las Clases</h2>
                </div>
                <div class="contenidoclases contenidogestion">
                    <p>Gestiona las Clases que ofrece DOPA.</p>
                    <p>Crea, lista, modifica y elimina clases.</p>
                    <a href="#" Titulo="Gestionar Clases">Gestionar Clases</a>
                </div>
            </div> -->
            <div class="gestionarusuarios gestion" id="usuarios">
                <div class="titulousuarios titulogestion">
                    <h2>Gestiona los Usuarios</h2>
                </div>
                <div class="contenidoeventos contenidogestion">
                    <p>Gestiona los usuarios que forman parte de DOPA.</p>
                    <p>Crea, lista, modifica y elimina usuarios.</p>
                    <a href="<?= URL_BASE ?>usuario/listar" Titulo="Gestionar Usuarios">Gestionar Usuarios</a>
                </div>
            </div>
            <div class="gestionarprofesores gestion" id="profesores">
                <div class="tituloprofesores titulogestion">
                    <h2>Gestiona los Docentes</h2>
                </div>
                <div class="contenidoprofesores contenidogestion">
                    <p>Gestiona los Profesores que forman parte de DOPA.</p>
                    <p>Crea, lista, modifica y elimina profesores.</p>
                    <a href="<?= URL_BASE ?>docente/listar" Titulo="Gestionar Profesores">Gestionar Profesores</a>
                </div>
            </div>
            <div class="gestionarsalas gestion" id="salas">
                <div class="titulosalas titulogestion">
                    <h2>Gestiona las Salas</h2>
                </div>
                <div class="contenidosalas contenidogestion">
                    <p>Gestiona los registros de las salas que tiene DOPA.</p>
                    <p>Crea, lista, modifica y elimina registros de salas.</p>
                    <a href="<?= URL_BASE ?>sala/listar" Titulo="Gestionar Salas">Gestionar Salas</a>
                </div>
            </div>
        </div>
        <div class="barraseparacion"></div>
    </main>
</body>

</html>