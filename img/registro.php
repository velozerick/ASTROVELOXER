<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Astroveloxer</title>
    <link rel="stylesheet" href="is.css">
</head>
<body>
    <!-- Fondo de Estrellas -->
    <div class="stars"></div>

    <!-- Caja de Registro -->
    <div class="login-box">
        <h1 class="main-title">Astroveloxer</h1>
        <h2>Regístrate</h2>
        <form action="php/registro_usuario_be.php" method="POST">
            <div class="user-box">
            <input type="text" placeholder="Nombre" name="nombre" required />
                <label>Nombre de Usuario</label>
            </div>
            <div class="user-box">
            <input type="email" placeholder="Email" name="email" required />
                <label>Email</label>
            </div>
            <div class="user-box">
            <input type="password" placeholder="Contraseña" name="contrasena" required />
                <label>Contraseña</label>
            </div>
            <button type="submit" class="login-button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Registrarse
            </button>
            <a href="inicio_sesion.php" class="signup-link">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Inicia Sesión
            </a>
        </form>
    </div>

    <!-- JavaScript para el fondo de estrellas -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const starContainer = document.querySelector('.stars');
            const numStars = 150;  // Número de estrellas

            for (let i = 0; i < numStars; i++) {
                let star = document.createElement('div');
                star.className = 'star';

                // Posición aleatoria
                star.style.top = `${Math.random() * 100}vh`;
                star.style.left = `${Math.random() * 100}vw`;

                // Duración de parpadeo aleatoria
                star.style.animationDuration = `${Math.random() * 5 + 2}s`;

                starContainer.appendChild(star);
            }
        });
    </script>
</body>
</html>
