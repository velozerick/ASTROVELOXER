<?php
session_start();

include 'conexion_be.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Consulta para obtener el nombre y el ID del usuario junto con el email y la contraseña
$validar_login = mysqli_query($conexion, "SELECT id, nombre FROM usuarios WHERE email ='$email' AND contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0){
    $row = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $row['nombre'];  // Guardar el nombre del usuario en la sesión
    $_SESSION['usuario_id'] = $row['id'];   // Guardar el ID del usuario en la sesión
    header("location: ../Astroveloxer.php");
    exit;
}else{
    echo'
    <script>
    alert("El usuario no existe.");
    window.location = "../inicio_sesion.php";
    </script>
    ';
    exit;
}
?>
