window.addEventListener("DOMContentLoaded", (event) => {
    banner(".banner");
    carrousel(".inicio-caja-noticias",".swiper-pagination-noticias");
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


function banner(clase) {
    const swiper = new Swiper(clase, {
        // Optional parameters
        direction: "horizontal",
        effect: "fade",
        autoplay: {
            delay: 5000,
        },
        loop: true,
        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });
}
function carrousel(clase,paginador) {
    const  swiper = new Swiper(clase, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el:paginador,
          clickable: true,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
              slidesPerView: 1,
              spaceBetween: 20
            },
            // when window width is >= 480px
            550: {
              slidesPerView: 2,
              spaceBetween: 30
            },
            // when window width is >= 640px
            1200: {
              slidesPerView: 3,
              spaceBetween: 40
            }
        },
      });
}