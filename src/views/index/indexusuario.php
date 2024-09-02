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
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/indexusuario.css">
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
                    <a href="<?= URL_BASE ?>usuariocomun/panelUsuarioComun">
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
                            <a href="<?= URL_BASE ?>usuariocomun/panelUsuarioComun" class="linknav">INICIO</a>
                            <a href="#" class="linknavtactil">INICIO</a>
                            <button class="desplegarul">
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                        </div>
                        <ul class="menuvertical">
                            <li><a href="#clases">Clases</a></li>
                            <li><a href="#eventos">Eventos</a></li>
                        </ul>
                    </li>
                    <span class="seleccion"></span>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="bienvenida">
            <h1> ¡VENÍ A MOVERTE Y A DISFRUTAR <br> AL MÁXIMO!</h1>
        </div>
        <div class="barraseparacion"></div>
        <div class="contenedor">
            <div class="inscribirclases" id="clases">
                <div class="tituloclases">
                    <h2>¡Formá parte de nuestras clases!</h2>
                </div>
                <div class="contenidoclases">
                    <p>Inscribite en las clases que te ofrecemos en DOPA.</p>
                    <p>Podés ver las clases que tenemos para vos, sus características, etc. Y podes inscribirte en la que vos quieras.</p>
                    <a href="#" Titulo="Ver clases disponibles">Ver clases disponibles</a>
                </div>
            </div>

            <div class="inscribireventos" id="eventos">
                <div class="tituloeventos">
                    <h2>¡Formá parte de nuestros eventos!</h2>
                </div>
                <div class="contenidoeventos">
                    <p>Inscribite en los eventos que te ofrecemos en DOPA.</p>
                    <p>Podés ver los eventos que tenemos para vos, sus características, etc. Y podes inscribirte en el que vos quieras.</p>
                    <a href="#" Titulo="Ver eventos disponibles">Ver eventos disponibles</a>
                </div>
            </div>
        </div>
        <div class="barraseparacion"></div>
    </main>
    <footer>
        <div class="contenedorfooter">
            <div class="mainfooter">
                <div class="submainfooter">
                    <div class="empresa mainfooterson">
                        <div class="contenido empresason">
                            <img src="<?= URL_BASE_PATH ?>public/img/logos/DOPAv2lightU.png" alt="LogoDopa">
                            <h4>¡Hacete parte de DOPA!</h4>
                            <p>En DOPA ofrecemos una amplia gama de actividades diseñadas para todos los gustos y
                                niveles de habilidad. <br> Ya
                                sea que seas un apasionado del deporte, un amante del agua, un entusiasta del fitness,
                                un buscador de bienestar o un
                                padre o madre que busca actividades para sus hijos, siempre tenemos algo especial para vos.
                            </p>
                            <div class="redes">
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="sedes mainfooterson">
                        <div class="contenido sedesson">
                            <h4>Sede Montevideo</h4>
                            <p><i class="fa-solid fa-location-dot"></i> Av. Gral. Flores 2228, 11800 Montevideo</p>
                            <p><i class="fa-solid fa-phone"></i> +598 2480 8300</p>
                            <p><i class="fa-solid fa-clock"></i> Lunes a Viernes de 6:30 a 22:30</p>

                            <h4>Sede Canelones</h4>
                            <p><i class="fa-solid fa-location-dot"></i> Pdte. Tomas Berreta 392, 90000 Canelones</p>
                            <p><i class="fa-solid fa-phone"></i> +598 2480 8301</p>
                            <p><i class="fa-solid fa-clock"></i> Lunes a Viernes de 6:30 a 22:30 </p>

                            <h4>Sede San José</h4>
                            <p><i class="fa-solid fa-location-dot"></i> Dr. E. G. Ciganda 617, 80000 San José de Mayo</p>
                            <p><i class="fa-solid fa-phone"></i> +598 2480 8302</p>
                            <p><i class="fa-solid fa-clock"></i> Lunes a Viernes de 6:30 a 22:30 <br> Sábado de 8 a 20</p>
                        </div>
                    </div>
                </div>
                <div class="submainfooter">
                    <div class="app mainfooterson">
                        <div class="contenido appson">
                            <h4>Aplicación Móvil</h2>
                                <h5>Descargá nuestra Aplicación Móvil</h5>
                                <p>¡Llevá tu entrenamiento al siguiente nivel con nuestra Aplicación Móvil! Reservá clases,
                                    llevá un registro de tus
                                    entrenamientos, y recibí notificaciones de eventos y promociones directamente en tu
                                    teléfono.</p>
                                <p>Disponible en Google Play y App Store.</p>
                                <div class="apps">
                                    <a href="#"><i class="fa-brands fa-google-play"></i></a>
                                    <a href="#"><i class="fa-brands fa-app-store-ios"></i></a>
                                </div>
                        </div>
                    </div>
                    <div class="legal mainfooterson">
                        <div class="contenido legalson">
                            <h4>Información Legal</h4>
                            <a href="#">Términos y Condiciones</a>
                            <a href="#">Política de Privacidad</a>
                            <a href="#">Aviso Legal</a>
                            <a href="#">Política de Cookies</a>
                            <a href="#">Condiciones de Membresía</a>
                            <a href="#">Política de Seguridad</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="finfooter mainfooterson">
                <p>GIMNASIO POLIDEPORTIVO DOPA© DERECHOS RESERVADOS 2018-2025</p>
            </div>
        </div>
    </footer>
</body>

</html>