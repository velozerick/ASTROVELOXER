document.addEventListener("DOMContentLoaded", function() {
    const starContainer = document.querySelector('.stars');
    const numStars = 150;  // Número de estrellas

    for (let i = 0; i < numStars; i++) {
        let star = document.createElement('div');
        star.className = 'star';

        // Posición aleatoria
        star.style.top = `${Math.random() * 100}vh`;
        star.style.left = `${Math.random() * 100}vw`;

        // Duración de parpadeo aleatoria
        star.style.animationDuration = `${Math.random() * 5 + 2}s`;

        starContainer.appendChild(star);
    }
});

document.addEventListener("scroll", function() {
    const scrollPosition = window.scrollY;
    const windowHeight = window.innerHeight;
    const body = document.body;

    // Calcular el progreso del desplazamiento en la página (0 a 1)
    const scrollProgress = scrollPosition / (body.scrollHeight - windowHeight);

    // Ajustar los colores del degradado sin opacidad para evitar el aclarado
    const colorChange = `linear-gradient(to bottom, 
        rgb(200, 82, 61),  /* Atardecer más oscuro */
        rgb(50, 8, 60),    /* Tono de transición más oscuro */
        rgb(1, 5, 20),     /* Crepúsculo aún más oscuro */
        rgba(0, 0, 0, 1))`;  /* Noche constante al final */

    body.style.background = colorChange;
});

function selectCard(cardType) {
    const celularCard = document.getElementById('card-celular');
    const telescopioCard = document.getElementById('card-telescopio');
    
    // Restablecer todas las cards
    celularCard.classList.remove('selected');
    telescopioCard.classList.remove('selected');
    
    // Aplicar efectos a la card seleccionada
    if (cardType === 'celular') {
        celularCard.classList.add('selected');
        console.log('Celular card selected'); // Depuración
    } else if (cardType === 'telescopio') {
        telescopioCard.classList.add('selected');
        console.log('Telescopio card selected'); // Depuración
    }
}

document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        document.querySelectorAll('.card').forEach(c => {
            if (c !== card) {
                c.classList.add('inactive');
            }
        });
        card.classList.remove('inactive');
    });

    card.addEventListener('mouseleave', () => {
        document.querySelectorAll('.card').forEach(c => c.classList.remove('inactive'));
    });
});


function toggleMenu() {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav');
    
    burger.classList.toggle('active');
    nav.classList.toggle('active');
    console.log('Menu toggled');  // Depuración
}





// Filtros para la galería de imágenes
const filterButtons = document.querySelectorAll('.filter-buttons button');
const imageItems = document.querySelectorAll('.image-item');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        const filter = button.getAttribute('data-filter');

        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        imageItems.forEach(item => {
            if (filter === 'all' || item.classList.contains(filter)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});






function showImage(imageSrc, imageInfo) {
    // Crear un contenedor para el lightbox
    const lightbox = document.createElement('div');
    lightbox.classList.add('lightbox');
    
    // Crear el contenido del lightbox
    lightbox.innerHTML = `
        <div class="lightbox-content">
            <img src="${imageSrc}" alt="Imagen seleccionada">
            <div id="lightbox-info">${imageInfo}</div>
            <span class="close-btn" onclick="closeLightbox()">&times;</span>
        </div>
    `;
    
    document.body.appendChild(lightbox);
    
    // Mostrar el lightbox
    lightbox.style.display = 'flex';
}

function closeLightbox() {
    const lightbox = document.querySelector('.lightbox');
    if (lightbox) {
        lightbox.remove();
    }
}





function openUserLightbox(img, description) {
    var lightbox = document.getElementById("userLightbox");
    var lightboxImg = document.getElementById("userLightboxImg");
    var captionText = document.getElementById("userLightboxCaption");

    lightbox.style.display = "block";
    lightboxImg.src = img.src;
    captionText.innerHTML = description;
}

function closeUserLightbox() {
    var lightbox = document.getElementById("userLightbox");
    lightbox.style.display = "none";
}
