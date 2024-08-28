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
            <li><a href="#mobile-photography">Fotografía Celular</a></li>
            <li><a href="#telescope-photography">Fotografía Telescopio</a></li>
            <li><a href="#Procesamiento">Postprocesamiento</a></li>
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
                <p class="intro">La astrofotografía es el arte de capturar imágenes del cielo nocturno.
                     Con el avance de la tecnología, ahora es posible tomar fotos impresionantes de estrellas,
                      planetas y la luna utilizando solo un celular.</p>
            </div>

            <!-- Anuncio de Mejora -->
<div class="announcement">
    <p>💡 Este contenido puede parecer extenso, pero es fundamental para tu aprendizaje.
         Dedicar unos minutos a leerlo con detenimiento, te proporcionará conocimientos 
         valiosos que enriquecerán tu experiencia en la astrofotografía. ¡Aprovecha al máximo esta información!</p>


         
</div>


            <!-- Realidad en la Astrofotografía y Uso de Telescopios -->
            <div class="section" id="reality">
                <h2>La Realidad en la Astrofotografía y Uso de Telescopios</h2>
                <p>Adentrarse en la astrofotografía es una experiencia fascinante,
                     pero es importante tener expectativas realistas sobre lo que 
                     se puede capturar y cómo utilizar el equipo correctamente.
                      Aunque los telescopios son herramientas poderosas, su uso adecuado requiere práctica y conocimiento.</p>
                      <img class="realidadimg" src="img/telescopio.webp" alt="la realidad" width="200" height="auto">

                <h4>Lo que se Puede y No se Puede Ver</h4>
                <ul>
                    <li><strong>Luna y Planetas:</strong> Con un telescopio básico, puedes ver detalles impresionantes de la
                     Luna y planetas cercanos como Júpiter y Saturno. Sin embargo, los objetos de cielo profundo, como nebulosas
                      y galaxias, aparecerán más tenues y menos coloridos.</li>
        <div class="image-group">
            <img class="realidadimg" src="img/mooncel.jpg" alt="la realidad" width="200" height="auto">
            <img class="realidadimg" src="img/jupcel.jpg" alt="la realidad" width="200" height="auto">
            <img class="realidadimg" src="img/orioncel.jpg" alt="la realidad" width="200" height="auto">
        </div>
                    <li><strong>Estrellas Dobles y Aglomerados Estelares:</strong> Estos son excelentes objetivos para los principiantes.
                     Las estrellas dobles muestran colores contrastantes, y los cúmulos estelares ofrecen una vista repleta de estrellas 
                     brillantes en una pequeña porción del cielo.</li>
                </ul>

               






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
                    <p>Estos pasos son esenciales para capturar paisajes nocturnos con la mayor precisión y belleza posible. Desde la selección del equipo adecuado hasta la configuración óptima de la cámara, cada detalle cuenta cuando se trata de capturar la majestuosidad del cielo nocturno. Ya sea que estés fotografiando una vasta extensión de estrellas, la silueta de montañas bajo la luz de la luna, o la aurora boreal, estos pasos te guiarán para obtener imágenes impresionantes y llenas de detalle. Asegúrate de seguir cada uno de estos consejos para maximizar la claridad y la profundidad de tus fotos, permitiéndote capturar la esencia de la noche en todo su esplendor.</p>

                </ul>

            

                 <!-- Equipos Necesarios -->
            <div class="section" id="equipment">
                <h2>Empecemos</h2>
                <h4>Equipo recomendado</h4>
                <ul>
                    <li>Trípode para estabilidad.</li>
                    <li>Mapa estelar (Una de estas aplicaciónes) "Skyportal, Stellarium, StarWalk".</li>
                    <li>Adaptador para celular si vas a utilizar un telescopio.</li>
                </ul>
            </div>
<ol>
    <li>
        Si te es posible encuentra un lugar oscuro, lejos de la contaminación lumínica .
        <img src="img/IMG_4354.PNG" alt="Lugar oscuro para astrofotografía" width="200" height="auto">
    </li>
    <li>
        Utiliza un trípode para mantener el celular estable y evitar que las fotos salgan movidas.
        <img src="img/celu.webp" alt="Trípode para estabilidad" width="200" height="auto">
    </li>
    <li>
        Activa el modo nocturno de la cámara de tu celular si está disponible.
        <img src="img/celu.webp" alt="Modo nocturno en celular" width="200" height="auto">
    </li>
    <li>
        Debes buscar el modo profesional (PRO) en tu celular y Si tu celular lo permite, ajusta manualmente la ISO y la velocidad de obturación. Usa una ISO baja y una exposición larga para capturar más luz.
        <img src="img/celu.webp" alt="Ajuste de ISO y obturación" width="200" height="auto">
    </li>
    <li>
        Enfoca tu celular al maximo para tener una imagen clara y nítida.
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
        <p>Acoplar un celular a un telescopio es una excelente manera de iniciarse en la astrofotografía. Esta combinación te permitirá capturar imágenes impresionantes
             de la Luna, los planetas y algunas estrellas brillantes con relativa facilidad. Sin embargo, es importante ser realistas: aunque esta técnica es ideal para
              principiantes y para obtener resultados sorprendentes con equipo básico, tiene sus limitaciones. Para capturar imágenes más profesionales, con detalles
               finos de objetos de cielo profundo como galaxias lejanas o nebulosas oscuras, un celular acoplado a un telescopio no será suficiente. En esos casos,
                es recomendable utilizar cámaras especializadas y equipo más avanzado para lograr la calidad y precisión que estas tomas requieren.</p>

    </ul>

    <h4>Empecemos</h4>
    <ol>
    <li>
    Alinea correctamente tu telescopio con el cielo nocturno utilizando una montura adecuada para asegurar una observación precisa.
    <img src="img/celu.webp" alt="Alineación del telescopio" width="200" height="auto">
