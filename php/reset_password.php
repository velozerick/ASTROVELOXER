<?php
include 'conexion_be.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verificar si el token es válido y no ha expirado
    $stmt = $conexion->prepare("SELECT id FROM usuarios WHERE reset_token = ? AND reset_expiry > NOW()");
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Mostrar el formulario para restablecer la contraseña
        ?>


        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Restablecer Contraseña</title>
            <link rel="stylesheet" href="../is.css"> 
        </head>
        <body>
             <!-- Fondo de Estrellas -->
    <div class="stars"></div>
    
            <div class="login-box">
                <h1>Restablecer Contraseña</h1>
                <form action="update_password.php" method="POST">
                    <input type="hidden" name="token" value="<?php echo $token; ?>">
                    <div class="user-box">
                        <input type="password" name="contrasena" required />
                        <label>Nueva Contraseña</label>
                    </div>
                    <button type="submit">Restablecer Contraseña</button>
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
        <?php
    } else {
        echo '
        <script>
        alert("El enlace es inválido o ha expirado.");
        window.location = "../inicio_sesion.php";
        </script>
        ';
    }
}
?>
