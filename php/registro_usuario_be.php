<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);  // Encriptar la contraseña
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
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'astroveloxer@gmail.com'; // Tu dirección de correo de Gmail
        $mail->Password = 'bxoq yezx maff rabx'; // Tu contraseña de aplicación de Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuración del remitente y destinatario
        $mail->setFrom('astroveloxer@gmail.com', 'Astroveloxer'); // Asegúrate de que coincida con el correo usado en $mail->Username
        $mail->addAddress($email, $nombre);

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Verifica tu correo.';
        $mail->Body    = ' Hola ' . $nombre . ',<br><br>Bienvenido a la comunidad ASTROVELOXER. ';

        // Enviar el correo
        $mail->send();
        echo '
        <script>
        alert("Gracias por registrarte y unirte a la comunidad ASTROVELOXER! ");
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