</li>
<li>
    Acopla tu celular al telescopio utilizando un adaptador especializado para mantener la cámara en posición y capturar imágenes nítidas.
    <img src="img/celu.webp" alt="Acoplar celular al telescopio" width="200" height="auto">
</li>
<li>
    Comienza con un ocular de baja potencia para localizar el objeto celeste y, una vez ubicado, incrementa el zoom para obtener más detalles.
    <img src="img/celu.webp" alt="Uso de ocular de baja potencia" width="200" height="auto">
</li>
<li>
    Activa el modo nocturno de tu celular, si está disponible, para mejorar la captura de imágenes en condiciones de baja luz.
    <img src="img/celu.webp" alt="Modo nocturno en celular" width="200" height="auto">
</li>
<li>
    Ajusta manualmente la ISO y la velocidad de obturación de tu celular, si es posible. Utiliza una ISO baja y una exposición prolongada para capturar más luz y obtener mejores resultados.
    <img src="img/celu.webp" alt="Ajuste de ISO y obturación" width="200" height="auto">
</li>
<li>
    Considera grabar videos cortos de entre 1 a 3 minutos, asegurándote de que el objeto se mantenga en la pantalla del celular para facilitar el procesamiento posterior.
    <img src="img/celu.webp" alt="Grabación de videos cortos" width="200" height="auto">
</li>
<li>
    Toma múltiples capturas, entre 10 y 20 fotos ó videos es una buena cantidad, para aumentar las posibilidades de obtener imágenes de calidad.
    <img src="img/celu.webp" alt="Toma de múltiples capturas" width="200" height="auto">
</li>
<li>
    Una vez que hayas capturado suficientes imágenes, procede al postprocesamiento para mejorar y afinar los resultados finales.
    <img src="img/celu.webp" alt="Postprocesamiento de imágenes" width="200" height="auto">
</li>

    </ol>
</div>










<!-- Introducción al Postprocesamiento -->
<div class="post-processing-section" id="Procesamiento">
    <h2>Postprocesamiento de Astrofotografía</h2>
    <p class="intro-text">
    El postprocesamiento es clave en la astrofotografía, especialmente cuando usas un celular acoplado a un telescopio. 
    Esta etapa permite mejorar la claridad, reducir el ruido y resaltar detalles ocultos en tus capturas. Para obtener 
    resultados óptimos, es recomendable utilizar herramientas especializadas como PIPP, Autostakkert y RegiStax, (totalmente gratuitas) que 
    te ayudarán a mejorar significativamente la calidad de tus imágenes astronómicas </p> 

        <a href="https://astrowhat.com/resources/planetary-imaging-preprocessor-pipp.38/" class="tool-link" target="_blank">
            <img src="img/pipp.jpg" alt="PIPP" width="100px">
        </a>
        <a href="https://www.autostakkert.com/" class="tool-link" target="_blank">
            <img src="img/as.png" alt="AutoStakkert" width="100px">
        </a>
        <a href="https://www.astronomie.be/registax/" class="tool-link" target="_blank">
            <img src="img/reg.jpg" alt="RegiStax" width="100px">
        </a> 
    
</div>


    <!-- Contenedor de Videos -->
    <div class="video-row">
        <!-- Video PIPP -->
        <div class="video-container">
            <video controls>
                <source src="img/PIPP_ASTROVELOXER.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
            <p class="video-description">
                <strong>PIPP:</strong> Primer paso en el proceso de postprocesamiento. PIPP (Planetary
                 Imaging PreProcessor) se utiliza para preparar los videos o imágenes crudas, centrando
                  el objeto y recortando los bordes innecesarios. Esto facilita el siguiente paso en AutoStakkert.
            </p>
        </div>

        <!-- Video AutoStakkert -->
        <div class="video-container">
            <video controls>
                <source src="img/AUTOSTAKKERT_ASTROVELOXER.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
            <p class="video-description">
                <strong>AutoStakkert:</strong> AutoStakkert apila las mejores imágenes del video capturado
                , mejorando significativamente la calidad al combinar múltiples cuadros en uno solo. Esto 
                es esencial para obtener una imagen final clara y detallada.
            </p>
        </div>

        <!-- Video RegiStax -->
        <div class="video-container">
            <video controls>
                <source src="img/AUTOSTAKKERT_ASTROVELOXER.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
            <p class="video-description">
                <strong>RegiStax:</strong> El toque final en el postprocesamiento. RegiStax se utiliza par
                a afinar y ajustar la imagen final, aplicando filtros y mejorando la nitidez y el contraste
                . Es la herramienta clave para que tus imágenes astrofotográficas brillen.
            </p>
        </div>
    </div>
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
