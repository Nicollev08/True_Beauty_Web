document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.header .navbar');
    const menuIcon = document.querySelector('.header .menu-icon');
    
    menuIcon.addEventListener('click', function () {
        navbar.classList.toggle('show');
    });
});