<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?= URL_BASE_PATH ?>public/img/logos/miniDOPAv2darkU.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title>DOPA - Gimnasio Polideportivo</title>
  <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/style.css">
  <script src="<?= URL_BASE_PATH ?>public/js/desaparecerlogo.js" async defer></script>
  <script src="<?= URL_BASE_PATH ?>public/js/iconouserhover.js" async defer></script>
  <script src="<?= URL_BASE_PATH ?>public/js/iconofilehover.js" async defer></script>
  <script src="<?= URL_BASE_PATH ?>public/js/barrahover.js" async defer></script>
  <script src="<?= URL_BASE_PATH ?>public/js/slider.js" async defer></script>
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
          <a href="index.php">
            <img src="<?= URL_BASE_PATH ?>public/img/logos/DOPAv2darkU.png" alt="LogoDopa" class="logo">
          </a>
        </div>
        <div class="contenedoriconos">
          <a href="<?= URL_BASE_PATH ?>src/views/html/login.html" title="Iniciar Sesión"><i class="fa-regular fa-user iconouser" id="iconouser"></i></a>
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
              <a href="index.php" class="linknav">INICIO</a>
              <a href="#" class="linknavtactil">INICIO</a>
              <button class="desplegarul">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>
            <ul class="menuvertical">
              <li><a href="#eventos">Eventos</a></li>
              <li><a href="#actividades">Actividades</a></li>
            </ul>
          </li>
          <li>
            <div class="lisubcontenedor">
              <a href="<?= URL_BASE_PATH ?>src/views/html/sucursales.html" class="linknav">SUCURSALES</a>
              <a href="#" class="linknavtactil">SUCURSALES</a>
              <button class="desplegarul">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>
            <ul class="menuvertical">
              <li class="linknavtactil litactil"><a href="<?= URL_BASE_PATH ?>src/views/html/sucursales.html">Inicio -
                  Sucursales</a></li>
              <li><a href="<?= URL_BASE_PATH ?>src/views/html/sucursales.html#montevideo">Montevideo</a></li>
              <li><a href="<?= URL_BASE_PATH ?>src/views/html/sucursales.html#canelones">Canelones</a></li>
              <li><a href="<?= URL_BASE_PATH ?>src/views/html/sucursales.html#sanjose">San José</a></li>
            </ul>
          </li>
          <li>
            <div class="lisubcontenedor">
              <a href="#" class="linknav">PLANES</a>
              <a href="#" class="linknavtactil">PLANES</a>
              <button class="desplegarul">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>
            <ul class="menuvertical">
              <li class="linknavtactil litactil"><a href="#">Inicio - Planes</a></li>
              <li><a href="#">Plan Personal</a></li>
              <li><a href="#">Plan Familiar</a></li>
              <li><a href="#">Plan Infantíl</a></li>
            </ul>
          </li>
          <li>
            <div class="lisubcontenedor">
              <a href="#" class="linknav">ACTIVIDADES Y CLASES</a>
              <a href="#" class="linknavtactil">ACTIVIDADES Y CLASES</a>
              <button class="desplegarul">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>
          </li>
          <li>
            <div class="lisubcontenedor">
              <a href="#" class="linknav">SOBRE NOSOTROS</a>
              <a href="#" class="linknavtactil">SOBRE NOSOTROS</a>
              <button class="desplegarul">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>
            <ul class="menuvertical">
              <li class="linknavtactil litactil"><a href="#">Inicio - Sobre Nosotros</a></li>
              <li><a href="#">Misión</a></li>
              <li><a href="#">Visión</a></li>
              <li><a href="#">Objetivos</a></li>
            </ul>
          </li>
          <li>
            <div class="lisubcontenedor">
              <a href="#" class="linknav">CONTACTO</a>
              <a href="#" class="linknavtactil">CONTACTO</a>
              <button class="desplegarul">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>
            <ul class="menuvertical">
              <li class="linknavtactil litactil"><a href="#">Inicio - Contacto</a></li>
              <li><a href="#">Centro de Ayuda</a></li>
              <li><a href="#">Contáctanos</a></li>
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
      <div class="eventos">
        <div class="tituloeventos">
          <h2>Formá parte nuestros eventos</h2>
        </div>
        <div class="eventosinfo" id="eventos">
          <div class="imagenescontenedor">
            <div class="contenedorcarrusel">
              <button class="flechaslider" id="botonanterior"><i class="fa-solid fa-chevron-left iconoflechaslider"></i></button>
              <div class="imagenesgalery">
                <img src="<?= URL_BASE_PATH ?>public/img/eventos/campeonatonatacion.jpeg" alt="natación" class="slider slideron">
                <img src="<?= URL_BASE_PATH ?>public/img/eventos/carrera8k.jpg" alt="carrera" class="slider">
                <img src="<?= URL_BASE_PATH ?>public/img/eventos/patinajeartistico.jpg" alt="patinajeartistico" class="slider">
                <img src="<?= URL_BASE_PATH ?>public/img/eventos/torneokarate.jpg" alt="karate" class="slider">
                <img src="<?= URL_BASE_PATH ?>public/img/eventos/torneovoley.jpg" alt="voleybol" class="slider">
              </div>
              <button class="flechaslider" id="botonsiguiente"><i class="fa-solid fa-chevron-right iconoflechaslider"></i></button>
            </div>
            <div class="mobileflechasslider">
              <button class="flechaslider" id="mobilebotonanterior"><i
                  class="fa-solid fa-chevron-left iconoflechaslider"></i></button>
              <button class="flechaslider" id="mobilebotonsiguiente"><i
                  class="fa-solid fa-chevron-right iconoflechaslider"></i></button>
            </div>
            <div class="contenedorpuntos">
              <div class="puntos">
                <span class="punto puntoon"></span>
                <span class="punto"></span>
                <span class="punto"></span>
                <span class="punto"></span>
                <span class="punto"></span>
              </div>
            </div>
          </div>
          <div class="textocontenedor">
            <div class="texto  textoon">
              <h3>- Campeonato de Natación -</h3>
              <p>El 15 de Marzo de 2024 se llevó a cabo el Campeonato de Natación N°14 en nuestra sede de
                San José de 10:00hs a 12:00hs con 37 participantes.</p>
              <p>Los ganadores del primer, segundo y tercer lugar de la categoría masculina fueron Franco
                Silva, Mathías Olivera y Camilo Pérez consecutivamente. Mientras que las ganadoras de la
                categoría femenina para el primer, segundo y tercer puesto fueron Lucía Navarro, Camila
                Lemes y Victoria García.</p>
              <a href="#">Enterate de nuestros próximos eventos</a>
            </div>
            <div class="texto">
              <h3>- Carrera 8K -</h3>
              <p>El 4 de Abril de 2024 participaron 200 personas en la 9° Edición de la Carrera 8K en el
                Mercado Agrícola de Montevideo (José L. Terra 2220) de 15:00hs a 20:00hs.</p>
              <p>La entrada para los no-socios fue de 400$, mientras que para los socios, la participación
                en el evento fue, como de costumbre, completamente gratuita. </p>
              <p>Durante la carrera se contó con el equipo médico y las ambulancias necesarias en caso de
                cualquier incidente de la mano de nuestros afiliados: Asociación Española.</p>
              <a href="#">Enterate de nuestros próximos eventos</a>
            </div>
            <div class="texto">
              <h3>- Exhibición de Patinaje Artístico -</h3>
              <p>El 10 de Junio de 2024 se realizó la primera exhibición de patinaje artístico en nuestra
                sede de Montevideo de 18:00hs a 20:00hs en la que participaron 15 concursantes.</p>
              <p>La entrada fue de 400$ para los no-socios y el evento se realizó con el objetivo de
                recaudar fondos para poder construir salas de patinaje en nuestras 2 sedes en San José y
                Canelones.</p>
              <a href="#">Enterate de nuestros próximos eventos</a>
            </div>
            <div class="texto">
              <h3>- Torneo de Karate -</h3>
              <p>El 28 de Agosto de 2024 nuestros alumnos de Karate participaron en la Edición N°8 del
                Torneo de Karate Adolescente Mixto en nuestra sede en Canelones de 13:00hs a 15:30hs en
                el que participaron 19 concursantes.</p>
              <p>El top 1 del torneo fue para Thiago Jiménez, el top 2 fue para Daniel Gómez y finalmente
                el top 3 fue para Sabrina Cruz.</p>
              <a href="#">Enterate de nuestros próximos eventos</a>
            </div>
            <div class="texto">
              <h3>- Torneo de Voleibol -</h3>
              <p>Se jugó la edición N°6 del Torneo de Voleibol en nuestra sede de Canelones el 12 de
                Septiembre de 2024 de 10:00hs a 13:30hs.</p>
              <p>La entrada fue de 300$ y participaron 48 personas, es decir, 8 equipos, que fueron
                organizados en el momento con sorteo.</p>
              <a href="#">Enterate de nuestros próximos eventos</a>
            </div>
          </div>
        </div>
      </div>
      <div class="actividadescontainer">
        <div class="tituloactividades">
          <h2>Mirá las actividades que tenemos para vos</h2>
        </div>
        <div class="actividades" id="actividades">
          <div class="filaactividades">
            <div class="subfilaactividades">
              <div class="cardactividad deportes">
                <div class="cardtitulo deportestitulo">
                  <h3>DEPORTES</h3>
                </div>
                <div class="contenidocard">
                  <p>Basketball - Fútbol - Voleibol - Tenis - Bádminton - Squash - Boxeo - Karate -
                    Patinaje Artístico</p>
                  <a href="#" class="sabermas">Saber Más</a>
                </div>
              </div>
              <div class="cardactividad actividadesacuatic">
                <div class="cardtitulo acuatictitulo">
                  <h3>ACTIVIDADES ACUATICAS</h3>
                </div>
                <div class="contenidocard">
                  <p>Natación - Aquaeróbic - Waterpolo - Salvamiento y Socorrismo - Rehabilitación
                    Acuática - Buceo</p>
                  <a href="#" class="sabermas">Saber Más</a>
                </div>
              </div>
            </div>
            <div class="subfilaactividades">
              <div class="cardactividad fitness">
                <div class="cardtitulo fitnesstitulo">
                  <h3>FITNESS</h3>
                </div>
                <div class="contenidocard">
                  <p>Entrenamiento funcional - Cardio - Entrenamiento Personal - CrossFit - Sala de Pesas
                    - Ciclismo indoor - TRX</p>
                  <a href="#" class="sabermas">Saber Más</a>
                </div>
              </div>
            </div>
          </div>
          <div class="filaactividades">
            <div class="subfilaactividades">
              <div class="cardactividad wellnes">
                <div class="cardtitulo wellnestitulo">
                  <h3>WELLNES</h3>
                </div>
                <div class="contenidocard">
                  <p>Yoga - Pilates - Meditación y Mindfulness - Masajes - Nutrición - Gimnasia Correctiva
                    - Tai Chi</p>
                  <a href="#" class="sabermas">Saber Más</a>
                </div>
              </div>
              <div class="cardactividad ninios">
                <div class="cardtitulo niniostitulo">
                  <h3>NIÑOS</h3>
                </div>
                <div class="contenidocard">
                  <p>Clases de Natación - Natación para Bebés - Actividades Lúdicas - Clases de Danza -
                    Artes Marciales</p>
                  <a href="#" class="sabermas">Saber Más</a>
                </div>
              </div>
            </div>
          </div>
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
              <img src="public/img/logos/DOPAv2lightU.png" alt="LogoDopa">
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