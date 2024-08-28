<?php
include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['token'];
    $nueva_contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

    // Actualizar la contraseña y eliminar el token
    $stmt = $conexion->prepare("UPDATE usuarios SET contrasena = ?, reset_token = NULL, reset_expiry = NULL WHERE reset_token = ?");
    $stmt->bind_param('ss', $nueva_contrasena, $token);
    $stmt->execute();

    echo '
    <script>
    alert("Tu contraseña ha sido restablecida correctamente.");
    window.location = "../inicio_sesion.php";
    </script>
    ';
}
?>
