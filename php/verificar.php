<?php

// Mostrar errores (para depuración)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexion_be.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Mostrar el token para verificar que se recibió correctamente
    echo "Token recibido: " . htmlspecialchars($token) . "<br>";

    $query = "SELECT * FROM usuarios WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $update_query = "UPDATE usuarios SET verificado=1 WHERE token='$token'";

            if (mysqli_query($conexion, $update_query)) {
                echo '
                <script>
                    alert("Correo verificado con éxito. Ahora puedes iniciar sesión.");
                    window.location = "../templates/loginMRS.php";
                </script>
                ';
            } else {
                echo "Error al actualizar el registro: " . mysqli_error($conexion);
            }
        } else {
            echo '
            <script>
                alert("Token de verificación no válido.");
                window.location = "../loginMRS.php";
            </script>
            ';
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }
} else {
    echo '
    <script>
        alert("Token no proporcionado.");
        window.location = "../loginMRS.php";
    </script>
    ';
}

mysqli_close($conexion);

?>
