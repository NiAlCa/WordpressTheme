function gymWordPress() {
    if(document.querySelector('.swiper')) {
        const opciones = {
            loop: true,
            autoplay: {
                delay: 3000
            }
        }
        new Swiper('.swiper', opciones);
    }

   
    const hamburger = document.querySelector('.hamburguer-menu svg')
    hamburger.addEventListener('click', function() {
        const menuPrincipal = document.querySelector('.contenedor-menu');
        menuPrincipal.classList.toggle('mostrar');
    })
}
