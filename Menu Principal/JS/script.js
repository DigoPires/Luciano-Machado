const mobileMenu = document.querySelector('.mobile-menu');
const navBar = document.querySelector('.nav-bar');
const closeMenu = document.querySelector('.mobile-menu-fechar');
const activeClass = 'active';

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
    header.classList.toggle("rolagem", window.scrollY > 50);
});

closeMenu.addEventListener("click", () => navBar.classList.remove('active'));