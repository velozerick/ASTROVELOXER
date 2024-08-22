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
    <title>Astroveloxer - Calendario Astronómico</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="calendar.css">
    <script src="astroveloxer.js"></script>
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
                <li><a href="Astrofotografia.php">Astrofotografía</a></li>
                <li><a href="#calendario">Calendario astronómico</a></li>
                <li><a href="#" onclick="alert('La página EIEMEX aún no está disponible. ¡Vuelve pronto!');">EIEMEX Próximamente</a></li>
                <li class="welcome-message">Bienvenid@ <?php echo $nombreUsuario; ?></li>
            </ul>
        </nav>
    </header>
    
    <!-- Calendario Astronómico -->
    <section class="calendar-section" id="calendario">
        <div class="calendar-container">
            <h1 class="main-title">CALENDARIO ASTRONÓMICO</h1>
            <p class="calendar-description">Explora los eventos astronómicos más importantes de este mes y mantente al día.</p>
            <div id="calendar"></div>
        </div>
    </section>

    <!-- Ventana Emergente para Configurar Notificaciones -->
    <div id="notification-popup" class="notification-popup">
        <div class="popup-content">
            <h2 id="event-title">Evento Astronómico</h2>
            <p>¿Cuándo te gustaría recibir la notificación?</p>
            <form id="notification-form">
                <input type="hidden" id="selected-date" name="selected_date">
                <input type="hidden" id="evento_nombre" name="evento_nombre">
                <label>
                    <input type="radio" name="notify_time" value="1_day_before" required> Un día antes
                </label>
                <label>
                    <input type="radio" name="notify_time" value="on_the_day"> El mismo día
                </label>
                <label for="user_email">Correo electrónico:</label>
                <input type="email" id="user_email" name="user_email" required placeholder="Ingresa tu correo">
                <div class="button-group">
                    <button type="submit" class="astro-button send-button">
                        <i class="fas fa-rocket"></i> Enviar
                    </button>
                    <button type="button" class="astro-button cancel-button" onclick="closePopup()">
                        <i class="fas fa-star"></i> Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const starContainer = document.querySelector('.stars');
        const numStars = 150;

        for (let i = 0; i < numStars; i++) {
            let star = document.createElement('div');
            star.className = 'star';
            star.style.top = `${Math.random() * 100}vh`;
            star.style.left = `${Math.random() * 100}vw`;
            star.style.animationDuration = `${Math.random() * 5 + 2}s`;
            starContainer.appendChild(star);
        }

        // Generar calendario para septiembre
        const calendar = document.getElementById('calendar');
        const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        const date = new Date();
        const today = date.getDate();
        const currentMonth = 8; // Septiembre
        const currentYear = date.getFullYear();

        const firstDay = new Date(currentYear, currentMonth, 1).getDay();
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

        let calendarHTML = `<h2>${monthNames[currentMonth]} ${currentYear}</h2>`;
        calendarHTML += '<div class="calendar-grid">';

        const daysOfWeek = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];
        for (let day of daysOfWeek) {
            calendarHTML += `<div class="day-name">${day}</div>`;
        }

        for (let i = 0; i < firstDay; i++) {
            calendarHTML += '<div class="empty"></div>';
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const event = checkAstronomicalEvent(i, currentMonth, currentYear);
            if (event) {
                if (i < today && currentMonth === date.getMonth() && currentYear === date.getFullYear()) {
                    calendarHTML += `<div class="day event-past">${i}<span class="event-info">${event} (pasado)</span></div>`;
                } else {
                    calendarHTML += `<div class="day event" onclick="openPopup(${i}, '${event}')">${i}<span class="event-info">${event}</span></div>`;
                }
            } else {
                calendarHTML += `<div class="day">${i}</div>`;
            }
        }

        calendarHTML += '</div>';
        calendar.innerHTML = calendarHTML;
    });

    function checkAstronomicalEvent(day, month, year) {
        const events = {
            1: "Luna cerca de Mercurio",
            2: "Luna Nueva",
            5: "Mercurio en máxima elongación",
            7: "Saturno en oposición",
            9: "LLuvia de meteoros Perseidas",
            11: "Luna Cuarto creciente",
            17: "Ocultación lunar de Saturno",
            18: "Superluna y Eclipse Lunar",
            20: "Neptuno en oposición",
            22: "Equinoccio de septiembre",
            23: "Luna cerca de Júpiter",
            25: "Luna cerca de Marte",
            27: "Lluvia de meteoros Sextantidas Diurnas",
            30: "Conjunción solar, Mercurio"

        };
        return events[day] || null;
    }

    function openPopup(day, eventTitle) {
        document.getElementById('event-title').innerText = eventTitle;
        document.getElementById('selected-date').value = day;
        document.getElementById('evento_nombre').value = eventTitle;
        document.getElementById('notification-popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('notification-popup').style.display = 'none';
    }

    document.getElementById('notification-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);

        fetch('guardar_notificacion.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            closePopup();
        })
        .catch(error => console.error('Error:', error));
    });
    </script>
</body>
</html>
