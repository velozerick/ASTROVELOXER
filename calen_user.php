<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astroveloxer - Calendario Astronómico</title>
    <link rel="stylesheet" href="calen_user.css">
    <script src="astroveloxer.js"></script>
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
                <li><a href="Astrov_user.php">ASTROVELOXER</a></li>
                <li><a href="Astrofoto_user.php">Astrofotografía</a></li>
                <li><a href="#calendario">Calendario astronómico</a></li>
                <li><a href="#" onclick="alert('La página EIEMEX aún no está disponible. ¡Vuelve pronto!');">EIEMEX Próximamente</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- Calendario Astronómico -->
    <section class="calendar-section" id="calendario">
        <div class="calendar-container">
            <h1 class="main-title">CALENDARIO ASTRONÓMICO</h1>
            <p class="calendar-description">Explora los eventos astronómicos más importantes de este mes y mantente al día.</p>
            <div class="restricted-message">
                <p>Para acceder al calendario completo y recibir notificaciones de eventos astronómicos, por favor <a href="inicio_sesion.php" id="login-link">inicia sesión</a> o <a href="registro.php" id="register-link">regístrate</a>.</p>
            </div>
        </div>
    </section>
    
</body>
</html>
