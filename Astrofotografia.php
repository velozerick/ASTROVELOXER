<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Por favor debes iniciar sesión.");
    window.location = "inicio_sesion.php";
    </script>
    ';
    session_destroy();
    die();
}

$nombreUsuario = $_SESSION['usuario'];  // Obtener el nombre del usuario desde la sesión
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrofotografía</title>
    <link rel="stylesheet" href="Astroveloxer.css">
   
</head>
<body>
    <div class="stars"></div>
    
    <!-- Barra de Navegación -->
    <header class="header">
        <nav class="navbar">
            <div class="burger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="Astroveloxer.php">ASTROVELOXER</a></li>
                <li><a href="#astrofotografia">Astrofotografía</a></li>
                <li><a href="calendario.php">Calendario astronómico</a></li>
                <li><a href="#" onclick="alert('La página EIEMEX aún no está disponible. ¡Vuelve pronto!');">EIEMEX Próximamente</a></li>
                <li class="welcome-message">Bienvenid@ <?php echo $nombreUsuario; ?></li>

            </ul>
        </nav>
    </header>
    
    <!-- HOME SECTION -->
    <section class="explore-home" id="home">
        <div class="explore-content">
            <h3>Explora y Comparte el Cosmos</h3>
            <p>Sumérgete en la belleza del universo a través de nuestra colección de imágenes astronómicas, y únete a la comunidad compartiendo tus propias capturas del cielo.</p>
        </div>
    </section>
    

    <!-- SECCIÓN DE ASTROFOTOGRAFÍA -->
    <section class="astrofotografia" id="astrofotografia">
        <h1 class="heading">Astrofotografía</h1>
        
        <!-- Filtros de imágenes -->
        <div class="filter-buttons">
            <button data-filter="all" class="active">Todo</button>
            <button data-filter="nebulosa">Nebulosas</button>
            <button data-filter="planeta">Planetas</button>
            <button data-filter="galaxia">Galaxias</button>
        </div>

