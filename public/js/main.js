/*Navbar */
window.addEventListener('scroll',function(){
    let nav = document.querySelector('.navbar');
    nav.classList.toggle("sticky", window.scrollY > 0);
})
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