<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Incluye el autoloader de Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'php/conexion_be.php';  // Asegúrate de que la ruta sea correcta

    $user_email = $_POST['user_email'];
    $evento_nombre = $_POST['evento_nombre'];
    $fecha_evento = $_POST['selected_date'];
    $tipo_notificacion = $_POST['notify_time'];

    // Insertar la notificación en la base de datos
    $query = "INSERT INTO notificaciones_eventos (user_email, evento_nombre, fecha_evento, tipo_notificacion) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param('ssss', $user_email, $evento_nombre, $fecha_evento, $tipo_notificacion);

    if ($stmt->execute()) {
        echo '';

        // Enviar el correo de notificación
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP de Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'astroveloxer@gmail.com'; // Tu dirección de correo de Gmail
            $mail->Password = 'bxoq yezx maff rabx'; // Tu contraseña de aplicación de Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Configuración del remitente y destinatario
            $mail->setFrom('astroveloxer@gmail.com', 'Astroveloxer'); // Cambia el remitente a Astroveloxer
            $mail->addAddress($user_email); // Dirección de correo del usuario

            // Establecer codificación UTF-8
            $mail->CharSet = 'UTF-8';

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = "Notificación del evento astronómico: $evento_nombre";
            $mail->Body    = "Hola,<br><br>Este es un recordatorio de que has configurado una notificación para el evento astronómico <strong>$evento_nombre</strong> que ocurrirá el día $fecha_evento. de este mes<br><br>Saludos,<br>El equipo de Astroveloxer";

            // Enviar el correo
            $mail->send();
            echo 'El correo de notificación ha sido enviado';
        } catch (Exception $e) {
            echo "El correo no se pudo enviar. Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 'Error al guardar la notificación';
    }

    $stmt->close();
    $conexion->close();
}

?>