<!-- Galería de imágenes -->
<div class="image-gallery">
    <div class="image-item galaxia" onclick="showImage('img/BD3E5271-1BBC-4657-8336-3CC50B5EB838.jpg', '<ul><li><strong>Nombre:</strong> Galaxia de la Aguja (Caldwell 38) (NGC 4565)</li><li><strong>Distancia:</strong> 40 millones de años luz</li><li><strong>Magnitud aparente:</strong> 9.6</li><li><strong>Constelación:</strong> Coma Berenices</li><li><strong>Tipo de objeto:</strong> Galaxia espiral</li></ul>')">
        <img src="img/BD3E5271-1BBC-4657-8336-3CC50B5EB838.jpg" alt="Galaxia de la Aguja" loading="lazy" width="400" height="200">
        <p>Galaxia de la Aguja</p>
    </div>
    
    <div class="image-item galaxia" onclick="showImage('img/BODE_ASTROVELOXER (1).jpg', '<ul><li><strong>Nombre:</strong> Galaxia de Bode (M81) y Galaxia del Cigarro (M82)</li><li><strong>Distancia:</strong> 12 millones de años luz (ambas galaxias)</li><li><strong>Magnitud aparente:</strong> M81 (6.9), M82 (8.4)</li><li><strong>Constelación:</strong> Osa Mayor</li><li><strong>Tipo de objeto:</strong> M81: Galaxia espiral, M82: Galaxia irregular y galaxia con brote estelar</li></ul>')">
        <img src="img/BODE_ASTROVELOXER (1).jpg" alt="Galaxia de Bode y Cigarro" loading="lazy" width="400" height="200">
        <p>Galaxia de Bode y Galaxia del Cigarro</p>
    </div>
    
    
    <div class="image-item planeta" onclick="showImage('img/jup11.jpg', '<ul><li><strong>Nombre:</strong> Júpiter</li><li><strong>Distancia media del Sol:</strong> 778 millones de km</li><li><strong>Diámetro:</strong> 142,984 km</li><li><strong>Tipo de objeto:</strong> Planeta gigante gaseoso</li><li><strong>Características:</strong> El planeta más grande del Sistema Solar, famoso por su Gran Mancha Roja y sus 79 lunas conocidas, incluyendo las cuatro lunas galileanas: Ío, Europa, Ganimedes y Calisto</li></ul>')">
        <img src="img/jup11.jpg" alt="Júpiter" loading="lazy" width="400" height="200">
        <p>Júpiter</p>
    </div>
    

    <div class="image-item luna" onclick="showImage('img/lun_Original Copy (1).JPG', '<ul><li><strong>Nombre:</strong> La Luna</li><li><strong>Distancia media de la Tierra:</strong> 384,400 km</li><li><strong>Diámetro:</strong> 3,474.8 km</li><li><strong>Tipo de objeto:</strong> Satélite natural</li><li><strong>Características:</strong> Único satélite natural de la Tierra, presenta fases debido a su órbita alrededor de la Tierra, con una superficie marcada por cráteres, mares lunares y montañas</li></ul>')">
        <img src="img/lun_Original Copy (1).JPG" alt="La Luna" loading="lazy" width="400" height="200">
        <p>La Luna</p>
    </div>
    
    <div class="image-item galaxia" onclick="showImage('img/M101_ASTROVELOXER (1).jpg', '<ul><li><strong>Nombre:</strong> Galaxia del Molinete (M101)</li><li><strong>Distancia:</strong> 21 millones de años luz</li><li><strong>Magnitud aparente:</strong> 7.9</li><li><strong>Constelación:</strong> Osa Mayor</li><li><strong>Tipo de objeto:</strong> Galaxia espiral</li><li><strong>Características:</strong> Una de las galaxias espirales más grandes conocidas, con un diámetro de aproximadamente 170,000 años luz</li></ul>')">
        <img src="img/M101_ASTROVELOXER (1).jpg" alt="Galaxia del Molinete" loading="lazy" width="400" height="200">
        <p>Galaxia del Molinete</p>
    </div>
    
    <div class="image-item galaxia" onclick="showImage('img/NGC4038_ASTROVELOXER.jpg', '<ul><li><strong>Nombre:</strong> NGC 4038 y NGC 4039 (Galaxias Antennae)</li><li><strong>Distancia:</strong> 60 millones de años luz</li><li><strong>Magnitud aparente:</strong> 10.7</li><li><strong>Constelación:</strong> Corvus</li><li><strong>Tipo de objeto:</strong> Galaxias en colisión</li><li><strong>Características:</strong> Conocidas como las Galaxias Antennae debido a las largas colas de estrellas que se extienden hacia afuera, resultado de la colisión entre ambas galaxias</li></ul>')">
        <img src="img/NGC4038_ASTROVELOXER.jpg" alt="Galaxias Antennae" loading="lazy" width="400" height="200">
        <p>NGC 4038 y NGC 4039 (Galaxias Antennae)</p>
    </div>
    
    <div class="image-item nebulosa" onclick="showImage('img/ORION-velozeronly~3.jpg', '<ul><li><strong>Nombre:</strong> Nebulosa de Orión (M42)</li><li><strong>Distancia:</strong> 1,344 años luz</li><li><strong>Magnitud aparente:</strong> 4.0</li><li><strong>Constelación:</strong> Orión</li><li><strong>Tipo de objeto:</strong> Nebulosa de emisión</li><li><strong>Características:</strong> Una de las nebulosas más brillantes en el cielo, visible a simple vista, región de formación estelar activa, hogar de muchas estrellas jóvenes y protoestrellas</li></ul>')">
        <img src="img/ORION-velozeronly~3.jpg" alt="Nebulosa de Orión" loading="lazy" width="400" height="200">
        <p>Nebulosa de Orión</p>
    </div>
    
    <div class="image-item planeta" onclick="showImage('img/saturn (1).jpg', '<ul><li><strong>Nombre:</strong> Saturno</li><li><strong>Distancia media del Sol:</strong> 1,429 millones de km</li><li><strong>Diámetro:</strong> 120,536 km</li><li><strong>Tipo de objeto:</strong> Planeta gigante gaseoso</li><li><strong>Características:</strong> Conocido por sus prominentes anillos compuestos de hielo y roca, posee 83 lunas conocidas, siendo Titán la más grande y una de las más interesantes para la exploración</li></ul>')">
        <img src="img/saturn (1).jpg" alt="Saturno" loading="lazy" width="400" height="200">
        <p>Saturno</p>
    </div>
    
    <div class="image-item estrella" onclick="showImage('img/sunfull_ASTROVELOXER.jpg', '<ul><li><strong>Nombre:</strong> El Sol</li><li><strong>Distancia media de la Tierra:</strong> 149.6 millones de km (1 Unidad Astronómica)</li><li><strong>Diámetro:</strong> 1,392,700 km</li><li><strong>Tipo de objeto:</strong> Estrella enana amarilla (tipo espectral G2V)</li><li><strong>Características:</strong> Estrella central del Sistema Solar y fuente principal de energía para la Tierra, compuesto principalmente de hidrógeno (74%) y helio (24%), con energía producida a través de la fusión nuclear en su núcleo</li></ul>')">
        <img src="img/sunfull_ASTROVELOXER.jpg" alt="El Sol" loading="lazy" width="400" height="200">
        <p>El Sol</p>
    </div>
    
    <div class="image-item nebulosa" onclick="showImage('img/LAGOON.jpg', '<ul><li><strong>Nombre:</strong> Nebulosa de la Laguna (M8) (NGC 6523)</li><li><strong>Distancia:</strong> 4,100 años luz</li><li><strong>Magnitud aparente:</strong> 6.0</li><li><strong>Constelación:</strong> Sagitario</li><li><strong>Tipo de objeto:</strong> Nebulosa de emisión</li><li><strong>Características:</strong> Región de formación estelar activa, visible a simple vista desde cielos oscuros, hogar de muchas estrellas jóvenes y protoestrellas, famosa por su estructura brillante y oscura que se asemeja a una laguna.</li></ul>')">
        <img src="img/LAGOON.jpg" alt="Nebulosa de la Laguna" loading="lazy" width="400" height="200">
        <p>Nebulosa de la Laguna</p>
    </div>
    


