<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="../is.css"> <!-- Asegúrate de que la ruta del CSS es correcta -->
</head>
<body>
    <div class="login-box">
        <h1>Recuperar Contraseña</h1>
        <form action="send_reset_link.php" method="POST">
            <div class="user-box">
                <input type="email" name="email" required />
                <label>Correo Electrónico</label>
            </div>
            <button type="submit">Enviar Enlace</button>
        </form>
    </div>
</body>
</html>
