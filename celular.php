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
    <title>Astroveloxer</title>
    <link rel="stylesheet" href="curso.css">
</head>
<body>
    <div class="stars"></div>

    <!-- Barra de Navegación Principal -->
    <header class="header">
        <nav class="navbar">
            <div class="burger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav">
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
            <li><a href="#mobile-photography">Fotografía Celular</a></li>
            <li><a href="#telescope-photography">Fotografía Telescopio</a></li>
            <li><a href="#gallery">Galería</a></li>
        </ul>
    </nav>

    <!-- HOME SECTION -->
    <section class="home" id="home">
        <div class="content">
            <h3>Captura el Universo desde tu Celular</h3>
            <p>Transforma tu celular en una ventana al cosmos y captura la inmensidad del universo desde la palma de tu mano.</p>
        </div>
    </section>

    <!-- INTRODUCCIÓN -->
    <section class="astrophotography" id="intro">
        <div class="container">
            <div class="section">
                <h2>Introducción</h2>
                <p class="intro">La astrofotografía es el arte de capturar imágenes del cielo nocturno. Con el avance de la tecnología, ahora es posible tomar fotos impresionantes de estrellas, planetas y la luna utilizando solo un celular.</p>
            </div>

            <!-- Anuncio de Mejora -->
<div class="announcement">
    <p>💡 Este contenido puede parecer extenso, pero es fundamental para tu aprendizaje. Dedicar unos minutos a leerlo con detenimiento te proporcionará conocimientos valiosos que enriquecerán tu experiencia en la astrofotografía. ¡Aprovecha al máximo esta información!</p>
</div>


            <!-- Realidad en la Astrofotografía y Uso de Telescopios -->
            <div class="section" id="reality">
                <h2>La Realidad en la Astrofotografía y Uso de Telescopios</h2>
                <p>Adentrarse en la astrofotografía es una experiencia fascinante, pero es importante tener expectativas realistas sobre lo que se puede capturar y cómo utilizar el equipo correctamente. Aunque los telescopios son herramientas poderosas, su uso adecuado requiere práctica y conocimiento.</p>

                <h4>Lo que se Puede y No se Puede Ver</h4>
                <ul>
                    <li><strong>Luna y Planetas:</strong> Con un telescopio básico, puedes ver detalles impresionantes de la Luna y planetas cercanos como Júpiter y Saturno. Sin embargo, los objetos de cielo profundo, como nebulosas y galaxias, aparecerán más tenues y menos coloridos.</li>
                    <li><strong>Estrellas Dobles y Aglomerados Estelares:</strong> Estos son excelentes objetivos para los principiantes. Las estrellas dobles muestran colores contrastantes, y los cúmulos estelares ofrecen una vista repleta de estrellas brillantes en una pequeña porción del cielo.</li>
                </ul>

                <h4>Tipos de Monturas y su Uso Correcto</h4>
                <ul>
                    <li><strong>Montura Altazimutal:</strong> Es la más sencilla de usar, adecuada para la observación visual. Sin embargo, no es ideal para astrofotografía de larga exposición debido a la falta de seguimiento preciso.</li>
                    <li><strong>Montura Ecuatorial:</strong> Permite un seguimiento más preciso del movimiento de los objetos celestes, siendo más adecuada para la astrofotografía.</li>
                    <li><strong>Montura Ecuatorial Motorizada:</strong> La opción más avanzada para astrofotografía, permite exposiciones largas sin que los objetos se desplacen fuera del campo de visión.</li>
                </ul>

                <p>Para aprender más sobre cómo usar correctamente un telescopio, puedes visitar nuestro <a href="tutorial_telescopios.html">tutorial detallado</a>.</p>
            </div>

            <!-- Equipos Necesarios -->
            <div class="section" id="equipment">
                <h2>Equipos Necesarios</h2>
                <ul>
                    <li>Trípode para estabilidad.</li>
                    <li>Aplicaciones especializadas como "NightCap" o "Camera+ 2".</li>
                    <li>Adaptador para celular si vas a utilizar un telescopio.</li>
                </ul>
            </div>

            <!-- Fotografía Nocturna con un Celular -->
            <div class="section" id="mobile-photography">
                <h2>Fotografía Nocturna con un Celular</h2>
                <p>Usar solo tu celular para capturar el cielo nocturno es una excelente forma de comenzar en la astrofotografía. Aquí te explicamos lo que puedes lograr y cómo hacerlo:</p>
                
                <h4>Lo que Puedes Capturar</h4>
                <ul>
                    <li><strong>La Luna:</strong> Captura detalles como cráteres y mares lunares.</li>
                    <li><strong>Planetas Brillantes:</strong> Obtén imágenes de planetas como Júpiter y Venus, aunque con detalles limitados.</li>
                    <li><strong>Estrellas y Constellaciones:</strong> Captura constelaciones enteras y, en noches claras, incluso la Vía Láctea.</li>
                    <li><strong>Paisajes Nocturnos:</strong> Combina el cielo estrellado con paisajes terrestres para imágenes impresionantes.</li>
                </ul>

                <h4>Instrucciones Básicas</h4>
