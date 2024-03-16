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