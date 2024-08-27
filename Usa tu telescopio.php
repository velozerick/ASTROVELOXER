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
    <title>Guía Completa de Telescopios y Monturas</title>
    <link rel="stylesheet" href="Astroveloxer.css"> <!-- Enlace a tu CSS principal -->
</head>
<body>
    <!-- Fondo de estrellas -->
    <div class="stars"></div>

    <!-- Barra de navegación -->
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

    <!-- Sección de Introducción -->
    <section class="manual-intro" id="manual-intro">
        <h1 class="heading manual-heading"><span>Guía</span> Completa de Telescopios y Monturas</h1>
        <p class="intro">¡Bienvenido a tu guía definitiva para iniciarte en la astrofotografía! Aquí aprenderás sobre los diferentes tipos de telescopios y monturas, cómo elegir el equipo adecuado según tus necesidades, y cómo utilizar cada tipo de montura para disfrutar al máximo del cielo nocturno.</p>
    </section>

    <!-- Sección Tipos de Telescopios -->
    <section class="telescopios" id="tipos-telescopios">
        <h2>Tipos de Telescopios</h2>
        <div class="telescopios-content">
            <div class="telescopio-item">
                <h3>Telescopio Refractor</h3>
                <p>Un telescopio refractor utiliza lentes para enfocar la luz. Es ideal para observar objetos luminosos como la Luna y los planetas. Es fácil de usar y mantener, lo que lo hace perfecto para principiantes.</p>
                <img src="img/refractor.jpg" alt="Telescopio Refractor" width="300px" >
                <div class="curious-fact" onclick="showCuriousFact('El telescopio refractor fue inventado por Galileo Galilei en el siglo XVII, permitiéndole observar por primera vez las lunas de Júpiter.')">
                    <img src="img/telescope-removebg-preview.png" alt="Icono del Planeta" class="icon planet-icon">
                    <p>¡Haz clic para un dato curioso!</p>
                </div>
            </div>
            <div class="telescopio-item">
                <h3>Telescopio Reflector</h3>
                <p>Un telescopio reflector usa espejos para enfocar la luz. Es excelente para observar objetos de cielo profundo como nebulosas y galaxias. Ofrece una mayor apertura a un costo más bajo en comparación con los refractores.</p>
                <img src="img/reflector.jpg" alt="Telescopio Reflector" width="300px">
                <div class="curious-fact" onclick="showCuriousFact('Isaac Newton creó el primer telescopio reflector en 1668 para evitar la aberración cromática, un problema común en los telescopios refractores de la época.')">
                    <img src="img/telescope-removebg-preview.png" alt="Icono de la Tierra" class="icon earth-icon">
                    <p>¡Haz clic para un dato curioso!</p>
                </div>
            </div>
            <div class="telescopio-item">
                <h3>Telescopio Catadióptrico</h3>
                <p>Un telescopio catadióptrico combina lentes y espejos para ofrecer una visión compacta y versátil. Es ideal para observaciones terrestres y astronómicas. Su diseño lo hace fácil de transportar y configurar.</p>
                <img src="img/catadioptrico.jpg" alt="Telescopio Catadióptrico" width="300px">
                <div class="curious-fact" onclick="showCuriousFact('Los telescopios catadióptricos son populares entre los astrónomos aficionados debido a su versatilidad y facilidad de transporte.')">
                    <img src="img/telescope-removebg-preview.png" alt="Icono de la Galaxia" class="icon galaxy-icon">
                    <p>¡Haz clic para un dato curioso!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Cómo Elegir un Telescopio -->
    <section class="elegir-telescopio" id="como-elegir">
        <h2>¿Cómo Elegir el Telescopio Adecuado?</h2>
        <p>Elegir el telescopio adecuado depende de varios factores como tu experiencia, el tipo de observaciones que planeas hacer, y tu presupuesto. Aquí te ofrecemos algunos consejos:</p>
        <ul class="elegir-list">
            <li><strong>Para Principiantes:</strong> Un telescopio refractor es una excelente opción para empezar debido a su facilidad de uso y mantenimiento.</li>
            <li><strong>Para Observaciones de Cielo Profundo:</strong> Un telescopio reflector te proporcionará la apertura necesaria para captar detalles de objetos débiles.</li>
            <li><strong>Para Fotografía Astronómica:</strong> Un telescopio catadióptrico es versátil y compacto, ideal para quienes desean combinar observación y astrofotografía.</li>
        </ul>
    </section>

    <!-- Sección Tipos de Monturas -->
    <section class="monturas" id="tipos-monturas">
        <h2>Tipos de Monturas</h2>
        <div class="monturas-content">
            <div class="montura-item">
                <h3>Montura Altazimutal</h3>
                <p>La montura altazimutal es la más sencilla de usar. Permite mover el telescopio en dirección vertical y horizontal. Es ideal para observaciones terrestres y astronómicas básicas.</p>
                <img src="img/alt.webp" alt="Montura Altazimutal">
                <div class="curious-fact" onclick="showCuriousFact('Las monturas altazimutales son las mismas que se usan en los trípodes para cámaras. ¡Así de simples y útiles son!')">
                    <img src="img/earth-removebg-preview.png" alt="Icono de la Tierra" class="icon earth-icon">
                    <p>¡Haz clic en la Tierra para un dato curioso!</p>
                </div>
            </div>
            <div class="montura-item">
                <h3>Montura Ecuatorial</h3>
                <p>La montura ecuatorial sigue el movimiento de las estrellas mientras la Tierra rota. Es perfecta para observaciones prolongadas de objetos celestes y para astrofotografía básica.</p>
                <img src="img/eq.webp" alt="Montura Ecuatorial">
                <div class="curious-fact" onclick="showCuriousFact('Las monturas ecuatoriales permiten un seguimiento más preciso de los objetos celestes, esencial para la astrofotografía.')">
                    <img src="img/planet-removebg-preview.png" alt="Icono del Planeta" class="icon planet-icon">
                    <p>¡Haz clic para un dato curioso!</p>
                </div>
            </div>
            <div class="montura-item">
                <h3>Montura Ecuatorial Motorizada</h3>
                <p>Esta montura es una versión avanzada de la montura ecuatorial, equipada con motores que siguen automáticamente los objetos celestes. Es ideal para astrofotografía avanzada.</p>
                <img src="img/eqm.webp" alt="Montura Ecuatorial Motorizada">
                <div class="curious-fact" onclick="showCuriousFact('Las monturas ecuatoriales motorizadas pueden conectarse a computadoras y aplicaciones, permitiendo un seguimiento automatizado y preciso de los objetos celestes.')">
                    <img src="img/galaxy.png" alt="Icono de la Galaxia" class="icon galaxy-icon">
                    <p>¡Haz clic para un dato curioso!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Instrucciones para Monturas -->
    <section class="manual-instrucciones" id="instrucciones-monturas">
        <h2>Instrucciones para Usar las Monturas</h2>
        
        <!-- Montura Altazimutal -->
        <div class="montura altazimutal">
            <div class="montura-content">
                <img src="img/alt.webp" alt="Montura Altazimutal" class="montura-img">
                <div class="montura-text">
                    <h3>Montura Altazimutal: Paso a Paso</h3>
                    <ul class="step-list">
                        <li onclick="toggleDetails('altazimutal-step1')">1. Configuración Inicial</li>
                        <div id="altazimutal-step1" class="step-details">
                            <p>Coloca la montura en una superficie estable y ajusta la altura del trípode según tu comodidad. Asegúrate de que el trípode esté nivelado para evitar movimientos indeseados.</p>
                        </div>
                        <li onclick="toggleDetails('altazimutal-step2')">2. Alineación del Telescopio</li>
                        <div id="altazimutal-step2" class="step-details">
                            <p>Apunta el telescopio hacia un objeto terrestre lejano (como un árbol o un edificio) para asegurarte de que esté correctamente alineado. Esto te ayudará a familiarizarte con los movimientos de la montura.</p>
                        </div>
                        <li onclick="toggleDetails('altazimutal-step3')">3. Búsqueda del Objeto Celeste</li>
                        <div id="altazimutal-step3" class="step-details">
                            <p>Usa los controles de movimiento para dirigir el telescopio hacia el objeto celeste que deseas observar. La montura altazimutal permite movimientos verticales y horizontales, lo que facilita la localización del objeto en el cielo.</p>
                        </div>
                        <li onclick="toggleDetails('altazimutal-step4')">4. Ajuste Fino</li>
                        <div id="altazimutal-step4" class="step-details">
                            <p>Realiza ajustes finos con los controles para mantener el objeto en el centro del ocular mientras observas. Recuerda que los objetos celestes se mueven debido a la rotación de la Tierra, así que necesitarás ajustar la posición del telescopio con frecuencia.</p>
                        </div>
                        <li onclick="toggleDetails('altazimutal-step5')">5. Consejos de Uso</li>
                        <div id="altazimutal-step5" class="step-details">
                            <p>Evita usar la montura en superficies inestables o inclinadas, y asegúrate de que los bloqueos estén firmemente ajustados para evitar que el telescopio se mueva inesperadamente. Es recomendable practicar durante el día con objetos terrestres antes de intentar observar el cielo nocturno.</p>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Montura Ecuatorial -->
        <div class="montura ecuatorial">
            <div class="montura-content">
                <div class="montura-text">
                    <h3>Montura Ecuatorial: Paso a Paso</h3>
                    <ul class="step-list">
                        <li onclick="toggleDetails('ecuatorial-step1')">1. Configuración Inicial</li>
                        <div id="ecuatorial-step1" class="step-details">
                            <p>Coloca la montura en una superficie estable y orienta el eje polar hacia el Polo Norte Celeste (en el hemisferio norte). Esto es fundamental para el correcto funcionamiento de la montura ecuatorial.</p>
                        </div>
                        <li onclick="toggleDetails('ecuatorial-step2')">2. Alineación Polar</li>
                        <div id="ecuatorial-step2" class="step-details">
                            <p>Ajusta la altura y el ángulo de la montura para que el telescopio siga el movimiento de las estrellas. Puedes usar una brújula para orientar la montura hacia el norte y luego hacer ajustes finos mirando a través del telescopio.</p>
                        </div>
                        <li onclick="toggleDetails('ecuatorial-step3')">3. Búsqueda del Objeto Celeste</li>
                        <div id="ecuatorial-step3" class="step-details">
                            <p>Usa los controles de movimiento en la montura para centrar el objeto deseado en el ocular. La montura ecuatorial facilita el seguimiento del objeto celestial una vez que está en el campo de visión.</p>
                        </div>
                        <li onclick="toggleDetails('ecuatorial-step4')">4. Ajuste Fino</li>
                        <div id="ecuatorial-step4" class="step-details">
                            <p>Realiza ajustes finos en los controles de seguimiento para mantener el objeto centrado mientras se mueve a través del cielo. La ventaja de la montura ecuatorial es que una vez alineada, solo necesitarás ajustar un control para seguir el objeto.</p>
                        </div>
                        <li onclick="toggleDetails('ecuatorial-step5')">5. Consejos de Uso</li>
                        <div id="ecuatorial-step5" class="step-details">
                            <p>Siempre asegura la montura correctamente antes de usarla para evitar cualquier movimiento indeseado. Además, ten en cuenta que la montura ecuatorial es más pesada y puede requerir contrapesos, así que asegúrate de que todo esté equilibrado antes de comenzar la observación.</p>
                        </div>
                    </ul>
                </div>
                <img src="img/eq.webp" alt="Montura Ecuatorial" class="montura-img">
            </div>
        </div>

        <!-- Montura Ecuatorial Motorizada -->
        <div class="montura ecuatorial-motorizada">
            <div class="montura-content">
                <img src="img/eqm.webp" alt="Montura Ecuatorial Motorizada" class="montura-img">
                <div class="montura-text">
                    <h3>Montura Ecuatorial Motorizada: Paso a Paso</h3>
                    <ul class="step-list">
                        <li onclick="toggleDetails('ecuatorial-motorizada-step1')">1. Configuración Inicial</li>
                        <div id="ecuatorial-motorizada-step1" class="step-details">
                            <p>Coloca la montura en una superficie estable, orienta el eje polar y conecta los motores. Asegúrate de que la montura esté bien alineada antes de encender los motores para evitar errores en el seguimiento.</p>
                        </div>
                        <li onclick="toggleDetails('ecuatorial-motorizada-step2')">2. Alineación Polar y Conexión</li>
                        <div id="ecuatorial-motorizada-step2" class="step-details">
                            <p>Ajusta la montura para que siga el movimiento de las estrellas, y conecta la montura a la computadora o aplicación móvil para un seguimiento automático. Esta configuración te permitirá un control preciso y cómodo desde tu dispositivo.</p>
                        </div>
                        <li onclick="toggleDetails('ecuatorial-motorizada-step3')">3. Búsqueda del Objeto Celeste</li>
                        <div id="ecuatorial-motorizada-step3" class="step-details">
                            <p>Usa el software para seleccionar y seguir el objeto deseado. La montura ajustará automáticamente la posición del telescopio, permitiéndote concentrarte en la observación o en la captura de imágenes.</p>
                        </div>
                        <li onclick="toggleDetails('ecuatorial-motorizada-step4')">4. Captura de Imágenes</li>
                        <div id="ecuatorial-motorizada-step4" class="step-details">
                            <p>Con la montura motorizada, puedes capturar imágenes prolongadas sin que el objeto salga del campo de visión. Esto es esencial para la astrofotografía de larga exposición.</p>
                        </div>
                        <li onclick="toggleDetails('ecuatorial-motorizada-step5')">5. Consejos de Uso</li>
                        <div id="ecuatorial-motorizada-step5" class="step-details">
                            <p>Mantén los motores calibrados y asegúrate de que la batería esté completamente cargada antes de una sesión de observación prolongada. Además, revisa regularmente las actualizaciones de software para mejorar la precisión del seguimiento.</p>
                        </div>
                    </ul>
                </div>
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
    <script>
        function toggleDetails(id) {
            const stepDetails = document.getElementById(id);
            stepDetails.classList.toggle('active');
        }

        function showCuriousFact(text) {
            document.getElementById('curiousText').textContent = text;
            document.getElementById('curiousModal').classList.add('show');
        }

        function closeModal() {
            document.getElementById('curiousModal').classList.remove('show');
        }
    </script>

    <!-- Ventana flotante para mostrar datos curiosos -->
    <div id="curiousModal" class="modal-overlay">
        <div class="modal-content">
            <p id="curiousText">Aquí irá el dato curioso...</p>
            <button class="close-btn" onclick="closeModal()">Cerrar</button>
        </div>
    </div>
</body>
</html>
