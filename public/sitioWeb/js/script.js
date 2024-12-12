
// Selecciona el botón de hamburguesa y el menú
const hamburger = document.querySelector('.hamburger');
const menu = document.getElementById('menu');

// Cuando se hace clic en el botón hamburguesa
hamburger.addEventListener('click', () => {
    // Alterna la clase "open" para animar las barras
    hamburger.classList.toggle('open');
    
    menu.classList.toggle('show');
});
