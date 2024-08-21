<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$token = bin2hex(random_bytes(50)); // Genera un token único

$query = "INSERT INTO usuarios(nombre, email, contrasena, verificado, token)
          VALUES('$nombre', '$email', '$contrasena', 0, '$token')";

/* Verificación de correo */
$verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' ");

if (mysqli_num_rows($verificar_email) > 0) {
    echo '
    <script>
        alert("Este email ya está registrado.");
        window.location = "../inicio_sesion.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    // Iniciar sesión y guardar el nombre de usuario en la sesión
    session_start();
    $_SESSION['usuario'] = $nombre;

    // Enviar el correo de verificación
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'mrsmonitoreoderendimientosof@gmail.com'; // Tu correo de Gmail
        $mail->Password = 'e z c w k c p i u t c k w i d y'; // Tu contraseña de correo de Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuración del correo
        $mail->setFrom('your-email@gmail.com', 'MRS');
        $mail->addAddress($email, $nombre);
        $mail->isHTML(true);
        $mail->Subject = 'Verifica tu correo.';
        $mail->Body    = 'Hola ' . $nombre . ',<br><br>Bienvenido a la comunidad ASTROVELOXER. 
        Gracias por verificar tu correo.</a>';

        $mail->send();
        echo '
        <script>
        alert("Gracias por registrarte! Por favor, verifica tu correo electrónico.");
        window.location = "../inicio_sesion.php";
        </script>
        ';
    } catch (Exception $e) {
        echo '
        <script>
        alert("El registro fue exitoso pero el correo de verificación no pudo ser enviado. Error: ' . $mail->ErrorInfo . '");
        window.location = "../inicio_sesion.php";
        </script>
        ';
    }
} else {
    echo '
    <script>
    alert("Inténtelo de nuevo, usuario no almacenado");
    window.location = "../inicio_sesion.php";
    </script>
    ';
}

mysqli_close($conexion);

?>
