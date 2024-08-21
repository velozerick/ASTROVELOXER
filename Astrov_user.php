<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astroveloxer</title>
    <link rel="stylesheet" href="Astroveloxer.css">
</head>
<body>
    <div class="stars"></div>
    
    <!-- Barra de Navegación -->
    <header class="header">
        <nav class="navbar">
            <div class="burger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#home">ASTROVELOXER</a></li>
                <li><a href="#Iniciar">Mira arriba</a></li>
                <li><a href="#como-iniciar">Como iniciar?</a></li>
                <li><a href="Astrofoto_user.php">Astrofotografía</a></li>
                <li><a href="calen_user.php">Calendario astronómico</a></li>
                <li><a href="#" onclick="alert('La página EIEMEX aún no está disponible. ¡Vuelve pronto!');">EIEMEX Próximamente</a></li>

            </ul>
        </nav>
    </header>
    
    <!-- HOME SECTION -->
    <section class="home" id="home">
        <div class="content">
            <h3>Una estrella? Un planeta?</h3>
            <p>Una página dedicada a ti, cuestionando esa pregunta.</p>
        </div>
    </section>

    <!-- NOSOTROS SECTION -->
    <section class="nosotros" id="Iniciar">
        <h1 class="heading"><span>El</span> <span>Porqué</span> <span>Ver</span> <span>Hacia</span> Arriba</h1>

        <div class="row">
            <div class="image">
                <img src="img/secret.jpg" alt="nosotros">
            </div>
            <div class="content">
                <p>Desde siempre, la humanidad ha mirado al cielo en busca de respuestas. Las estrellas y planetas nos recuerdan lo vasto y misterioso que es el universo.</p>
                <p>La astronomía es la ciencia que estudia el cosmos, mientras que la astrofotografía es el arte de capturar su belleza en imágenes. Juntas, nos permiten explorar y entender el universo.</p>
                <p>Mirar hacia arriba es una invitación a descubrir y capturar la maravilla del cielo nocturno.</p>
            </div>
        </div>
    </section>

<!-- SECCIÓN "Cómo Iniciar en Astrofotografía" -->
<section class="como-iniciar" id="como-iniciar">
    <h1 class="heading"><span>Cómo</span> <span>Iniciar</span> en Astrofotografía</h1>
    <div class="restricted-message">
        <p>Para acceder a la guía completa sobre cómo iniciar en astrofotografía por favor <a href="inicio_sesion.php" id="login-link">inicia sesión</a> o <a href="registro.php" id="register-link">regístrate</a>.</p>
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


<!--http://localhost/ASTROVELOXER/Astrov_user.php >