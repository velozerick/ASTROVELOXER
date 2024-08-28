<?php
session_start();

include 'conexion_be.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Consulta para obtener el hash de la contraseña en la base de datos
$validar_login = mysqli_query($conexion, "SELECT id, nombre, contrasena FROM usuarios WHERE email ='$email'");

if (mysqli_num_rows($validar_login) > 0) {
    $row = mysqli_fetch_assoc($validar_login);

    // Verificar la contraseña utilizando password_verify
    if (password_verify($contrasena, $row['contrasena'])) {
        $_SESSION['usuario'] = $row['nombre'];  // Guardar el nombre del usuario en la sesión
        $_SESSION['usuario_id'] = $row['id'];   // Guardar el ID del usuario en la sesión
        header("location: ../Astroveloxer.php");
        exit;
    } else {
        echo '
        <script>
        alert("La contraseña es incorrecta.");
        window.location = "../inicio_sesion.php";
        </script>
        ';
    }
} else {
    echo '
    <script>
    alert("El usuario no existe.");
    window.location = "../inicio_sesion.php";
    </script>
    ';
}
?>
