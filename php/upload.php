<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar que se haya subido un archivo
    if (isset($_FILES['astrofoto']) && $_FILES['astrofoto']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['astrofoto']['tmp_name'];
        $fileName = $_FILES['astrofoto']['name'];
        $fileSize = $_FILES['astrofoto']['size'];
        $fileType = $_FILES['astrofoto']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Extensiones permitidas
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');

        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Ruta donde se almacenará la imagen
            $uploadFileDir = '../uploads/';
            $dest_path = $uploadFileDir . $fileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Guardar la información en la base de datos
                $conn = new mysqli('localhost', 'root', '', 'astroveloxer');

                // Verifica la conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $username = $conn->real_escape_string($_POST['username']);
                $description = $conn->real_escape_string($_POST['description']);
                $filepath = $conn->real_escape_string($dest_path);

                $sql = "INSERT INTO fotos (username, description, filepath) VALUES ('$username', '$description', '$filepath')";

                if ($conn->query($sql) === TRUE) {
                    header("Location: ../Astrofotografia.php?status=success");
                } else {
                    header("Location: ../Astrofotografia.php?status=error");
                }

                $conn->close();
            } else {
                header("Location: ../Astrofotografia.php?status=error");
            }
        } else {
            header("Location: ../Astrofotografia.php?status=error");
        }
    } else {
        header("Location: ../Astrofotografia.php?status=error");
    }
} else {
    header("Location: ../Astrofotografia.php?status=error");
}