<ol>
    <li>
        Encuentra un lugar oscuro, lejos de la contaminación lumínica.
        <img src="img/celu.webp" alt="Lugar oscuro para astrofotografía" width="200" height="auto">
    </li>
    <li>
        Utiliza un trípode para mantener el celular estable y evitar que las fotos salgan movidas.
        <img src="img/celu.webp" alt="Trípode para estabilidad" width="200" height="auto">
    </li>
    <li>
        Activa el modo nocturno de tu celular si está disponible.
        <img src="img/celu.webp" alt="Modo nocturno en celular" width="200" height="auto">
    </li>
    <li>
        Si tu celular lo permite, ajusta manualmente la ISO y la velocidad de obturación. Usa una ISO baja y una exposición larga para capturar más luz.
        <img src="img/celu.webp" alt="Ajuste de ISO y obturación" width="200" height="auto">
    </li>
    <li>
        Realiza varias tomas para aumentar tus posibilidades de éxito.
        <img src="img/celu.webp" alt="Tomas múltiples para astrofotografía" width="200" height="auto">
    </li>
</ol>

<!-- Fotografía con Celular y Telescopio -->
<div class="section" id="telescope-photography">
    <h2>Fotografía con Celular y Telescopio</h2>
    <p>Acoplar tu celular a un telescopio te permite capturar detalles más finos de objetos celestes. Aquí te explicamos lo que puedes lograr y cómo hacerlo:</p>
    
    <h4>Lo que Puedes Capturar</h4>
    <ul>
        <li><strong>Luna con Detalles Finos:</strong> Captura cráteres y mares con gran claridad.</li>
        <li><strong>Planetas como Júpiter y Saturno:</strong> Visualiza los anillos de Saturno y las lunas de Júpiter.</li>
        <li><strong>Nebulosas y Estrellas Brillantes:</strong> Con técnicas adecuadas, puedes capturar objetos de cielo profundo como la Nebulosa de Orión.</li>
    </ul>

    <h4>Instrucciones Básicas</h4>
    <ol>
        <li>
            Alinea correctamente tu telescopio con el cielo nocturno utilizando una montura adecuada.
            <img src="img/celu.webp" alt="Alineación del telescopio" width="200" height="auto">
        </li>
        <li>
            Acopla el celular al telescopio usando un adaptador especializado.
            <img src="img/celu.webp" alt="Acoplar celular al telescopio" width="200" height="auto">
        </li>
        <li>
            Comienza con un ocular de baja potencia para localizar el objeto y luego aumenta el zoom.
            <img src="img/celu.webp" alt="Uso de ocular de baja potencia" width="200" height="auto">
        </li>
        <li>
            Utiliza una aplicación para controlar la exposición y el enfoque de la cámara del celular.
            <img src="img/celu.webp" alt="Control de exposición y enfoque" width="200" height="auto">
        </li>
        <li>
            Si usas una montura motorizada, asegúrate de que el seguimiento esté activado para evitar que el objeto se mueva fuera del encuadre.
            <img src="img/celu.webp" alt="Montura motorizada para seguimiento" width="200" height="auto">
        </li>
    </ol>
</div>


            <!-- Galería de Ejemplos -->
            <div class="gallery" id="gallery">
                <h2>Galería de Ejemplos</h2>
                <div class="image-container">
                    <img src="img/celu.webp" alt="Ejemplo de astrofotografía con celular"  width="200" height="auto">
                    <p>Imagen capturada con un iPhone 12, ajustando la exposición a 10 segundos.</p>
                </div>
                <div class="image-container">
                    <img src="img/celu.webp" alt="Ejemplo de astrofotografía con celular"  width="200" height="auto">
                    <p>Imagen capturada con un Samsung Galaxy S21, utilizando un trípode y lente adicional.</p>
                </div>
                <div class="image-container">
                    <img src="img/celu.webp" alt="Ejemplo de astrofotografía con celular y telescopio"  width="200" height="auto">
                    <p>Júpiter y sus lunas capturadas con un telescopio acoplado a un iPhone.</p>
                </div>
            </div>

            <!-- Consejos Finales -->
            <div class="section">
                <h2>Consejos Finales</h2>
                <p>No te desanimes si las primeras fotos no salen como esperas. La práctica hace al maestro, y la astrofotografía requiere paciencia y experimentación.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-links">
            <a href="https://www.instagram.com/Astroveloxer" target="_blank" class="social-link">
                <img src="img/instagram-logo.webp" alt="Instagram">
                <span>Astroveloxer</span>
            </a>
        </div>
        <div class="footer-info">
            <p>&copy; 2024 Astroveloxer. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="astroveloxer.js"></script>
</body>
</html>
