window.addEventListener("DOMContentLoaded", (event) => {
    carrousel(".swiper");
});

/*Nav movil */
let btnCloseNav = document.querySelector('#close-nav');
let navToggler = document.querySelector('#nav-toggler');
let navMovil = document.querySelector('.nav-movil');
navToggler.addEventListener('click',()=>{
    navMovil.classList.toggle('active');
});
btnCloseNav.addEventListener('click',()=>{
    navMovil.classList.remove('active');
})


function carrousel(clase) {
    const swiper = new Swiper(clase, {
        // Optional parameters
        direction: "horizontal",
        effect: "fade",
        autoplay: {
            delay: 5000,
        },
        loop: true,

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
        scrollbar: {
            // el: ".swiper-scrollbar",
        },
    });
}