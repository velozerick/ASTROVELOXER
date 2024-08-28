<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Verificar si el correo electrónico existe en la base de datos
    $stmt = $conexion->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Generar un token y la fecha de expiración
        $token = bin2hex(random_bytes(50));
        $expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

        // Guardar el token en la base de datos
        $stmt = $conexion->prepare("UPDATE usuarios SET reset_token = ?, reset_expiry = ? WHERE email = ?");
        $stmt->bind_param('sss', $token, $expiry, $email);
        $stmt->execute();

        // Enviar el enlace de restablecimiento de contraseña por correo
        $reset_link = "http://localhost/ASTROVELOXER/php/reset_password.php?token=" . $token;


        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'astroveloxer@gmail.com';
            $mail->Password = 'bxoq yezx maff rabx';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('astroveloxer@gmail.com', 'Astroveloxer');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Restablecimiento de contraseña';
            $mail->Body    = 'Haz clic en el siguiente enlace para restablecer tu contraseña: <a href="' . $reset_link . '">Restablecer Contraseña</a>';

            $mail->send();
            echo '
            <script>
            alert("Se ha enviado un enlace de restablecimiento a tu correo electrónico.");
            window.location = "../inicio_sesion.php";
            </script>
            ';
        } catch (Exception $e) {
            echo '
            <script>
            alert("No se pudo enviar el enlace. Inténtalo de nuevo.");
            window.location = "forgot_password.php";
            </script>
            ';
        }
    } else {
        echo '
        <script>
        alert("Este correo no está registrado.");
        window.location = "forgot_password.php";
        </script>
        ';
    }
}
?>
