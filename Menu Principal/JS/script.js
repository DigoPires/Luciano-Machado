// script hamburguer

const mobileMenu = document.querySelector('.mobile-menu');
const navBar = document.querySelector('.nav-bar');
const closeMenu = document.querySelector('.mobile-menu-fechar-x');
const activeClass = 'active';

const logo = document.querySelector(".logo-container");
const menu = document.querySelector(".menu-principal");
const footer = document.querySelector(".footer");

function setTopo(){
    let static = window.pageYoffset
    scrollTo(0, static);
}

mobileMenu.addEventListener("click", () => {
    navBar.classList.add(activeClass);
});

document.addEventListener('scroll', () => { //bloqueia o scroll quando aberto a navbar no mobile
    if(navBar.classList.contains(activeClass)) {
        setTopo();
    }
});

window.addEventListener("scroll", () => {
    let header = document.querySelector("#header");
    header.classList.toggle("rolagem", window.scrollY > 1);
});

closeMenu.addEventListener("click", () => navBar.classList.remove('active'));

// if(navBar.addEventListener("click")){
//     navBar.classList.remove('active')
// }



// fechar ao clicar fora da nav-bar
logo.addEventListener("click", () => navBar.classList.remove('active'));
menu.addEventListener("click", () => navBar.classList.remove('active'));
footer.addEventListener("click", () => navBar.classList.remove('active'));




//script carrosel
let currentIndex = 0;

function showSlide(index) {
    const wrapper = document.querySelector('.carousel-wrapper');
    const itemWidth = document.querySelector('.carousel-item').clientWidth;

    currentIndex = index;
    wrapper.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
}

function nextSlide() {
    const totalItems = document.querySelectorAll('.carousel-item').length;
    currentIndex = (currentIndex + 1) % totalItems;
    showSlide(currentIndex);
}

function prevSlide() {
    const totalItems = document.querySelectorAll('.carousel-item').length;
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;

    showSlide(currentIndex);
}

