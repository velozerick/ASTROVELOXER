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

$nombreUsuario = $_SESSION['usuario'];  // Obtener el nombre del usuario desde la sesión
?>

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
                <li><a href="Astrofotografia.php">Astrofotografía</a></li>
                <li><a href="calendario.php">Calendario astronómico</a></li>
                <li><a href="#" onclick="alert('La página EIEMEX aún no está disponible. ¡Vuelve pronto!');">EIEMEX Próximamente</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
                <li class="welcome-message">Bienvenid@ <?php echo $nombreUsuario; ?></li>
            </ul>
        </nav>
    </header>
    
    <!-- HOME SECTION -->
    <section class="home" id="home">
        <div class="content">
            <h3>¿Una estrella? ¿Un planeta?</h3>
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



        <div class="announcement-yo">
        <p> A lo largo de mi viaje en la astrofotografía, </p>
             
            <p>he enfrentado frustraciones y desafíos
             que parecían no tener solución. He creado esta página para que tú no tengas que pasar 
             por lo mismo. Aquí te guiaré en los aspectos esenciales para que inicies y avances en 
             este fascinante universo de la astrofotografía. </p> 
             <p>Con el tiempo, muchas personas se han 
             acercado a mí con preguntas como: "¿Qué tipo de telescopio debería elegir?", "¿Cómo puedo
              tomar fotos como las tuyas?" o "Compré un telescopio, pero no logro ver nada". Este 
              espacio está dedicado a responder esas preguntas y a ayudarte a descubrir la realidad 
              y la maravilla de comenzar en la astrofotografía.</p>
        </div>





        <div class="card-grid">
            <a class="card" id="card-celular" href="celular.php">
                <div class="card__background" style="background-image: url('img/cel.jpg')"></div>
                <div class="card__content">
                    <p class="card__category">Celular</p>
                    <h3 class="card__heading">Astrofotografía con Celular</h3>
                </div>
            </a>
            <a class="card" id="card-telescopio" href="Dedicado.php">
                <div class="card__background" style="background-image: url('img/secret.jpg')"></div>
                <div class="card__content">
                    <p class="card__category">Telescopio</p>
                    <h3 class="card__heading">Astrofotografía con Telescopio</h3>
                </div>
            </a>
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
