<?php

session_start();

include 'conexion_be.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email ='$email'
and contrasena = '$contrasena'");


if (mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $email;
    header("location: ../Astroveloxer.html");
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