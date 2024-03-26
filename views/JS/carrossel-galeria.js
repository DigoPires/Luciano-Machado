function prevSlide(carouselClass) {
    const carousel = document.querySelector('.' + carouselClass + ' ul');
    const imagens = carousel.getElementsByTagName('li');
    const lastSlide = imagens[imagens.length - 1];
    carousel.insertBefore(lastSlide, imagens[0]);
}

function nextSlide(carouselClass) {
    const carousel = document.querySelector('.' + carouselClass + ' ul');
    const primeiroSlides = carousel.getElementsByTagName('li')[0];
    carousel.appendChild(primeiroSlides);
}