</div>


<!-- Lightbox para mostrar la imagen seleccionada -->
<div id="lightbox" class="lightbox" onclick="closeLightbox()">
    <div class="lightbox-content" onclick="event.stopPropagation()">
        <img id="lightbox-image" src="" alt="Imagen Seleccionada">
        <div id="lightbox-info"></div>
        <span class="close-btn" onclick="closeLightbox()">&times;</span>
    </div>
</div>



    </section>

<!-- SECCIÓN DE PUBLICA TUS FOTOS -->
<section class="publish-section" id="publica-tus-fotos">
    <div class="publish-content">
        <h3>Comparte tu Visión del Cosmos</h3>
        <p>¡Únete a nuestra comunidad de astrofotógrafos! Aquí puedes ver y compartir capturas del cielo estrellado.</p>
        
        <form id="upload-form" action="php/upload.php" method="post" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Tu nombre" required>
            <input type="file" name="astrofoto" required>
            <textarea name="description" placeholder="Describe tu foto (máximo 300 caracteres)" required maxlength="300"></textarea>
            <button type="submit">Subir Foto</button>
        </form>

        <div class="photo-forum">
            <h4>Astrofotografía de la comunidad</h4>
            <div class="forum-gallery" id="user-gallery">
                <!-- Aquí se mostrarán las fotos subidas por los usuarios -->
                <?php
                // Conexión a la base de datos
                $servername = "localhost"; 
                $username = "root"; 
                $password = ""; 
                $dbname = "astroveloxer"; 

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $sql = "SELECT username, description, filepath FROM fotos ORDER BY upload_time DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="forum-item">';
                        echo '<img src="' . $row["filepath"] . '" alt="Foto de usuario" loading="lazy" width="300" height="200" class="user-photo" onclick="openUserLightbox(this, \'' . $row["description"] . '\')">';
                        echo '<p>' . $row["description"] . '<br><em>Compartido por ' . $row["username"] . '</em></p>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No se han subido fotos aún.</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Lightbox exclusivo para fotos de usuarios -->
<div id="userLightbox" class="user-lightbox">
    <span class="close" onclick="closeUserLightbox()">&times;</span>
    <img class="user-lightbox-content" id="userLightboxImg">
    <div id="userLightboxCaption"></div>
</div>




<!-- Footer -->
<footer class="footer">
    <div class="social-links">
        <a href="https://www.instagram.com/Astroveloxer" target="_blank" class="social-link">
            <img src="img/instagram-logo.webp" alt="Instagram">
            <span>Astroveloxer</span>
        </a>
    </div>
    <div class="footer-info">
        <p>&copy; 2024 Astroveloxer. Todos los derechos reservados.</p>
    </div>
</footer>
    
    <script src="astroveloxer.js"></script>
</body>
</html>
