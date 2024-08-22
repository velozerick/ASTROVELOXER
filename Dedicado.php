<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Por favor debes iniciar sesión.");
    window.location = "inicio_sesion.php";
    </script>
    ';
    session_destroy();
    die();
}

$nombreUsuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astroveloxer - Equipo Dedicado</title>
    <link rel="stylesheet" href="curso.css">
</head>
<body>
    <div class="stars-dedicado"></div>

    <!-- Barra de Navegación Principal -->
    <header class="header-dedicado">
        <nav class="navbar-dedicado">
            <div class="burger-dedicado" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-dedicado">
                <li><a href="Astroveloxer.php">ASTROVELOXER</a></li>
                <li><a href="Astrofotografia.php">Astrofotografía</a></li>
                <li><a href="calendario.php">Calendario astronómico</a></li>
                <li><a href="#" onclick="alert('La página EIEMEX aún no está disponible. ¡Vuelve pronto!');">EIEMEX Próximamente</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
                <li class="welcome-message">Bienvenid@ <?php echo $nombreUsuario; ?></li>
            </ul>
        </nav>
    </header>

   <!-- Barra de Navegación Secundaria -->
   <nav class="secondary-nav">
        <div class="nav-toggle" onclick="toggleSecondaryNav()">
            &#9654; <!-- Icono de flecha -->
        </div>
        <ul class="nav-items">
            <li><a href="#intro">Introducción</a></li>
            <li><a href="#reality">Realidad</a></li>
            <li><a href="#equipment">Equipos</a></li>
            <li><a href="#dedicated-photography">Fotografía Celular</a></li>
            <li><a href="#telescope-photography-dedicado">Fotografía Telescopio</a></li>
            <li><a href="#gallery">Galería</a></li>
        </ul>
    </nav>

    <!-- HOME SECTION -->
    <section class="home-dedicado" id="home">
        <div class="content-dedicado">
            <h3>Captura el Universo con Equipos Dedicados</h3>
            <p>Lleva tu pasión por la astrofotografía al siguiente nivel utilizando equipos especializados para obtener imágenes impresionantes del cosmos.</p>
        </div>
    </section>

    <!-- INTRODUCCIÓN -->
    <section class="astrophotography-dedicado" id="intro">
        <div class="container-dedicado">
            <div class="section-dedicado">
                <h2>Introducción</h2>
                <p class="intro-dedicado">La astrofotografía con equipo dedicado te permite capturar detalles que son inalcanzables con cámaras más simples. Con telescopios avanzados y cámaras especializadas, el cielo nocturno se convierte en una galería de maravillas.</p>
            </div>

            <!-- Anuncio de Mejora -->
            <div class="announcement">
                <p>💡 Aunque esta sección contiene información técnica, es esencial para sacar el máximo provecho de tu equipo dedicado. Leerla con detenimiento te permitirá dominar técnicas avanzadas y obtener los mejores resultados en astrofotografía.</p>
            </div>

            <!-- Realidad en la Astrofotografía con Equipo Dedicado -->
            <div class="section-dedicado" id="reality">
                <h2>La Realidad en la Astrofotografía con Equipo Dedicado</h2>
                <p>Adentrarse en la astrofotografía con equipos dedicados es un desafío emocionante que requiere una comprensión profunda del cielo y de tu equipo. Aunque los resultados pueden ser espectaculares, es importante tener expectativas realistas y ser paciente en el proceso de aprendizaje.</p>

                <h4>Lo que Puedes Lograr y los Retos que Enfrentarás</h4>
                <ul>
                    <li><strong>Cielo Profundo:</strong> Captura detalles de nebulosas, galaxias y cúmulos estelares con una claridad impresionante.</li>
                    <li><strong>Planetas y la Luna:</strong> Observa y fotografía planetas como nunca antes, revelando anillos, lunas y superficies planetarias.</li>
                    <li><strong>Retos Técnicos:</strong> La necesidad de un seguimiento preciso, calibración de equipos, y postprocesamiento son algunos de los retos a superar.</li>
                </ul>

                <p>Para una guía más detallada sobre cómo usar correctamente tu equipo dedicado, visita nuestro <a href="tutorial_telescopios_dedicado.html">tutorial especializado</a>.</p>
            </div>

            <!-- Equipos Necesarios -->
            <div class="section-dedicado" id="equipment">
                <h2>Equipos Necesarios</h2>
                <ul>
                    <li>Telescopio con montura ecuatorial o motorizada para seguimiento preciso.</li>
                    <li>Cámara astronómica dedicada o DSLR modificada para astrofotografía.</li>
                    <li>Software de seguimiento y procesamiento de imágenes como "DeepSkyStacker" o "PixInsight".</li>
                </ul>
            </div>

            <!-- Fotografía con Equipo Dedicado -->
            <div class="section-dedicado" id="dedicated-photography">
                <h2>Fotografía con Equipo Dedicado</h2>
                <p>Con equipos dedicados, puedes capturar imágenes de calidad profesional. Aquí te explicamos los pasos clave para comenzar:</p>
                
                <h4>Lo que Puedes Capturar</h4>
                <ul>
                    <li><strong>Nebulosas y Galaxias:</strong> Revela los colores y detalles de objetos de cielo profundo.</li>
                    <li><strong>Cometas y Estrellas Variables:</strong> Fotografía eventos celestiales con una precisión increíble.</li>
                    <li><strong>Astrofotografía de Gran Campo:</strong> Combina múltiples imágenes para capturar amplias secciones del cielo con un detalle sorprendente.</li>
                </ul>

                <h4>Instrucciones Básicas</h4>
                <ol>
                    <li>
                        Configura tu telescopio con precisión utilizando un sistema de alineación polar.
                        <img src="img/dedicado1.webp" alt="Alineación Polar" width="200" height="auto">
                    </li>
                    <li>
                        Conecta la cámara al telescopio y ajusta el enfoque utilizando una máscara de Bahtinov.
                        <img src="img/dedicado2.webp" alt="Ajuste de Enfoque" width="200" height="auto">
                    </li>
                    <li>
                        Configura el software de seguimiento para mantener el objeto en el centro del encuadre durante la exposición.
                        <img src="img/dedicado3.webp" alt="Software de Seguimiento" width="200" height="auto">
                    </li>
                    <li>
                        Realiza múltiples exposiciones y apila las imágenes en el software de procesamiento.
                        <img src="img/dedicado4.webp" alt="Apilado de Imágenes" width="200" height="auto">
                    </li>
                    <li>
                        Procesa las imágenes utilizando técnicas avanzadas para resaltar detalles y colores.
                        <img src="img/dedicado5.webp" alt="Procesamiento de Imágenes" width="200" height="auto">
                    </li>
                </ol>
            </div>

            <!-- Fotografía con Telescopio y Equipo Dedicado -->
            <div class="section-dedicado" id="telescope-photography-dedicado">
                <h2>Fotografía con Telescopio y Equipo Dedicado</h2>
                <p>Cuando combinas tu telescopio con una cámara dedicada, puedes capturar detalles que son invisibles a simple vista. Aquí te explicamos cómo aprovechar al máximo tu equipo:</p>
                
                <h4>Lo que Puedes Capturar</h4>
                <ul>
                    <li><strong>Cráteres y Detalles Lunares:</strong> Captura imágenes de alta resolución de la superficie lunar.</li>
                    <li><strong>Planetas y sus Satélites:</strong> Observa los detalles finos de los planetas y sus lunas.</li>
                    <li><strong>Transitos y Eclipses:</strong> Registra eventos astronómicos únicos con gran precisión.</li>
                </ul>

                <h4>Instrucciones Básicas</h4>
                <ol>
                    <li>
                        Alinea correctamente tu telescopio con el cielo nocturno utilizando una montura motorizada.
                        <img src="img/dedicado6.webp" alt="Alineación con Montura Motorizada" width="200" height="auto">
                    </li>
                    <li>
                        Conecta la cámara al telescopio utilizando los adaptadores adecuados.
                        <img src="img/dedicado7.webp" alt="Conexión de Cámara" width="200" height="auto">
                    </li>
                    <li>
                        Ajusta la exposición y enfoque utilizando el software de captura de imágenes.
                        <img src="img/dedicado8.webp" alt="Ajuste de Exposición y Enfoque" width="200" height="auto">
                    </li>
                    <li>
                        Realiza tomas de larga exposición y corrige cualquier error de seguimiento en el software.
                        <img src="img/dedicado9.webp" alt="Tomas de Larga Exposición" width="200" height="auto">
                    </li>
                    <li>
                        Procesa las imágenes para resaltar los detalles más finos utilizando técnicas avanzadas.
                        <img src="img/dedicado10.webp" alt="Procesamiento Avanzado de Imágenes" width="200" height="auto">
                    </li>
                </ol>
            </div>

            <!-- Galería de Ejemplos -->
            <div class="gallery-dedicado" id="gallery">
                <h2>Galería de Ejemplos</h2>
                <div class="image-container-dedicado">
                    <img src="img/dedicado11.webp" alt="Ejemplo de astrofotografía con equipo dedicado" width="200" height="auto">
                    <p>Imagen de la Nebulosa de Orión capturada con una cámara DSLR modificada.</p>
                </div>
                <div class="image-container-dedicado">
                    <img src="img/dedicado12.webp" alt="Ejemplo de astrofotografía con equipo dedicado" width="200" height="auto">
                    <p>Fotografía de Júpiter y sus lunas, tomada con un telescopio y cámara CCD.</p>
                </div>
                <div class="image-container-dedicado">
                    <img src="img/dedicado13.webp" alt="Ejemplo de astrofotografía con equipo dedicado" width="200" height="auto">
                    <p>La galaxia Andrómeda capturada utilizando un telescopio de gran campo.</p>
                </div>
            </div>

            <!-- Consejos Finales -->
            <div class="section-dedicado">
                <h2>Consejos Finales</h2>
                <p>La astrofotografía con equipo dedicado es una disciplina que requiere práctica y dedicación. No te desanimes si al principio no obtienes los resultados que esperabas; cada intento es una oportunidad para aprender y mejorar.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-dedicado">
        <div class="social-links-dedicado">
            <a href="https://www.instagram.com/Astroveloxer" target="_blank" class="social-link-dedicado">
                <img src="img/instagram-logo.webp" alt="Instagram">
                <span>Astroveloxer</span>
            </a>
        </div>
        <div class="footer-info-dedicado">
            <p>&copy; 2024 Astroveloxer. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="astroveloxer.js"></script>
</body>
</html>
